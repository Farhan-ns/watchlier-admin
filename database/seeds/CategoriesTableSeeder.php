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
        Category::create([
           'name' => 'root',
           'description' => 'this is root category, don\'t delete this',
            'parent_id' => null,
            'menu' => 0,
        ]);

        factory('App\Models\Category', 10)->create();
    }
}
