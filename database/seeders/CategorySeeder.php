<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            "ficção",
            "não-ficção",
            "Fantasia",
            "Ciência",
            "Biografia",
            "Historia",
            "Tecnologia",
            "Arte",
            "Culinária",
            "Viagem"
        ];

        foreach ($categories as $category){
            Category::create(['name' => $category]);
        }
    }
}
