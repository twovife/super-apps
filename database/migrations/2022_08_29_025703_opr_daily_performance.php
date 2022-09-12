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
        Schema::create('opr_daily_performances', function (Blueprint $table) {
            $table->id();
            $table->date('inbound_date')->nullable();
            $table->string('zone', 255)->nullable();
            $table->string('hub', 255)->nullable();
            $table->integer('total_shipment_cod')->nullable();
            $table->integer('total_nominal_cod')->nullable();

            $table->date('date_0')->nullable();
            $table->integer('total_0')->nullable();
            $table->integer('unrunsheet_0')->nullable();
            $table->integer('delivered_0')->nullable();
            $table->integer('cr_0')->nullable();
            $table->integer('undel_0')->nullable();
            $table->integer('open_0')->nullable();
            $table->integer('return_0')->nullable();
            $table->integer('wh_0')->nullable();
            $table->integer('successreturn_0')->nullable();

            $table->date('date_1')->nullable();
            $table->integer('total_1')->nullable();
            $table->integer('unrunsheet_1')->nullable();
            $table->integer('delivered_1')->nullable();
            $table->integer('cr_1')->nullable();
            $table->integer('undel_1')->nullable();
            $table->integer('open_1')->nullable();
            $table->integer('return_1')->nullable();
            $table->integer('wh_1')->nullable();
            $table->integer('successreturn_1')->nullable();

            $table->date('date_2')->nullable();
            $table->integer('total_2')->nullable();
            $table->integer('unrunsheet_2')->nullable();
            $table->integer('delivered_2')->nullable();
            $table->integer('cr_2')->nullable();
            $table->integer('undel_2')->nullable();
            $table->integer('open_2')->nullable();
            $table->integer('return_2')->nullable();
            $table->integer('wh_2')->nullable();
            $table->integer('successreturn_2')->nullable();

            $table->date('date_3')->nullable();
            $table->integer('total_3')->nullable();
            $table->integer('unrunsheet_3')->nullable();
            $table->integer('delivered_3')->nullable();
            $table->integer('cr_3')->nullable();
            $table->integer('undel_3')->nullable();
            $table->integer('open_3')->nullable();
            $table->integer('return_3')->nullable();
            $table->integer('wh_3')->nullable();
            $table->integer('successreturn_3')->nullable();

            $table->date('date_4')->nullable();
            $table->integer('total_4')->nullable();
            $table->integer('unrunsheet_4')->nullable();
            $table->integer('delivered_4')->nullable();
            $table->integer('cr_4')->nullable();
            $table->integer('undel_4')->nullable();
            $table->integer('open_4')->nullable();
            $table->integer('return_4')->nullable();
            $table->integer('wh_4')->nullable();
            $table->integer('successreturn_4')->nullable();

            $table->date('date_5')->nullable();
            $table->integer('total_5')->nullable();
            $table->integer('unrunsheet_5')->nullable();
            $table->integer('delivered_5')->nullable();
            $table->integer('cr_5')->nullable();
            $table->integer('undel_5')->nullable();
            $table->integer('open_5')->nullable();
            $table->integer('return_5')->nullable();
            $table->integer('wh_5')->nullable();
            $table->integer('successreturn_5')->nullable();

            $table->date('date_6')->nullable();
            $table->integer('total_6')->nullable();
            $table->integer('unrunsheet_6')->nullable();
            $table->integer('delivered_6')->nullable();
            $table->integer('cr_6')->nullable();
            $table->integer('undel_6')->nullable();
            $table->integer('open_6')->nullable();
            $table->integer('return_6')->nullable();
            $table->integer('wh_6')->nullable();
            $table->integer('successreturn_6')->nullable();

            $table->date('date_7')->nullable();
            $table->integer('total_7')->nullable();
            $table->integer('unrunsheet_7')->nullable();
            $table->integer('delivered_7')->nullable();
            $table->integer('cr_7')->nullable();
            $table->integer('undel_7')->nullable();
            $table->integer('open_7')->nullable();
            $table->integer('return_7')->nullable();
            $table->integer('wh_7')->nullable();
            $table->integer('successreturn_7')->nullable();

            $table->date('date_8')->nullable();
            $table->integer('total_8')->nullable();
            $table->integer('unrunsheet_8')->nullable();
            $table->integer('delivered_8')->nullable();
            $table->integer('cr_8')->nullable();
            $table->integer('undel_8')->nullable();
            $table->integer('open_8')->nullable();
            $table->integer('return_8')->nullable();
            $table->integer('wh_8')->nullable();
            $table->integer('successreturn_8')->nullable();

            $table->integer('closed')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });

        Schema::create('opr_daily_express_performances', function (Blueprint $table) {
            $table->id();
            $table->date('inbound_date')->nullable();
            $table->string('zone', 255)->nullable();
            $table->string('hub', 255)->nullable();
            $table->integer('total_shipment_cod')->nullable();
            $table->integer('total_nominal_cod')->nullable();

            $table->date('date_0')->nullable();
            $table->integer('total_0')->nullable();
            $table->integer('unrunsheet_0')->nullable();
            $table->integer('delivered_0')->nullable();
            $table->integer('cr_0')->nullable();
            $table->integer('undel_0')->nullable();
            $table->integer('open_0')->nullable();
            $table->integer('return_0')->nullable();
            $table->integer('wh_0')->nullable();
            $table->integer('successreturn_0')->nullable();

            $table->date('date_1')->nullable();
            $table->integer('total_1')->nullable();
            $table->integer('unrunsheet_1')->nullable();
            $table->integer('delivered_1')->nullable();
            $table->integer('cr_1')->nullable();
            $table->integer('undel_1')->nullable();
            $table->integer('open_1')->nullable();
            $table->integer('return_1')->nullable();
            $table->integer('wh_1')->nullable();
            $table->integer('successreturn_1')->nullable();

            $table->date('date_2')->nullable();
            $table->integer('total_2')->nullable();
            $table->integer('unrunsheet_2')->nullable();
            $table->integer('delivered_2')->nullable();
            $table->integer('cr_2')->nullable();
            $table->integer('undel_2')->nullable();
            $table->integer('open_2')->nullable();
            $table->integer('return_2')->nullable();
            $table->integer('wh_2')->nullable();
            $table->integer('successreturn_2')->nullable();

            $table->integer('closed')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });

        Schema::create('opr_daily_city_performances', function (Blueprint $table) {
            $table->id();
            $table->date('inbound_date')->nullable();
            $table->string('zone', 255)->nullable();
            $table->string('hub', 255)->nullable();
            $table->integer('total_shipment_cod')->nullable();
            $table->integer('total_nominal_cod')->nullable();

            $table->date('date_0')->nullable();
            $table->integer('total_0')->nullable();
            $table->integer('unrunsheet_0')->nullable();
            $table->integer('delivered_0')->nullable();
            $table->integer('cr_0')->nullable();
            $table->integer('undel_0')->nullable();
            $table->integer('open_0')->nullable();
            $table->integer('return_0')->nullable();
            $table->integer('wh_0')->nullable();
            $table->integer('successreturn_0')->nullable();

            $table->date('date_1')->nullable();
            $table->integer('total_1')->nullable();
            $table->integer('unrunsheet_1')->nullable();
            $table->integer('delivered_1')->nullable();
            $table->integer('cr_1')->nullable();
            $table->integer('undel_1')->nullable();
            $table->integer('open_1')->nullable();
            $table->integer('return_1')->nullable();
            $table->integer('wh_1')->nullable();
            $table->integer('successreturn_1')->nullable();

            $table->date('date_2')->nullable();
            $table->integer('total_2')->nullable();
            $table->integer('unrunsheet_2')->nullable();
            $table->integer('delivered_2')->nullable();
            $table->integer('cr_2')->nullable();
            $table->integer('undel_2')->nullable();
            $table->integer('open_2')->nullable();
            $table->integer('return_2')->nullable();
            $table->integer('wh_2')->nullable();
            $table->integer('successreturn_2')->nullable();

            $table->integer('closed')->nullable();
            $table->integer('user_id')->nullable();
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
        //
    }
};
