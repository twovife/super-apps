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
        Schema::create('hr_couriers', function (Blueprint $table) {
            $table->id();
            $table->integer('hc_employee_id')->nullable();
            $table->string('kurir')->nullable();
            $table->string('kendaraan')->nullable();
            $table->string('hub')->nullable();
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
        Schema::dropIfExists('hr_couriers');
    }
};
