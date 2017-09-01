<?php
declare(strict_types = 1);

namespace App\Http\Middleware;

use Illuminate\Http\Request;

// Class Symfony\Component\HttpFoundation\Response is used instead of
// class Illuminate\Http\Response in order to avoid the following error:
//  local.ERROR:
//  Symfony\Component\Debug\Exception\FatalThrowableError:
//  Type error:
//  Argument 2 passed to App\Http\Middleware\RequestLogger::terminate() must be an instance of Illuminate\Http\Response,
//  instance of Illuminate\Http\RedirectResponse given
use Redis;
use Symfony\Component\HttpFoundation\Response;

use Predis\Connection\ConnectionException;

use Closure;
use Queue;
use App;


class RequestLogger
{
    private static $start;

    public function handle(Request $request, Closure $next)
    {

        self::$start = microtime(true);

        Redis::incr('visits');

        return $next($request);
    }

    public function terminate(Request $request, Response $response)
    {

       $this->pushToQueue($request);

    }

    private function pushToQueue($request)
    {
        $requestData = [
            'request_method' => $request->method(),
            'request_body' => $request->getContent(),
            'request_headers' => collect($request->headers->all())->toJson(),
            'request_uri'   => $request->getSchemeAndHttpHost().$request->getBaseUrl().$request->getPathInfo(),
            'request_date'  => new \DateTime(),
            'user_agent'    => $request->header('User-Agent') ?: 'Unknown',
            'response_time' => microtime(true) - self::$start,
            'cookies'=> collect($request->cookies->all())->toJson(),
            'client_ip' => $this->getClientIp()
        ];

        $logTable = config('request-logger.table', 'usagelogs');
        $logJob = new \App\Jobs\LogRequestJob($logTable, $requestData);
        try {
            $connection = Queue::connection('redis');
            $connection->pushOn('usageLogs', $logJob);
        } catch (ConnectionException $e) {
            //redis is not available => use local que
            $connection = Queue::connection('sync');
            $connection->push($logJob);
        }
    }


    private function getClientIp(){
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        return filter_var($client, FILTER_VALIDATE_IP) ? $client : filter_var($forward, FILTER_VALIDATE_IP) ? $forward : $_SERVER['REMOTE_ADDR'];
    }
}
