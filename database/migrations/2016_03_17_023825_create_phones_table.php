<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 50);
            $table->string('country', 10);
            $table->integer('ddd');
            $table->integer('prefix');
            $table->integer('suffix');
            $table->timestamps();

            $table->unsignedInteger('person_id');
            $table
                ->foreign('person_id')
                ->references('id')
                ->on('people')
                ->onDelete('cascade')
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('phones');
    }
}
