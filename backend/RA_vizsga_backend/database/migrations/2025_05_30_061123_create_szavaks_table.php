<?php

use App\Models\szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol')->default('beautiful');
            $table->string('magyar')->default('szép');
            $table->integer('temaId')->default(1);
            $table->timestamps();
        });

        /*  szavak::create([
            'id'=>1,
            'angol'=>'beautiful',
            'magyar'=>'szép',
            'temaId'=>1,
        ]);

        szavak::create([
            'id'=>1,
            'angol'=>'smart',
            'magyar'=>'okos',
            'temaId'=>1,
        ]);

        szavak::create([
            'id'=>2,
            'angol'=>'red',
            'magyar'=>'piros',
            'temaId'=>2,
        ]);

        szavak::create([
            'id'=>2,
            'angol'=>'blue',
            'magyar'=>'kék',
            'temaId'=>2,
        ]);   */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
