<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('representative');
            $table->string('email');
            $table->string('address');
            $table->string('website');
            $table->string('phone');
            $table->string('fax');
            $table->string('cell_phone');
            $table->string('rfc');
            $table->string('fiscal_address');
            $table->string('social_reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
