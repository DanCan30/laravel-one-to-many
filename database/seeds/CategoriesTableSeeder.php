<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Category;

class CategoriesTableSeeder extends Seeder
{
   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "Other",
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


// <?php

// use Illuminate\Database\Seeder;

// class CategoriesTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         $categories = [
//             "Other",
//             "Daily",
//             "Sport",
//             "Food",
//             "Tech",
//             "History",
//             "Travel",
//         ];

//         foreach($categories as $category) {
//             $newCategory = new Category();
//             $newCategory->name = $category;
//             $newCategory->slug = $newCategory->name;
//             $newCategory->save();

//         }
//     }
// }
