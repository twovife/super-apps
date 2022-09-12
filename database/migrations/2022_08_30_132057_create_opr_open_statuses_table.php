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
        Schema::create('opr_open_statuses', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('hub', 255)->nullable();
            $table->integer('ttl_runsheet')->nullable();
            $table->integer('open_pod')->nullable();
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
        Schema::dropIfExists('opr_open_statuses');
    }
};
