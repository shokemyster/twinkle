<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);

        Post::truncate();

        $admin->pages()->saveMany([
          new Post([
            'title' => 'Blog Post 1',
            'slug' => 'blog-post-1',
            'excerpt' => 'Blog post 1 exceprt',
            'body' => 'This is the blog post No.1'
          ]),
          new Post([
            'title' => 'Blog Post 2',
            'slug' => 'blog-post-2',
            'excerpt' => 'Blog post 2 exceprt',
            'body' => 'This is the blog post No.2'
          ]),
          new Post([
            'title' => 'Blog Post 3',
            'slug' => 'blog-post-3',
            'excerpt' => 'Blog post 3 exceprt',
            'body' => 'This is the blog post No.3'
          ]),
        ]);
    }
}
