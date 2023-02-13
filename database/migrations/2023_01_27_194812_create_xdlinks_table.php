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
        Schema::create('xdlinks', function (Blueprint $table) {
            $table->id();
            $table->string('ip_xd',20);
            $table->string('AS',20);
            $table->string('EM',20);
            $table->string('ip_libreria',20);


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
        Schema::dropIfExists('xdlinks');
    }
};
