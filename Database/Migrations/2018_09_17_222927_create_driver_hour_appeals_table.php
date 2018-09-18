<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverHourAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_hour_appeals', function (Blueprint $table) {
            $table->increments('id');
            $table->string("load_num"); //e.g. "Memo 995"
            $table->string("city"); //e.g. "St george"
            $table->string("state"); //e.g. "Ut"
            $table->string("first_name"); //e.g. "David"
            $table->string("last_name"); //e.g. "Todd"
            $table->string("fuel_pin"); //e.g. "Duke1313"
            $table->string("truck_num"); //e.g. "18"
            $table->string("trailer_1"); //e.g. "36"
            $table->string("trailer_2"); //e.g. "38"
            $table->timestamp("arrival_date")->nullable(); //e.g. "7/16/2018"
            $table->timestamp("arrival_time")->nullable(); //e.g. ""
            $table->timestamp("arrival_day")->nullable(); //e.g. ""
            $table->timestamp("depart_at")->nullable(); //e.g. ""
            $table->bigInteger("hours_remain"); //e.g. "5"
            $table->bigInteger("hours_over"); //e.g. "4"
            $table->text("reason"); //e.g. "Loading - Onloading pump is slow (pumped longer than 45 min)"
            $table->text("details"); //e.g. "Some body disconnected everything nothing worked"
            $table->text("recommend"); //e.g. ""
            $table->string("agreed")->nullable(); //e.g.understand"
            $table->string("published_by"); //e.g. ""
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
        Schema::dropIfExists('driver_hour_appeals');
    }
}
