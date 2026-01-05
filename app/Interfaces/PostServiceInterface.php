<?php
namespace App\Interfaces;

use App\Models\Post;

interface PostServiceInterface
{
    public function getPosts();
    public function getPostById(int $id): ?Post;
    public function createPost(array $data);
    public function updatePost(int $id, array $data): bool;
    public function deletePost(int $id): bool;
}
?>
