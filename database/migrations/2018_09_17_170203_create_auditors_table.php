<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('fname');
            $table->string('lname');
            $table->boolean('gender');
            $table->string('designation');
            $table->string('phone');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('cp_email')->nullable();
            $table->string('password');
            $table->boolean('agree');
            $table->string('slug');
            $table->string('avatar');
            $table->boolean('status')->default(1);
            $table->integer('exchange_rate')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('auditors');
    }
}
