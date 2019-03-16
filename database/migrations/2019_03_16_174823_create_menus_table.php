<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->string('title', 20);
            $table->string('sub_title', 100);
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
        Schema::dropIfExists('menu');

        Schema::table('menu', function(Blueprint $table) {
            $table->dropForeign('menu_users_id_foreign');
        });

        Schema::table('menu', function(Bluepsrint $table) {
            $table->dropIndex('menu_users_id_foreign');
        });

        Schema::table('menu', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
