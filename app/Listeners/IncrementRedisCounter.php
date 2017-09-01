<?php

namespace App\Listeners;

use App\Events\PasswordCrafted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Redis;

class IncrementRedisCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PasswordCrafted  $event
     * @return void
     */
    public function handle(PasswordCrafted $event)
    {
        Redis::incr('crafts');
    }
}
