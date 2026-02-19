<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('kasir.index') }}">Kasir</a>
        <a href="{{ route('stok.index') }}">Stok</a>
    </nav>
    <main>
        {{ $main }}
    </main>
</body>
</html>