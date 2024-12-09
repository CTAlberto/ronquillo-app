<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Product name
            $table->foreignId('type_id')->constrained('types'); // Foreign key to Types
            $table->foreignId('location_id')->constrained('location'); // Foreign key to Location
            $table->integer('quantity'); // Quantity
            $table->foreignId('quantity_type_id')->nullable()->constrained('quantity_type'); // Nullable foreign key to QuantityType
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
