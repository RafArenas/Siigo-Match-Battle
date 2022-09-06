<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards_has_users', function (Blueprint $table) {
            $table->unsignedBigInteger('cards_id');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();
            //Llaves foráneas
            $table->foreign('cards_id')->references('id')->on('cards')->onDelete('casscade')->onUpdate('cacade');;
            $table->foreign('users_id')->references('id')->on('users')->onDelete('casscade')->onUpdate('cacade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards_has_users');
    }
};
