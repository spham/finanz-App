<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $freePlan = Plan::firstOrCreate(
            ['duration' => Plan::FREE_ACCESS],
            [
                'name' => 'Gratuit',
                'price' => 0,
                'maxCards' => 1,
                'maxPocket' => 1,
                'maxTransaction' => 10,
            ],
        );

        User::factory()->create([
            'firstName' => 'Admin',
            'lastName' => 'Root',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        $customer = User::factory()->create([
            'firstName' => 'Test',
            'lastName' => 'User',
            'email' => 'test@example.com',
            'role' => 'customer',
        ]);

        Subscription::create([
            'userId' => $customer->id,
            'planId' => $freePlan->id,
            'period' => Plan::YEARLY_DURATION,
            'startDate' => now(),
            'endDate' => now()->addYear(),
            'amount' => 0,
            'paymentStatus' => Subscription::PAYMENT_STATUS_NO_PAYMENT_REQUIRED,
            'status' => Subscription::STATUS_ACTIVE,
        ]);
    }
}
