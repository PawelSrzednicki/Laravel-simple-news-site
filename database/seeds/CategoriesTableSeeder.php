<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
            'name' => 'Design & Illustration '
        ]);

        Categorie::insert([
            'name' => 'Code'
        ]);

         Categorie::insert([
            'name' => 'Web Design'
        ]);

      Categorie::insert([
            'name' => 'Photo & Video'
        ]);

          Categorie::insert([
            'name' => 'Buisness'
        ]);

        Categorie::insert([
            'name' => 'Technology'
        ]);
        
          Categorie::insert([
            'name' => 'Music & Audio'
        ]);

        Categorie::insert([
            'name' => '3d & Motion Graphics'
        ]);
    }
}
