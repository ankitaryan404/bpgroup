<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retails', function (Blueprint $table) {
            $table->id();
            $table->string('building_name');
            $table->string('builder_name');
            $table->string('owner_name');
            $table->bigInteger('contact_number');
            $table->text('address');
            $table->text('slug');
            $table->integer('total_floor');
            $table->integer('floor_offer');
            $table->string('sup_b_area');
            $table->string('carpet_area');
            $table->string('time_ava');
            $table->string('state_handover');
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
            $table->integer('no_Pantry');
            $table->integer('lb');
            $table->integer('Basement');
            $table->string('Ground');
            $table->string('no_toilet');
            $table->string('floor_plan');
            $table->string('tenants');
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
        Schema::dropIfExists('commercials');
    }
}
