<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about-us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->text('description');
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
        Schema::dropIfExists('about-us');

        Schema::table('about-us', function(Blueprint $table) {
            $table->dropForeign('about-us_user_id_foreign');
        });

        Schema::table('about-us', function(Bluepsrint $table) {
            $table->dropIndex('about-us_user_id_foreign');
        });

        Schema::table('about-us', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
