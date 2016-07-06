<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractAdEditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_ad_editions', function(Blueprint $table){
            $table->increments('id');
            $table->integer('contract_ad_id')->unsigned()->index();
            $table->integer('publication_edition_id')->unsigned()->index();
            $table->decimal('price', 11, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contract_ad_editions');
    }
}
