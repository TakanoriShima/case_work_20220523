<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('date');
            $table->string('weather');
            $table->string('staff');
            $table->text('notice')->nullable();
            $table->text('phone_record')->nullable();
            $table->text('mail_record')->nullable();
            $table->text('meeting')->nullable();
            $table->text('business_trip')->nullable();
            $table->text('training')->nullable();
            $table->string('image')->nullable();
            $table->text('other')->nullable();
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
