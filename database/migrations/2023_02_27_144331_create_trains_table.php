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
            $table->string('Stazione di partenza', 150);
            $table->string('Stazione di arrivo', 150);
            $table->date('Orario di partenza');
            $table->date('Orario di arrivo');
            $table->string('Codice treno', 20);
            $table->tinyInteger('Numero carrozze')->unsigned();
            $table->boolean('In orario')->unsigned();
            $table->boolean('Cancellato')->unsigned();
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
