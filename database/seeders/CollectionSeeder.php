<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::factory(10)->create();
        //Category::all()->each(function($category){
          // Collection::factory(rand(1,10))->create(['category_id'=>$category->id]);
        //});
    }
}