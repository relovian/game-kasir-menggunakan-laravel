<?php 

use App\Models\dompet;

?>

<x-layouts>
    <x-slot:main>
         <h1 class='tittle_kasir'>Kasir Mini Market</h1>
        <h1 class='total_uang'>total uang : Rp. {{ dompet::sum('kas') }}</h1>    
    <a class="button_stok" href="/StokBarang">Lihat Stok</a>

    <div class="container">

        {{-- @for ($i = 0; $i <= rand(1, 20); $i++)
            @foreach ($barang as $item)
                <div class="list_pelanggan">
                    <p>Pelanggan {{ $i + 1 }}</p>
                    <span>Nama Produk : {{ $item['nama_barang'] }}</span> <br>
                    <span>Jumlah : {{ rand(1, 250) }}</span> <br>
                    <span>Harga : {{ $item['harga'] }}</span> <br>
                    <button>tangani</button>
                </div>
            @endforeach
        @endfor --}}

        @for ($i = 1; $i <= rand(5, 20); $i++)
            @php
                $item = $barang[array_rand($barang)];
                $jumlah = rand(1, 10);
                session('jumlah', $jumlah);
            @endphp

            <div class="list_pelanggan">
                <p class='urutan_pelanggan' >Pelanggan {{ $i }}</p>

                <span> {{ $item['nama_barang'] }}</span><br>
                <span> {{ $jumlah }} Buah </span><br>
                <span> Rp. {{ $item['harga'] }}</span><br>

                <button class="button_tangani"><a href="{{ route('meja.kasir', [
                'harga' => $item['harga'],
                'total_harga' => $item['harga'] * $jumlah,
                'id' => $item['id']
                ]) }}">tangani</a></button>
            </div>
        @endfor
    </div>

    </x-slot:main>
</x-layouts>