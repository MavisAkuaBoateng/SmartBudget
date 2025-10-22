<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BudgetItem;

class BudgetItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BudgetItem::insert([
            [
                'name' => 'Groceries',
                'amount' => 150,
                'category' => 'Food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electricity Bill',
                'amount' => 75,
                'category' => 'Utilities',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Internet Subscription',
                'amount' => 50,
                'category' => 'Utilities',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Movie Night',
                'amount' => 30,
                'category' => 'Entertainment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
