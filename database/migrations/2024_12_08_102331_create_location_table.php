<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTable extends Migration
{
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Location name
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    public function down()
    {
        Schema::dropIfExists('location');
    }
}
