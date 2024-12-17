<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('jamarat_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id');
            $table->string('name');
            $table->string('day');
            $table->string('time');
            $table->integer('throwing');
            $table->softDeletes();
            
        }); 
    }

   
    public function down()
    {
        
    }
};
