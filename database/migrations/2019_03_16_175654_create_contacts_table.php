<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact-us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->string('address', 100);
            $table->string('email')->unique();
            $table->string('telp', 15);
            $table->text('facebook_link');
            $table->text('twitter_link');
            $table->text('instagram_link');

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
        Schema::dropIfExists('contact-us');

        Schema::table('contact-us', function(Blueprint $table) {
            $table->dropForeign('contact-us_user_id_foreign');
        });

        Schema::table('contact-us', function(Bluepsrint $table) {
            $table->dropIndex('contact-us_user_id_foreign');
        });

        Schema::table('contact-us', function(Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
