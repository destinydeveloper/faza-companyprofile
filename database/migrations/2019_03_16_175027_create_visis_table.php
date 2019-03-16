<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->string('title', 5);
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
        Schema::dropIfExists('visi');

        Schema::table('visi', function(Blueprint $table) {
            $table->dropForeign('visi_user_id_foreign');
        });

        Schema::table('visi', function(Bluepsrint $table) {
            $table->dropIndex('visi_user_id_foreign');
        });

        Schema::table('visi', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
