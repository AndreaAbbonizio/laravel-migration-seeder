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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('azienda', 100);
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->string('orario_di_partenza', 5);
            $table->string('orario_di_arrivo', 5);
            $table->string('codice_treno', 4);
            $table->tinyInteger('numero_carrozze')->nullable();
            $table->boolean('in_orario');
            $table->boolean('cancellato');



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
        Schema::dropIfExists('trains');
    }
};
