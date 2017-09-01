<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsagelogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usagelogs', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('request_date');
            $table->string('request_method');
            $table->text('request_body')->nullable();
            $table->text('request_headers')->nullable();
            $table->string('request_uri');
            $table->ipAddress('client_ip');
            $table->text('user_agent');
            $table->decimal('response_time');
            $table->text('cookies')->nullable();
            $table->index(['request_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usagelogs');
    }
}
