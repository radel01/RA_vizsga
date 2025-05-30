<?php

use App\Models\tema;
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
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('temanev')->default("tulajdonság");
            $table->timestamps();
        });

        tema::create([
            'id'=>1,
            'temanev'=>'tulajdonság'
        ]);

        tema::create([
            'id'=>2,
            'temanev'=>'szín'
        ]); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};
