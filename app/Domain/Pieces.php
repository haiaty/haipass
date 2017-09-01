<?php
/**
 * User: haiaty.varotto
 * Date: 04/06/2017
 * Time: 00:59
 */
namespace App\Domain;


class Pieces
{

    /**
     * Pieces constructor.
     * @param $inputs array an array containing information needed to craft passwords
     * @throws \Exception
     */
    public function __construct($inputs)
    {

        $this->webApp = $this->extractWebAppName($inputs['web_app']);

        $this->passPhrase = $inputs['pass_phrase'];

        $this->offset = $inputs['offset'] ?? 1;

        $this->craftStrategy = $inputs['craft_strategy'] ?? 'haipass';

        $this->haipassKey = env('HAIPASS_KEY');

        if(is_null($this->haipassKey)){
            throw new \Exception('The Haipass Key is Missing. Please set it up in the .env file');
        }
    }


    /**
     * @param $webApp
     * @return string
     */
    private function extractWebAppName($webApp): string
    {
        $webAppName = '';

        $tokens = explode('.', $webApp);

        //it means that the webapp string is like 'facebook' or 'google'
        if(count($tokens) == 1){
            $webAppName = $tokens[0];
        }

        //it means that the webapp string is like 'http://facebook.com'
        if(count($tokens) == 2){

            $temp = explode('//', $tokens[0]);
            $webAppName = $temp[1];
        }

        //it means that the webapp is like 'http://www.facebook.com'
        if(count($tokens) == 3){

            $webAppName = $tokens[1];
        }

        return strtolower($webAppName);

    }

    /**
     * Get the name of the web application
     * @return string
     */
    public function nameOfTheWebApp(){
        return $this->webApp;
    }

    /**
     * Get the offset in case there is an offset
     * @return int
     */
    public function offset(){
        return $this->offset;
    }

    /**
     * Get the pass phrase
     * @return mixed
     */
    public function passPhrase(){
        return $this->passPhrase;
    }

    /**
     * Get the strategy name
     * @return string
     */
    public function craftStrategyName(){
        return $this->craftStrategy;
    }

    /**
     * Get the secret haipass key
     * @return mixed
     */
    public function haipassKey(){
        return $this->haipassKey;
    }
}
