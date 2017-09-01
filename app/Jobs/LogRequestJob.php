<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use DB;
use Illuminate\Foundation\Bus\Dispatchable;

class LogRequestJob implements ShouldQueue
{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $table;
    protected $data;

    /**
     * Create a new job instance.
     *
     * @param  string $table
     * @param  array $data
     */
    public function __construct($table, $data)
    {
        $this->table = $table;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{

            DB::reconnect();
            DB::table($this->table)->insert($this->data);

        }catch(\Exception $e){
            error_log($e->getMessage(), 3, '/var/tmp/haipass.log');
            throw new \Exception($e->getMessage());
        }

    }

}
