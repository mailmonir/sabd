<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inv_id');
            $table->integer('user_id');
            $table->integer('audit_id');
            $table->integer('auditor_id');
            $table->integer('final_price');
            $table->integer('discount')->nullable();
            $table->integer('workers');
            $table->integer('cf')->nullable();
            $table->string('audit_type');
            $table->decimal('manday', 2, 1);
            $table->string('status')->default('Not Paid');
            $table->boolean('confirmed')->default(0);
            $table->date('completed_at')->nullable();
            $table->date('report_date')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
