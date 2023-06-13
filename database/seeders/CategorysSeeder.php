<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categorys;

class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Os elementos que serão inseridos no BD
        Categorys::create([
            'id_category' => 8,
            'description' => 'Imóveis'
        ]);
    }
}
