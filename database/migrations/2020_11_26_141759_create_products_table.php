<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->text('content');
            $table->double('price_old');
            $table->double('price_new');
            $table->integer('quantity');
            $table->string('avatar');
            $table->integer('views')->default(0);
            $table->integer('buyed')->default(0);
            $table->double('rating')->default(0);
            $table->tinyInteger('hot')->default(0);
            $table->tinyInteger('status');
            $table->integer('category_id');
            $table->integer('unit_id');
            $table->mediumText('tags')->nullable();
            $table->tinyInteger('send_mail')->default(0);
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
}
