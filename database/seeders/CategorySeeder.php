<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Tiểu thuyết'],
            ['name' => 'Văn học'],
            ['name' => 'Khoa học'],
            ['name' => 'Kinh tế'],
            ['name' => 'Kỹ năng sống'],
            ['name' => 'Manga - Comic']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

