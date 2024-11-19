<?php

use App\Models\Sentence;
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
        Schema::create('sentences', function (Blueprint $table) {
            $table->id();
            $table->text('sentence');
            $table->timestamps();
        });

        Sentence::create([
            'sentence' => 'Aktív és passzív/szenvedő szerkezet egyszerű jelenben és múltban (write/wrote, is written/was written)'
        ]);

        Sentence::create([
            'sentence' => 'A passzív/szenvedő szerkezetet akkor használjuk az angolban, ha az ige tárgyát szeretnénk a mondat elejére tenni, azt akarjuk hangsúlyozni. A cselekvő/az alany ilyenkor nem fontos, vagy nem ismert. Mindig a létigét kell a megfelelő igeidőbe tenni. Beszélnek itt angolul. = English is spoken here. Tavaly építették ezt a hidat. = This bridge was built last year. Ha mégis szeretnénk megnevezni a cselekvőt, a by szócska után tehetjük ki a mondat végére. Romeo and Juliet was written by Shakespeare.'
        ]);

        Sentence::create([
            'sentence' => 'A passzív/szenvedő szerkezetet akkor használjuk az angolban, ha az ige tárgyát szeretnénk a mondat elejére tenni, azt akarjuk hangsúlyozni. A cselekvő/az alany ilyenkor nem fontos, vagy nem ismert. Mindig a létigét kell a megfelelő igeidőbe tenni. Beszélnek itt angolul. = English is spoken here. Tavaly építették ezt a hidat. = This bridge was built last year. Ha mégis szeretnénk megnevezni a cselekvőt, a by szócska után tehetjük ki a mondat végére. Romeo and Juliet was written by Shakespeare.'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sentences');
    }
};
