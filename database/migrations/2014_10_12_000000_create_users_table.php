<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('slug');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('location_id');
            $table->integer('workers');
            $table->boolean('status')->default(1);
            $table->boolean('agree');
            $table->string('fname');
            $table->string('lname');
            $table->boolean('gender');
            $table->string('designation');
            $table->string('cp_email')->nullable()->unique();
            $table->string('password');
            $table->string('avatar');
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
        Schema::dropIfExists('users');
    }
}
