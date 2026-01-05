<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POSTS PAGE</title>
</head>

<body>
    <h1>Post page</h1>
    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
        </div>
        {{-- <a href="/posts/{{ $post->id }}/edit">Sửa</a> --}}

        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Xóa</button>
        </form>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')

            <input name="title" value="{{ $post->title }}">
            <textarea name="content">{{ $post->content }}</textarea>

            <button>Cập nhật</button>
        </form>
    @endforeach

    <h2>Thêm bài viết</h2>
    <form action="/posts" method="POST">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Tiêu đề">
        </div>

        <div>
            <textarea name="content" placeholder="Nội dung"></textarea>
        </div>

        <button type="submit">Lưu</button>

    </form>

    <h1>POST API</h1>
    <h1>Danh sách bài viết</h1>

    <a href="{{ route('posts.create') }}">➕ Thêm bài viết</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Tiêu đề</th>
            <th>Hành động</th>
        </tr>

        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}">✏️ Sửa</a>

                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">❌ Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <h1>Thêm bài viết</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <div>
        <label>Tiêu đề</label><br>
        <input type="text" name="title">
    </div>

    <div>
        <label>Nội dung</label><br>
        <textarea name="content"></textarea>
    </div>

    <button type="submit">Lưu</button>
</form>

<h1>Sửa bài viết</h1>

<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label>Tiêu đề</label><br>
        <input type="text" name="title" value="{{ $post->title }}">
    </div>

    <div>
        <label>Nội dung</label><br>
        <textarea name="content">{{ $post->content }}</textarea>
    </div>

    <button type="submit">Cập nhật</button>
</form>

</body>

</html>
