<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name:ar' => 'دعم تقني',
            'name:en' => 'Technical support',
        ]);
        Category::create([
            'name:ar' => 'استفسار',
            'name:en' => 'inquiry',
        ]);
        Category::create([
            'name:ar' => 'إبلاغ',
            'name:en' => 'Report',
        ]);
    }
}
