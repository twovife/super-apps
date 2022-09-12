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
        Schema::create('opr_arrival_breaches', function (Blueprint $table) {
            $table->id();
            $table->integer('opr_breach_id')->nullable();
            $table->date('date')->nullable();
            $table->date('date_inbound')->nullable();
            $table->integer('opr_customer_account_id')->nullable();
            $table->string('hub', 255)->nullable();
            $table->string('no_awb', 255)->nullable();
            $table->string('origin', 255)->nullable();
            $table->string('goods_desc', 1000)->nullable();
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
        Schema::dropIfExists('opr_arrival_breaches');
    }
};
