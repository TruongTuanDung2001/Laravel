<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\PostServiceInterface;

class PostController extends Controller
{
     protected PostServiceInterface $postService;

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    //
    public function index(){
        return response()->json([
            'success' => true,
            'data' => $this->postService->getPosts()
        ]);
    }

    //
    public function store(Request $request){
        $data = $request->only(['title', 'content']);
        $post = $this->postService->createPost($data);
        return response()->json([
            'success' => true,
            'message' => 'Thêm bài viết thành công',
            'data' => $post
        ], 201);
    }

    //
    public function update(Request $request, $id){
        $data = $request->only(['title', 'content']);
        $updatePost = $this->postService->updatePost($id, $data);

        if(!$updatePost){
            return response()->json([
                'success' => false,
                'message' => 'Post not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Post updated',
            'data' => $updatePost
        ]);
    }

    //
    public function destroy($id){
        $deletePost =  $this->postService->deletePost($id);

        if(!$deletePost){
            return response()->json([
                'success' => false,
                'message' => 'Post not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Post deleted'
        ]);
    }
}
