<?php

use App\Models\Admin\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "Daily",
            "Sport",
            "Food",
            "Tech",
            "History",
            "Travel",
        ];

        foreach($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = $newCategory->name;
            $newCategory->save();

        }
    }
}
