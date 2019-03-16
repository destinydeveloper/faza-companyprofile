<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product-content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_product');
            $table->string('title', 30);
            $table->text('description');
            $table->timestamps();

            $table->foreign('id_product')->references('id')->on('product')
                  ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product-content');

        Schema::table('product-content', function(Blueprint $table) {
            $table->dropForeign('product-content_product_id_foreign');
        });

        Schema::table('product-content', function(Bluepsrint $table) {
            $table->dropIndex('product-product_id_foreign');
        });

        Schema::table('product-content', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
