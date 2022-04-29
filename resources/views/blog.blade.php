<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul_halaman }}</title>
</head>
<body>
    @foreach ($blogs as $blog)
        <h1>{{ $blog->judul }}</h1>
        <h1><img src="{{ asset('storage/' . $blog->gambar_blog) }}" alt=""></h1>
    @endforeach
</body>
</html>