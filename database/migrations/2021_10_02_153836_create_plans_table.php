<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->integer('tier');
            $table->string('annual_premium');
            $table->string('overall_annual_limit');
            $table->string('room_and_board');
            $table->string('room_category');
            // $table->enum('room_category', ['unhandled', 'ignored', 'warned'])->default('unhandled');
            $table->string('hospital_days');
            $table->string('cnd');
            $table->string('accidental_death');
            $table->string('iee');
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
        Schema::dropIfExists('plans');
    }
}
