<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('paths', function (Blueprint $table) {
            $table->id()->nullable();
            $table->foreignId('primary_road_id')->nullable();
            $table->foreignId('jamarat_level_id')->nullable();
            $table->foreignId('return_road_id')->nullable();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    
    public function down()
    {
        //
    }
};
