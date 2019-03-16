<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->text('link_video');
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
        Schema::dropIfExists('video');

        Schema::table('video', function(Blueprint $table) {
            $table->dropForeign('video_user_id_foreign');
        });

        Schema::table('video', function(Bluepsrint $table) {
            $table->dropIndex('video_user_id_foreign');
        });

        Schema::table('video', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
