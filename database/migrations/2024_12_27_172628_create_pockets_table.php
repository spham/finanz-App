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
        Schema::create('pockets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('balanceGoal', 12, 2);
            $table->date('dueDate')->nullable();
            $table->decimal('balance', 12, 2)->default(0);
            $table->float('progression')->default(0);
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            // Things to add
            $table->boolean('isBlocked')->default(false);
            //end
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pockets');
    }
};
