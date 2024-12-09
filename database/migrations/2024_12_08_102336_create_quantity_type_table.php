<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuantityTypeTable extends Migration
{
    public function up()
    {
        Schema::create('quantity_type', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Quantity type name
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    public function down()
    {
        Schema::dropIfExists('quantity_type');
    }
}
