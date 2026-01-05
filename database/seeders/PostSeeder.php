<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Post::create([
            'title' => 'Bài viết số 1',
            'content' => 'Nội dung bài viết số 1'
        ]);

        Post::create([
            'title' => 'Bài viết số 2',
            'content' => 'Nội dung bài viết số 2'
        ]);

        Post::create([
            'title' => 'Bài viết số 3',
            'content' => 'Nội dung bài viết số 3'
        ]);
    }
}
