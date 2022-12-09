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
        Schema::create('cyber_supports', function (Blueprint $table) {
            $table->id();
            $table->string('victim_name');
            $table->string('victim_address')->nullable();
            $table->string('victim_phonenum')->nullable();
            $table->string('victim_age')->nullable();
            $table->string('victim_screenshot')->nullable();
            $table->string('victim_description')->nullable();
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
        Schema::dropIfExists('cyber_supports');
    }
};
