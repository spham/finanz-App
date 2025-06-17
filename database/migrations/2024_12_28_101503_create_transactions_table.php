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
        // Schema::create('transactions', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('type');
        //     $table->string('description')->nullable();
        //     $table->decimal('amount', 12, 2);
        //     $table->unsignedBigInteger('source_id')->nullable();
        //     $table->unsignedBigInteger('destination_id')->nullable();
        //     $table->unsignedBigInteger('userId');
        //     $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        //     $table->timestamps();
        // });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // Type de la transaction (Revenu, Dépense, Transfert)
            $table->string('description')->nullable();
            $table->decimal('amount', 12, 2);
            $table->unsignedBigInteger('userId');

            // Colonnes polymorphiques
            $table->nullableMorphs('source'); // Crée `source_id` et `source_type`
            $table->nullableMorphs('destination'); // Crée `destination_id` et `destination_type`

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
