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
        Schema::create('opr_open_status_details', function (Blueprint $table) {
            $table->id();
            $table->integer('opr_open_status_id')->nullable();
            $table->string('awb', 255)->nullable();
            $table->string('runsheet', 255)->nullable();
            $table->string('user_kurir', 255)->nullable();
            $table->string('remark', 255)->nullable();
            $table->string('remark_status', 1000)->nullable();
            $table->string('follow_up', 1000)->nullable();
            $table->date('closed_date')->nullable();
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
        Schema::dropIfExists('opr_open_status_details');
    }
};
