<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();
        $user= User::factory()->create();
        $personal=Category::create(
            [
                'name' => 'Personal',
                'slug' => 'personal',
            ]
        );
        $family=Category::create(
            [
                'name' => 'Family',
                'slug' => 'family',
            ]
        );
        $work=Category::create(
            [
                'name' => 'Work',
                'slug' => 'work',
            ]
        );

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title'=>'My Family Post',
            'slug'=>'my-family-post',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat sodales nisi, ac
            tempus ipsum egestas eu. Aenean velit arcu, dictum nec magna ac, malesuada euismod diam.',
            'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat sodales nisi, ac tempus
            ipsum egestas eu. Aenean velit arcu, dictum nec magna ac, malesuada euismod diam. Nulla sagittis dolor a
            nisl lacinia, id efficitur urna euismod. Nam posuere felis at libero aliquet, venenatis mattis nunc
            scelerisque. Proin at tortor sed ligula facilisis pretium. Mauris molestie eros in quam scelerisque
            laoreet in ac augue. Duis sed elit laoreet, maximus neque quis, sodales sapien. Sed venenatis, orci id
            interdum finibus, risus ex vulputate nulla, vel pretium magna lorem id quam.'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title'=>'My Work Post',
            'slug'=>'my-work-post',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat sodales nisi, ac
            tempus ipsum egestas eu. Aenean velit arcu, dictum nec magna ac, malesuada euismod diam.',
            'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat sodales nisi, ac tempus
            ipsum egestas eu. Aenean velit arcu, dictum nec magna ac, malesuada euismod diam. Nulla sagittis dolor a
            nisl lacinia, id efficitur urna euismod. Nam posuere felis at libero aliquet, venenatis mattis nunc
            scelerisque. Proin at tortor sed ligula facilisis pretium. Mauris molestie eros in quam scelerisque
            laoreet in ac augue. Duis sed elit laoreet, maximus neque quis, sodales sapien. Sed venenatis, orci id
            interdum finibus, risus ex vulputate nulla, vel pretium magna lorem id quam.'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title'=>'My Personal Post',
            'slug'=>'my-personal-post',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat sodales nisi, ac
            tempus ipsum egestas eu. Aenean velit arcu, dictum nec magna ac, malesuada euismod diam.',
            'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat sodales nisi, ac tempus
            ipsum egestas eu. Aenean velit arcu, dictum nec magna ac, malesuada euismod diam. Nulla sagittis dolor a
            nisl lacinia, id efficitur urna euismod. Nam posuere felis at libero aliquet, venenatis mattis nunc
            scelerisque. Proin at tortor sed ligula facilisis pretium. Mauris molestie eros in quam scelerisque
            laoreet in ac augue. Duis sed elit laoreet, maximus neque quis, sodales sapien. Sed venenatis, orci id
            interdum finibus, risus ex vulputate nulla, vel pretium magna lorem id quam.'
        ]);
/*        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
