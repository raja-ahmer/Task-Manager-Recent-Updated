<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemainderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remainder', function (Blueprint $table) {
            $table->id('remainderId');
            $table->string('type');
            $table->date('date');
            $table->time('time');
            $table->boolean('status');
            $table->unsignedBigInteger('taskId');
            $table->foreign('taskId')->references('taskId')->on('task');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remainder');
    }
}
