<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        Post::factory(5)->create(['user_id' => $user->id]);

        // $user = User::factory()->create();
        
        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => '<p>Sit quis velit ut eu sint ullamco. Mollit consequat do aliquip labore qui quis fugiat ut consequat esse est pariatur nostrud nulla. Elit voluptate magna consequat est nisi sunt. Anim aliquip mollit deserunt labore in. Excepteur ex esse deserunt laborum officia consequat commodo magna enim ullamco mollit. Consectetur velit consequat officia consectetur aliqua reprehenderit non elit. Labore officia voluptate est commodo. Eiusmod voluptate deserunt ipsum ex cillum reprehenderit esse ullamco est commodo ea tempor. Reprehenderit commodo dolor Lorem dolore laborum cillum magna do exercitation Lorem eu. Adipisicing pariatur duis duis quis in reprehenderit id in exercitation consectetur nulla consectetur elit. Elit dolor cupidatat officia excepteur consequat aliqua officia irure commodo fugiat ipsum. Consectetur irure incididunt ea et qui incididunt incididunt aute qui ipsum sunt ex magna. Officia incididunt sit Lorem magna incididunt. Non nulla voluptate mollit sit. Tempor laborum et proident nulla incididunt aliquip reprehenderit irure enim aliquip aliquip ipsum enim. Qui occaecat aliquip est qui nulla nulla tempor ad irure. Nulla officia aliquip do non mollit sit tempor nisi ullamco reprehenderit. Et proident reprehenderit eu ut esse velit mollit consectetur irure eiusmod in cupidatat commodo. Ad eiusmod commodo sit id laboris magna nisi ea consequat reprehenderit. Ex sit ea cupidatat et eu consequat occaecat voluptate magna cupidatat elit tempor. Culpa enim magna pariatur officia qui sit pariatur ipsum aute ea non id Lorem ea. Aute amet sit dolore laborum duis exercitation non esse veniam velit mollit occaecat ex.</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => '<p>Sit quis velit ut eu sint ullamco. Mollit consequat do aliquip labore qui quis fugiat ut consequat esse est pariatur nostrud nulla. Elit voluptate magna consequat est nisi sunt. Anim aliquip mollit deserunt labore in. Excepteur ex esse deserunt laborum officia consequat commodo magna enim ullamco mollit. Consectetur velit consequat officia consectetur aliqua reprehenderit non elit. Labore officia voluptate est commodo. Eiusmod voluptate deserunt ipsum ex cillum reprehenderit esse ullamco est commodo ea tempor. Reprehenderit commodo dolor Lorem dolore laborum cillum magna do exercitation Lorem eu. Adipisicing pariatur duis duis quis in reprehenderit id in exercitation consectetur nulla consectetur elit. Elit dolor cupidatat officia excepteur consequat aliqua officia irure commodo fugiat ipsum. Consectetur irure incididunt ea et qui incididunt incididunt aute qui ipsum sunt ex magna. Officia incididunt sit Lorem magna incididunt. Non nulla voluptate mollit sit. Tempor laborum et proident nulla incididunt aliquip reprehenderit irure enim aliquip aliquip ipsum enim. Qui occaecat aliquip est qui nulla nulla tempor ad irure. Nulla officia aliquip do non mollit sit tempor nisi ullamco reprehenderit. Et proident reprehenderit eu ut esse velit mollit consectetur irure eiusmod in cupidatat commodo. Ad eiusmod commodo sit id laboris magna nisi ea consequat reprehenderit. Ex sit ea cupidatat et eu consequat occaecat voluptate magna cupidatat elit tempor. Culpa enim magna pariatur officia qui sit pariatur ipsum aute ea non id Lorem ea. Aute amet sit dolore laborum duis exercitation non esse veniam velit mollit occaecat ex.</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => '<p>Sit quis velit ut eu sint ullamco. Mollit consequat do aliquip labore qui quis fugiat ut consequat esse est pariatur nostrud nulla. Elit voluptate magna consequat est nisi sunt. Anim aliquip mollit deserunt labore in. Excepteur ex esse deserunt laborum officia consequat commodo magna enim ullamco mollit. Consectetur velit consequat officia consectetur aliqua reprehenderit non elit. Labore officia voluptate est commodo. Eiusmod voluptate deserunt ipsum ex cillum reprehenderit esse ullamco est commodo ea tempor. Reprehenderit commodo dolor Lorem dolore laborum cillum magna do exercitation Lorem eu. Adipisicing pariatur duis duis quis in reprehenderit id in exercitation consectetur nulla consectetur elit. Elit dolor cupidatat officia excepteur consequat aliqua officia irure commodo fugiat ipsum. Consectetur irure incididunt ea et qui incididunt incididunt aute qui ipsum sunt ex magna. Officia incididunt sit Lorem magna incididunt. Non nulla voluptate mollit sit. Tempor laborum et proident nulla incididunt aliquip reprehenderit irure enim aliquip aliquip ipsum enim. Qui occaecat aliquip est qui nulla nulla tempor ad irure. Nulla officia aliquip do non mollit sit tempor nisi ullamco reprehenderit. Et proident reprehenderit eu ut esse velit mollit consectetur irure eiusmod in cupidatat commodo. Ad eiusmod commodo sit id laboris magna nisi ea consequat reprehenderit. Ex sit ea cupidatat et eu consequat occaecat voluptate magna cupidatat elit tempor. Culpa enim magna pariatur officia qui sit pariatur ipsum aute ea non id Lorem ea. Aute amet sit dolore laborum duis exercitation non esse veniam velit mollit occaecat ex.</p>',
        // ]);
    
    }
}
