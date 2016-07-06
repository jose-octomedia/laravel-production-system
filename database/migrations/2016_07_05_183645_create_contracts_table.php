<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function(Blueprint $table){
            $table->increments('id');
            $table->integer('client_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('contract_type_id')->unsigned()->index();
            $table->decimal('price_total', 11, 2);
            $table->decimal('other', 11, 2);
            $table->decimal('price_sub_total', 11, 2);
            $table->decimal('price_iva', 11, 2);
            $table->decimal('contract_total', 11, 2);
            $table->boolean('status_paid');
            $table->boolean('status_signed');
            $table->boolean('status_published');
            $table->boolean('status_fiscal_data');
            $table->boolean('status_contact_info');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contracts');
    }
}
