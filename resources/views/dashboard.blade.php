
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Toko Online</title>
    <link rel="stylesheet" href="{{asset('dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('footer.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{asset('Assets/Path_Nihility.webp') }}" alt="logo" class="logo">
            <h1>Unit Produksi DKV</h1>
        </div>

        <nav class="nav">
            {{-- <a href="dashboard">Home</a>
            <a href="barang">Barang</a> --}}
            {{-- <a href=cart>Cart</a> --}}
            {{-- <a href="/barang/tambah">Add Products </a> --}}
            {{-- <a href="/barang/done">Riwayat pembelian</a> --}}
            {{-- <a href="register" class="btn-signup">Logout</a> --}}
        </nav>
    </header>

    <main class="hero-section">
        <div class="hero-content">
            <span class="badge">Highlight</span>
            <p class="small-text">Unit Produksi DKV</p>
            <h1>Web peminjaman berbagai barang</h1>
            <p class="description">Tempat dimana kamu dapat meminjam barang dari Unit Produksi DKV</p>
            <a href="/barang" class="btn-go">Admin Only</a>
        </div>
        {{-- <div class="tasks">
            <h2>what's in here?</h2>
            <ul>
                <li>Top Trending Products</li>
                <li>Top Trending Products</li>
                <li>Best Sellers Right Now</li>
                <li>Image Classification</li>
                <li>Must-Have Items</li>
            </ul>
        </div> --}}
    </main>
    <!-- New Arrivals Section -->
    <div class="products">
        <h2>Barang yang kami tawarkan</h2>
        <div class="product-list">
            @forelse($barang as $brg)
                <div class="product-item">
                    @if ($brg->foto_barang)
        <img src="{{asset('foto_barang/' . $brg->foto_barang)}}"
        class="card-img-top" alt="{{ $brg->nama_barang }}">
        @else
        <img src="{{asset('Assets/notfound.jpg') }}"
        class="card-img-top" alt="{{ $brg->nama_barang }}">
        @endif
                    <h2> {{htmlspecialchars($brg->nama_barang) }}</h2>
                    <p> {{htmlspecialchars($brg->deskripsi) }}</p>
                    {{-- <span>{{htmlspecialchars($brg->stok) }}</span> --}}
                    <p></p>
                    <a href="https://wa.me/62895366134464?text=Halo,%20saya%20ingin%20meminjam%20barang%20{{ urlencode($brg->nama_barang) }}." class="btn btn-pinjam" target="_blank">Pinjam Barang</a>
                </div>


             @empty
             <div class="col-md-12 text-center">
                <p>Barang tidak ditemukan.</p>
            </div>
             @endforelse



        </div>

    </div>
    <div class="container">
        <div class="item">
            <div class="image-container">
                <img src="{{ asset('assets/Aeon_IX.webp ') }}" alt="Gambar 1" class="rounded-image">
            </div>
            <div class="text-container">
                <h1>Jasa Desain</h1>
                <p>Kami hadir untuk memenuhi kebutuhan desain Anda!, kami menawarkan jasa desain baju, logo, poster, banner, stiker, mug, hingga pin yang siap mendukung berbagai kebutuhan Anda. Percayakan desain Anda kepada kami, dan wujudkan ide-ide terbaik Anda bersama kami!.</p>
            </div>
        </div>
        <div class="item">

            <div class="text-container2">
                <h1>Jasa Percetakan</h1>
                <p>Jadikan kebutuhan percetakan Anda lebih mudah bersama kami! Kami menawarkan jasa cetak berkualitas untuk poster, banner, stiker, logo, hingga foto dengan hasil yang memuaskan. Dapatkan layanan terbaik untuk mendukung kreativitas Anda hanya di sini!.</p>
            </div>
            <div class="image-container">
                <img src="{{ asset('assets/Aeon_IX.webp') }}" alt="Gambar 2" class="rounded-image">
            </div>
        </>
        <!-- Tambahkan lebih banyak item sesuai kebutuhan -->
    </div>



    @include('components.footer')
</body>

</html>








