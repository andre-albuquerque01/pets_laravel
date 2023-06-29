<?php

namespace Database\Seeders;

use App\Models\Itens;
use Database\Factories\ItensFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Itens::factory(100)->create();
    }
}
