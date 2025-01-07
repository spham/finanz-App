<?php

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
            $table->unsignedBigInteger('planId');
            $table->foreign('planId')->references('id')->on('plans');
            $table->string('period')->default(Plan::YEARLY_DURATION);
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->decimal('amount', 12, 2);
            $table->string('paymentStatus')->default(Subscription::PAYMENT_STATUS_NO_PAYMENT_REQUIRED);
            $table->string('status')->default(Subscription::STATUS_ACTIVE);
            $table->string('sessionId')->nullable();
            // Things to add 
            $table->integer('cardCount')->default(0);
            $table->integer('pockectCount')->default(0);
            $table->integer('transactionCount')->default(0);
            //end
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
