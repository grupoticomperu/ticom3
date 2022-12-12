<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

return new class extends Migration
{


    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');

            $table->enum('tipo', [Product::PRODUCTO, Product::SERVICIO])->default(Product::PRODUCTO);
            $table->enum('typecurrency', [Product::SOLES, Product::DOLARES, Product::EUROS])->default(Product::SOLES);
            $table->double('price')->nullable();
            $table->double('priceoffer')->nullable();
            $table->enum('newused', [Product::NUEVO, Product::USADO])->default(Product::NUEVO);

            $table->text('datasheet')->nullable();//ficha tecnica
            $table->double('stock')->nullable();
            $table->integer('views')->nullable();
            $table->integer('stars')->nullable();
            $table->text('shortdescription')->nullable();
            $table->text('longdescription')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('state')->default(false);

            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();

            $table->date('registrationdate')->nullable();
            $table->date('enddate')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('item_id')->nullable();
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');


            $table->timestamps();

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
};
