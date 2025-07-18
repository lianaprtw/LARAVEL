<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    public function run(): void
    {
        Subcategory::create([
            'id' => 1,
            'name' => 'kalung',
            'slug' => 'kalung',
            'category_id' => 1,
        ]);
    }
}
