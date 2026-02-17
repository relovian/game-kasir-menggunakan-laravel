<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="display: flex; justify-content: center; width: 100%; margin-top: 80px;">
    <div class="container-stok">
        <a href="{{ route('stok.index') }}"> ❮ Kembali </a>
        <h1>Tambah Stok</h1>
        <form action="{{ route('stok.tambah') }}" method='post'>
            @csrf
            <label for="nama_barang">nama barang</label> <br>
            <input type="text" name="nama_barang" id='nama_barang'> <br>
            <label for="stok_masuk">stok masuk</label> <br>
            <input type="number" name="stok_masuk" id='stok_masuk'> <br>
            <label for="harga">harga</label> <br>
            <input type="number" name="harga" id='harga'> <br>
                
            <button type="submit" name="submit">Simpan</button>
        </form>
    </div>

</body>
</html>