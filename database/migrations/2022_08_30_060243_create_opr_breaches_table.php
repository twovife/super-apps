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
        Schema::create('opr_breaches', function (Blueprint $table) {
            $table->id();
            $table->integer('opr_undel_id')->nullable();
            $table->date('date')->nullable();
            $table->string('status', 255)->nullable();
            $table->string('reason', 1000)->nullable();
            $table->string('img_name', 255)->nullable();
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
        Schema::dropIfExists('opr_breaches');
    }
};
