<x-layouts>
    <x-layouts:main>
        <div class="container-stok">
        <a href="{{ route('kasir.index') }}"> ❮ Kembali </a>

        <h1>Meja Kasir</h1>
    
        <form action="{{ route('pelanggan.bayar') }}" method="POST">
            @csrf
    
            <input type="number" name="id" value="{{ $_GET['id'] }}" style='display: none'> <br>
            <label for="nama_barang">nama barang : </label> <br>
            <input type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}"> <br>
            <label for="harga">harga : </label> <br>
            <input type="number" name="harga" id="harga" value="{{ old('harga', request('harga')) }}" readonly> <br>
            <label for="jumlah">jumlah : </label> <br>
            <input type="number" name="jumlah" id="jumlah" value="{{ old('jumlah') }}"> <br>
            <label for="total_harga" >total harga : </label> <br>
            <input type="number" name="total_harga" id="total_harga" value="{{ old('total_harga', request('total_harga')) }}" readonly > <br>

            @if (session('error'))
                <p class='error'>{{ session('error') }}</p>
            @endif
    
            <button type="submit">selesai</button>
        </form>
    </div>
    </x-layouts:main>
    
</x-layouts>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>meja kasir</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="display: flex; justify-content: center; width: 100%; margin-top: 30px;">

</body>
</html> --}}