<?php
namespace App\Service;

use App\Interfaces\PostServiceInterface;
use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;

class PostService implements PostServiceInterface
{
    public function __construct(
        protected PostRepositoryInterface $postRepository
    ){}

    public function getPosts()
    {
        return $this->postRepository->getAll();
    }

    public function getPostById(int $id): ?Post
    {
        return $this->postRepository->findById($id);
    }

    public function createPost(array $data)
    {
        return $this->postRepository->create($data);
    }

    public function updatePost(int $id, array $data): bool
    {
        return $this->postRepository->update($id, $data);
    }

    public function deletePost(int $id): bool
    {
        return $this->postRepository->delete($id);
    }
}
?>
