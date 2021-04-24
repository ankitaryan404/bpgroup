<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlotsTable extends Migration
{
    /**
     * Run the migrations. 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plots', function (Blueprint $table) {
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
            $table->integer('no_of_open_sides');
            $table->string('width_fac_road');
            $table->boolean('construction_done');
            $table->boolean('boundary_made');
            $table->boolean('gated_colony');
            $table->integer('no_of_room');
            $table->string('plot_area');
            $table->string('plot_length');
            $table->string('plot_breadth');
            $table->boolean('state_handover');
            $table->string('rent_p_month');
            $table->string('cam');
            $table->boolean('car_parking');
            $table->string('sec_deposit');
            $table->string('escalation');
            $table->string('locking');
            $table->string('cc');
            $table->string('fire_noc');
            $table->string('floor_height');
            $table->integer('no_lift');
            $table->integer('no_toilet');
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
        Schema::dropIfExists('plots');
    }
}
