<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();
        
        $user = User::factory()->create();
        Post::factory(30)->create([
            'user_id'=>$user->id
        ]);

        //  $user = User::factory()->create();
        //  $personal = Category::create(['name'=>'Personal', 'slug'=>'personal']);
        //  $family = Category::create(['name'=>'Family', 'slug'=>'family']);
        //  $work = Category::create(['name'=>'Work', 'slug'=>'work']);

        //  Post::create(['user_id'=> $user->id, 'category_id'=> $family->id,'title'=>'My Family Post', 'slug'=>'my-first-post','excerpt'=>'<p>METAAA DATAAAAA!!</p>', 'body'=>'<p>BODYYYYY</p>']);
        //  Post::create(['user_id'=> $user->id, 'category_id'=> $personal->id,'title'=>'My Personal Post', 'slug'=>'my-second-post','excerpt'=>'<p>METAAA DATAAAAA!!</p>', 'body'=>'<p>BODYYYYY</p>']);
        //  Post::create(['user_id'=> $user->id, 'category_id'=> $work->id,'title'=>'My Work Post', 'slug'=>'my-third-post','excerpt'=>'<p>METAAA DATAAAAA!!</p>', 'body'=>'<p>BODYYYYY</p>']);
    }
}
