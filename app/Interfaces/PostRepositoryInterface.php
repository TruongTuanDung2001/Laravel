<?php
namespace App\Interfaces;

use App\Models\Post;

interface PostRepositoryInterface
{
    public function getAll();
    public function findById(int $id): ?Post;
    public function create(array $data);
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}

?>
