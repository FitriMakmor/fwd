<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('gender')->nullable();
            $table->boolean('is_citizen')->nullable();
            $table->date('birthdate')->nullable();
            $table->boolean('is_married')->nullable();
            $table->boolean('prefer_flexible')->nullable();
            $table->enum('income_range', ['Less than RM1,500', 'RM1,500 - RM3,000', 'RM3,000 - RM6,000', 'RM6,000 - RM 10,000', 'RM10,000 - RM15,000', 'More than RM15,000'])->nullable();
            $table->boolean('hasDisease1')->nullable();
            $table->boolean('hasDisease2')->nullable();
            $table->boolean('hasDisease3')->nullable();
            $table->boolean('hasDisease4')->nullable();
            $table->boolean('hasDisease5')->nullable();
            $table->enum('admittance_freq', ['None', 'Once or Twice', 'Three to Five Times', 'More than Five Times'])->nullable();
            $table->enum('travel_freq', ['None', 'Once or Twice', 'Three to Five Times', 'More than Five Times'])->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
