<?php

use App\Models\Pet;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPetsTable extends Migration
{
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id('id');
            $table->string('type', 3);
            $table->string('name', 32);
            $table->string('color', 32);
        });

        Pet::query()->insert(['name' => 'Koda', 'color' => 'black', 'type' => 'dog']);
        Pet::query()->insert(['name' => 'Kirby', 'color' => 'white & black', 'type' => 'dog']);
        Pet::query()->insert(['name' => 'Muddy', 'color' => 'black', 'type' => 'dog']);
    }

    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
}
