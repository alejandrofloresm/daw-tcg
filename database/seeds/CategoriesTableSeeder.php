<?php

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Fire', 'hex_color' => '#e82100']);
        Category::create(['name' => 'Earth', 'hex_color' => '#a0522d']);
        Category::create(['name' => 'Wind', 'hex_color' => '#00cee8']);
        Category::create(['name' => 'Water', 'hex_color' => '#2119a8']);
    }
}
