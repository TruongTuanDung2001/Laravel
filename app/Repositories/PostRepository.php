<?php
    namespace App\Repositories;

    use App\Interfaces\PostRepositoryInterface;
    use App\Models\Post;

    class PostRepository implements PostRepositoryInterface
    {
        public function getAll()
        {
            return Post::all();
        }

        public function findById(int $id): ?Post
        {
            return Post::find($id);
        }

        public function create(array $data)
        {
            return Post::create($data);
        }

        public function update(int $id, array $data): bool
        {
            $post = Post::find($id);
            if(!$post) return false;

            return $post->update($data);
        }

        public function delete(int $id): bool
        {
            $post = Post::find($id);
            if(!$post) return false;

            return $post->delete();
        }
    }
?>
