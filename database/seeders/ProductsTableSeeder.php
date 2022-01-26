<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        // model factories
        /*\App\Models\Category::factory(5)->create();
        \App\Models\Product::factory(100)->create();
        \App\Models\ProductImage::factory(200)->create();*/

        $categories = \App\Models\Category::factory(4)->create();
        $categories->each(function ($category){
            $products = \App\Models\Product::factory(5)->make();
            $category->products()->saveMany($products);

            $products->each(function ($p){
                $images = \App\Models\ProductImage::factory(3)->make();
                $p->images()->saveMany($images);
            });
        });

        /*$users = factory(App\Models\User::class, 3)
        ->create()
        ->each(function ($u){
            $u->posts()->save(factory(App\Models\Post::class)->make());
        });*/
    }
}
