<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CategorySeeder::class,
            SubcategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
