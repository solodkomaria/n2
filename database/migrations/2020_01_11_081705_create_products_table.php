<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('description',1000)->default('');
            $table->string('img_url',1000)->default('');
            $table->double('price')->default(0);
            $table->double('current_count')->default(0);
            $table->double('summary_count')->default(0);
            $table->timestamps();
            $table->unsignedInteger('category_id')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
