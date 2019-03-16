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
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->text('photo');
            $table->string('path', 100);
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')
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
        Schema::dropIfExists('product');


        Schema::table('product', function(Blueprint $table) {
            $table->dropForeign('product_user_id_foreign');
        });

        Schema::table('product', function(Bluepsrint $table) {
            $table->dropIndex('product_user_id_foreign');
        });

        Schema::table('product', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
