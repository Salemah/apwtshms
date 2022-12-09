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
        Schema::create('helps', function (Blueprint $table) {
            $table->id();
            $table->string('victim_name')->nullable();
            $table->string('victim_address')->nullable();
            $table->string('victim_phonenum')->nullable();
            $table->string('victim_age')->nullable();
            $table->string('victim_emergencycontact')->nullable();
            $table->string('status')->nullable();
            $table->string('victim_currentlocation')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('helps');
    }
};
