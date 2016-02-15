<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductpicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productpictures', function(Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->string('caption');
            $table->string('filename_thumb');
            $table->string('filename_mid');
            $table->string('filename_big');
            $table->boolean('isdefault');
            $table->integer('order');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('productpictures');
	}

}
