<?php

use App\Models\Task;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('hungarian')->nullable();
            $table->string('sentence');
            $table->string('basis');
            $table->string('option_one')->nullable();
            $table->string('option_two')->nullable();
            $table->string('option_three')->nullable();
            $table->string('option_four')->nullable();
            $table->timestamps();
        });

        Task::create([
            'hungarian' => 'A fiú ellopta az almát ma reggel.',
            'sentence' => 'The boy _ an apple this morning.',
            'basis' => 'steal',
            'option_one' => 'stole',
            'option_two' => 'is stolen',
            'option_three' => 'was stolen',
            'option_four' => 'steal',
        ]);

        Task::create([
            'hungarian' => 'Senkit nem engedtek be tegnap este.',
            'sentence' => 'They _ anybody in last night.',
            'basis' => ' not let',
            'option_one' => 'didnt let',
            'option_two' => 'don t let ',
            'option_three' => 'was not let ',
            'option_four' => null,
        ]);

        Task::create([
            'hungarian' => 'A történetet egy kis lány írta 2011-ben.',
            'sentence' => 'The story _ by a little girl in 2011.',
            'basis' => 'write ',
            'option_one' => 'was written',
            'option_two' => 'is written',
            'option_three' => 'wrote',
            'option_four' => 'write',
        ]);

        Task::create([
            'hungarian' => 'Angolul a világon mindenhol beszélnek.',
            'sentence' => 'English _ all around the globe.',
            'basis' => 'speak',
            'option_one' => 'is spoken',
            'option_two' => 'was spoken',
            'option_three' => 'spoked',
            'option_four' => 'speak',
        ]);

        Task::create([
            'hungarian' => 'A biciklimet a rendőrség elől lopták el tegnap reggel.',
            'sentence' => 'My bike _ from the yard yesterday.',
            'basis' => 'steal',
            'option_one' => 'was stolen',
            'option_two' => 'is stolen',
            'option_three' => 'stole',
            'option_four' => 'steal',
        ]);

    Task::create([
        'hungarian' => 'A gyerekek szeretnek focizni.',
        'sentence' => 'Kids _ playing football.',
        'basis' => 'love',
        'option_one' => 'love',
        'option_two' => 'is loved',
        'option_three' => 'was loved',
        'option_four' => 'loved',
    ]);

    Task::create([
        'hungarian' => 'Nem terveztük a tavalyi olaszországi utazást.',
        'sentence' => 'It _ to go to Italy last year.',
        'basis' => 'not plan',
        'option_one' => 'wasn t planned',
        'option_two' => 'isn t planned',
        'option_three' => ' planned',
        'option_four' => null,
    ]);

    Task::create([
        'hungarian' => 'Japánban készült az autód egy évvel ezelőtt?',
        'sentence' => '_ your car _ in Japan a year ago?',
        'basis' => 'make',
        'option_one' => 'made',
        'option_two' => 'was made',
        'option_three' => 'is made',
        'option_four' => 'made',
    ]);

    Task::create([
        'hungarian' => 'Minden évben ültetek virágokat.',
        'sentence' => 'I _ flowers every year.',
        'basis' => 'plant',
        'option_one' => 'plant',
        'option_two' => 'was planted',
        'option_three' => 'is planted',
        'option_four' => 'planted',
    ]);

    Task::create([
        'hungarian' => 'Minden évben ültetek virágokat.',
        'sentence' => 'I _ flowers every year.',
        'basis' => 'plant',
        'option_one' => 'plant',
        'option_two' => 'was planted',
        'option_three' => 'is planted',
        'option_four' => 'planted',
    ]);

    Task::create([
        'hungarian' => null,
        'sentence' => 'The flowers _ by the gardener every morning.',
        'basis' => 'water',
        'option_one' => 'are watered',
        'option_two' => 'is watered',
        'option_three' => 'waters',
        'option_four' => 'watered',
    ]);

    Task::create([
        'hungarian' => null,
        'sentence' => 'The carpet _ from the living room last night.',
        'basis' => 'remove',
        'option_one' => 'was removed',
        'option_two' => 'is removed',
        'option_three' => 'removed',
        'option_four' => 'removs',
    ]);

    Task::create([
        'hungarian' => null,
        'sentence' => 'My 18-year-old daughter _ a scholarship last year.',
        'basis' => 'offer',
        'option_one' => 'was offered',
        'option_two' => 'is offered',
        'option_three' => 'offeres',
        'option_four' => 'offered',
    ]);
       
        
       
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
