<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('city');
            $table->string('country');
            $table->string('post_code');
            $table->string('logo');
            $table->string('contact_person');
            $table->string('phone');
            $table->string('email');
            $table->string('bank_name');
            $table->string('account_no');
            $table->string('beneficiary');
            $table->string('bank_address_line1');
            $table->string('bank_address_line2');
            $table->string('swift_code');
            $table->string('payment_method');
            $table->integer('conversion_rate')->nullable();
            $table->integer('discount')->nullable();
            $table->longText('notes');
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
        Schema::dropIfExists('infos');
    }
}
