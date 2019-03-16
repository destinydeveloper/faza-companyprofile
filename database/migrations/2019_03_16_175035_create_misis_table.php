<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->string('title', 5);
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
        Schema::dropIfExists('misi');

        Schema::table('misi', function(Blueprint $table) {
            $table->dropForeign('misi_user_id_foreign');
        });

        Schema::table('misi', function(Bluepsrint $table) {
            $table->dropIndex('misi_user_id_foreign');
        });

        Schema::table('misi', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
