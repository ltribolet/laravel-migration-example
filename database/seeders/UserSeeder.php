<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use Database\Factories\ItemFactory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->times(10)
            ->has(Item::factory()->count(50), 'items')
            ->create();
    }
}
