<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/upload/image" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit">Unggah Gambar</button>
    </form>
</body>
</html>