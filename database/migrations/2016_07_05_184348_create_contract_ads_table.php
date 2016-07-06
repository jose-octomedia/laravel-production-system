<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_ads', function(Blueprint $table){
            $table->increments('id');
            $table->integer('contract_id')->unsigned()->index();
            $table->integer('publication_id')->unsigned()->index();
            $table->integer('publication_size_id')->unsigned()->index();
            $table->integer('publication_position_id')->unsigned()->index();
            $table->integer('publication_section_id')->unsigned()->index();
            $table->integer('ad_design_type_id')->unsigned()->index();
            $table->string('description');
            $table->string('special_position');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contract_ads');
    }
}
