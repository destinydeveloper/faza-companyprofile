<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->string('title', 20);
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
        Schema::dropIfExists('notice');

        Schema::table('notice', function(Blueprint $table) {
            $table->dropForeign('notice_user_id_foreign');
        });

        Schema::table('notice', function(Bluepsrint $table) {
            $table->dropIndex('notice_user_id_foreign');
        });

        Schema::table('notice', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
