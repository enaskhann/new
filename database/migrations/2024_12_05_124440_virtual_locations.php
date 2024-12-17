<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('virtual_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actual_location_id');
            $table->foreignId('hajj_office_id');
            $table->foreignId('company_id');
            $table->foreignId('office_id');
            $table->string('name');
            $table->integer('pilgrims');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {

    }

};
