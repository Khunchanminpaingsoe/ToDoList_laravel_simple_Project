<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{

    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->boolean('complete')->default(false);
            $table->text('content');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
