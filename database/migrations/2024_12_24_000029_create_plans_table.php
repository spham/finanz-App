<?php

use App\Models\Plan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', '255')->unique();
            $table->decimal('price', 4, 2)->default(0.00);
            $table->string('duration')->default(Plan::FREE_ACCESS);

            // Ajouter la possibilite d'avoir ilimite dans dans le cas d'abnmt
            $table->integer('maxCards');
            $table->integer('maxPocket');
            $table->integer('maxTransaction');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
