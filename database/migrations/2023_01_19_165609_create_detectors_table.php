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
        Schema::create('detectors', function (Blueprint $table) {
            $table->id();
            $table->string('ip_detector');
            $table->double('mam_prcnt');
            $table->double('storage_prcnt');
            $table->double('opt_prcnt');

            $table->integer('ram');
            $table->integer('cpu');
            $table->integer('cant_hilos');
            $table->integer('peticiones');

            $table->unsignedBigInteger('cevem_id');
            $table->foreign('cevem_id')->references('id')->on('cevems');
            
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
        Schema::dropIfExists('detectors');
    }
};
