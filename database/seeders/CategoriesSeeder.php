<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catrgories = ['Technology','Software','Lifestyle','Shopping' ,'Newos'];

        foreach( $catrgories as  $catrgory){
            Category::create([
                'name'=>  $catrgory
            ]);
        }
    }
}