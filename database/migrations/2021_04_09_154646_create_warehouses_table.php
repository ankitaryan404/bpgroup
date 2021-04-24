<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('building_name');
            $table->string('builder_name');
            $table->string('banner_pic');
            $table->string('owner_name');
            $table->bigInteger('contact_number');
            $table->text('address');
            $table->text('slug');
            $table->string('structure');
            $table->string('total_area');
            $table->string('floor_offered');
            $table->string('rent_p_sq_ft');
            $table->string('sec_deposit');
            $table->string('side_height');
            $table->string('docks');
            $table->string('dock_level');
            $table->string('flooring');
            $table->string('roof');
            $table->boolean('washroom');
            $table->boolean('electricity_availability');
            $table->boolean('water_supply_availability');
            $table->boolean('security_gate_office');
            $table->string('notice_period');
            $table->string('escalation');
            $table->string('possession');
            $table->string('vehicle_parking');
            $table->string('locking');
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
        Schema::dropIfExists('warehouses');
    }
}
