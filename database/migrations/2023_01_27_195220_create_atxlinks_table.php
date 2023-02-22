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
        Schema::create('atxlinks', function (Blueprint $table) {
            $table->id();
            $table->string('ip_atx',20);

            $table->unsignedBigInteger('cevem_id');
            $table->foreign('cevem_id')->references('id')->on('cevems');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atxlinks');
    }
};
