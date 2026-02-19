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

    @if (session('success'))
        <script>
            alert('{{ session('success') }}')
        </script>
    @endif

    <a href="/" class='btn-kembali'>Kembali</a>

    <table border=1>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok Masuk</th>
                <th>Stok Keluar</th>
                <th>Total Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->stok_masuk }}</td>
                    <td>{{ $item->stok_keluar }}</td>
                    @if ($item->total_stok < 200)
                    @endif

                    @if ($item->total_stok < 200)
                        <td style="color: red">{{ $item->total_stok }}</td>
                    @else
                        <td>{{ $item->total_stok }}</td>
                    @endif
                    <td>Rp. {{ $item->harga }} / pcs </td>
                    <td>
                        <a href="{{ route('form.edit', ['id' => $item->id]) }}" class='edit'>✏️ | </a>
                        <a href="{{ route('aksi.hapus', ['id' => $item->id]) }}" class='hapus'>🗑️ </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p class='warning-info'>⚠️ Merah = Stok Hampir Habis </p>

    <a href="{{ route('stok.create') }}" class='btn-tambah'>tambah stok</a>
</body>

</html>
