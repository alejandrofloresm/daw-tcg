<?php

use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\Category;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate 75 different cards
        $categories = Category::all();
        $amountOfCardsToGenerate = 75;
        for ($i = 0; $i < 75; $i++) {
            // Get a random category
            // https://laravel.com/docs/5.7/collections#method-random
            $category = $categories->random();
            $name = $this->getCardName($category);
            Card::create(['name' => $name,
                'attack' => random_int(5, 50),
                'defense' => random_int(5, 50),
                'category_id' => $category->id]);
        }
    }

    public function getCardName(Category $category) {
        $name = '';
        $adjectives = [];
        $animals = ['Bison', 'Dolphin', 'Eagle', 'Ape', 'Spider', 'Toad', 'Fish', 'Lobster', 'Cow', 'Deer', 'Wolf'];
        if ($category->name == 'Fire') {
            $adjectives = ['Hot', 'Warm', 'Redhot', 'Dying', 'Explosive', 'Burning', 'Dangerous'];
        }
        if ($category->name == 'Earth') {
            $adjectives = ['Good', 'Cool', 'Medicinal', 'Rocky', 'Verdant', 'Soft', 'Gigantic'];
        }
        if ($category->name == 'Wind') {
            $adjectives = ['Strong', 'Stormy', 'Breezy', 'Wild', 'Fresh', 'Speedy', 'Light'];
        }
        if ($category->name == 'Water') {
            $adjectives = ['Clear', 'Deep', 'Pure', 'Blue', 'Rough', 'Ice', 'Acid'];
        }
        // Get random adjective
        $adjective = $adjectives[array_rand($adjectives)];
        // Get random animal
        $animal = $animals[array_rand($animals)];
        // Generate name = adjective + animal
        $name = "{$adjective} {$animal}";
        return $name;
    }
}

