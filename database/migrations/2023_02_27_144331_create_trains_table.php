<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 50);
            $table->string('Stazione_di_partenza', 150);
            $table->string('Stazione_di_arrivo', 150);
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->string('Codice_treno', 20);
            $table->tinyInteger('Numero_carrozze')->unsigned();
            $table->boolean('In_orario')->unsigned();
            $table->boolean('Cancellato')->unsigned();
            $table->timestamp('expire_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
