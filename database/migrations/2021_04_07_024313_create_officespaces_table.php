<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficespacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officespaces', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('building_name');
            $table->string('builder_name');
            $table->string('banner_pic');
            $table->string('owner_name');
            $table->bigInteger('contact_number');
            $table->text('address');
            $table->text('slug');
            $table->integer('total_floor');
            $table->integer('no_of_room');
            $table->integer('floor_offer');
            $table->string('sup_b_area');
            $table->string('ideal_for_business');
            $table->string('carpet_area');
            $table->string('time_ava');
            $table->boolean('state_handover');
            $table->string('rent_p_month');
            $table->string('cam');
            $table->boolean('car_parking');
            $table->string('power_back');
            $table->string('sec_deposit');
            $table->string('pow_by_lessee');
            $table->string('escalation');
            $table->string('locking');
            $table->string('cc');
            $table->string('fire_noc');
            $table->string('floor_height');
            $table->integer('no_lift');
            $table->boolean('pantry');
            $table->string('no_toilet');
            $table->boolean('personal_washroom');
            $table->string('floor_plan');
            $table->boolean('status');
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
        Schema::dropIfExists('officespaces');
    }
}
