<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->string('title', 30);
            $table->string('description', 100);
            $table->text('photo');
            $table->text('background_photo');
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
        Schema::dropIfExists('home');

        Schema::table('home', function(Blueprint $table) {
            $table->dropForeign('home_user_id_foreign');
        });

        Schema::table('home', function(Bluepsrint $table) {
            $table->dropIndex('home_user_id_foreign');
        });

        Schema::table('home', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
