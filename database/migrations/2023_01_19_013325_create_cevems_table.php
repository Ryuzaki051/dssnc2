<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Cevem;

class CreateCevemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cevems', function (Blueprint $table) {
            $table->id();
            $table->string('cevem');
            $table->string('ip',16);
            
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states');

            $table->enum('status',[Cevem::ACTIVO,Cevem::APAGADO])->default(Cevem::ACTIVO);

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
        Schema::dropIfExists('cevems');
    }
}
