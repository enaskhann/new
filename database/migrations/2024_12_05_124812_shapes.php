<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('shapes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->morphs('shapeable');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
    
    }
};
