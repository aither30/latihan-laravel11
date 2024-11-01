<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category' => 'Web Developer',
            'color' => 'red'
        ]);

        Category::create([
            'category' => 'UI UX',
            'color' => 'green'
        ]);        
        
        Category::create([
            'category' => 'Web Design',
            'color' => 'yellow'
        ]);        
        
        Category::create([
            'category' => 'Machine Learning',
            'color' => 'blue'
        ]);        
        
        Category::create([
            'category' => 'Data Structure',
            'color' => 'purple'
        ]);
    }
}
