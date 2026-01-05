<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Interfaces\PostServiceInterface;

class PostController extends Controller
{
    public function __construct(
        protected PostServiceInterface $postService
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $posts = Post::all();
        $posts = $this->postService->getPosts();
        return view('posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->only(['title', 'content']);
        $this->postService->createPost($data);
        return redirect('/posts')->with('Success', 'Thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $post = $this->postService->getPostById($id);
        abort_if(!$post, 404);

        return view('posts_edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->only(['title', 'content']);
        $this->postService->updatePost($id, $data);

        return redirect('/posts')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $this->postService->deletePost($id);
        return redirect('/posts')->with('success'. 'Đã xóa bài viết');
    }
}
