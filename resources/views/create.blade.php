<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <h2>Thêm bài viết</h2>

    <form action="/posts/create" method="POST">
        @csrf

        <div>
            <input type="text" name="title" placeholder="Tiêu đề">
        </div>

        <div>
            <textarea name="content" placeholder="Nội dung"></textarea>
        </div>

        <button type="submit">Lưu</button>
    </form>

    <a href="/posts">← Quay lại danh sách</a>

</body>
</html>
