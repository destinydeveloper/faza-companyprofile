<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMisiContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misi_content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_misi');
            $table->text('description');
            $table->timestamps();

            $table->foreign('id_misi')->references('id')->on('misi')
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
        Schema::dropIfExists('misi_content');

        Schema::table('misi_content', function(Blueprint $table) {
            $table->dropForeign('misi_content_misi_id_foreign');
        });

        Schema::table('misi_content', function(Bluepsrint $table) {
            $table->dropIndex('misi_content_misi_id_foreign');
        });

        Schema::table('misi_content', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
