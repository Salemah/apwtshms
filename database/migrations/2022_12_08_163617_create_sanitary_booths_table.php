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
        Schema::create('sanitary_booths', function (Blueprint $table) {
            $table->id();
            $table->string('booth_location')->nullable();
            $table->string('booth_padstock')->nullable();
            $table->string('order_padforbooth')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('sanitary_booths');
    }
};
