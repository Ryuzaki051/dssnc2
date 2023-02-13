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
        Schema::create('operations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('cevem_id');
            $table->foreign('cevem_id')->references('id')->on('cevems');

            $table->unsignedBigInteger('fingerslinks_id');
            $table->foreign('fingerslinks_id')->references('id')->on('fingerslinks');

            $table->unsignedBigInteger('xdlinks_id');
            $table->foreign('xdlinks_id')->references('id')->on('xdlinks');

            $table->unsignedBigInteger('wellawlinks_id');
            $table->foreign('wellawlinks_id')->references('id')->on('wellawlinks');

            $table->unsignedBigInteger('kvmlinks_id');
            $table->foreign('kvmlinks_id')->references('id')->on('kvmlinks');

            $table->unsignedBigInteger('xclaritylinks_id');
            $table->foreign('xclaritylinks_id')->references('id')->on('xclaritylinks');

            $table->unsignedBigInteger('atxlinks_id');
            $table->foreign('atxlinks_id')->references('id')->on('atxlinks');

            $table->unsignedBigInteger('dmplinks_id');
            $table->foreign('dmplinks_id')->references('id')->on('dmplinks');

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
        Schema::dropIfExists('operations');
    }
};
