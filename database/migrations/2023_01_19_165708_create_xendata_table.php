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
        Schema::create('xendata', function (Blueprint $table) {
            $table->id();

            $table->string('OS')->nullable();
            $table->string('Manufacturer',50)->nullable();
            $table->string('Hostname',50)->nullable();
            $table->string('ultimo_Archivo')->nullable();
            $table->string('Model')->nullable();
            $table->integer('BlankC',2)->nullable();
            $table->string('Cinta')->nullable();
            $table->string('versionSC')->nullable();
            $table->string('X_Libre')->nullable();
            $table->integer('CintasFC')->nullable();
            $table->string('C_Libre')->nullable();
            $table->date('Last_Reboot')->nullable();
            $table->date('fechaConsulta')->nullable();
            $table->string('tipo')->nullable();
            $table->string('C_LibreP')->nullable();
            $table->string('C_Total')->nullable();
            $table->string('Serial',20)->nullable();
            $table->string('CPU')->nullable();
            $table->string('X_LibreP')->nullable();
            $table->string('X_Total')->nullable();
            $table->string('RAM')->nullable();
                        
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
        Schema::dropIfExists('xendata');
    }
};






















