<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Type name
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    public function down()
    {
        Schema::dropIfExists('types');
    }
}
