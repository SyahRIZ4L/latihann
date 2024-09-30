
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Toko Online</title>
    <link rel="stylesheet" href="{{asset('dashboard.css')}}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{asset('Assets/Path_Nihility.webp') }}" alt=logo" class="logo">
            <h1>IXseed Marketplace</h1>
        </div>

        <nav class="nav">
            <a href="dashboard">Home</a>
            <a href="barang">Products</a>
            <a href=cart>Cart</a>
            <a href="/barang/tambah">Add Products </a>
            <a href="register" class="btn-signup">Logout</a>
        </nav>
    </header>

    <main class="hero-section">
        <div class="hero-content">
            <span class="badge">Quality</span>
            <p class="small-text">IXseed Your Trusted Marketplace for All Your Needs</p>
            <h1>Discover a wide range of quality products from trusted sellers.</h1>
            <p class="description">A marketplace that connects you with the best deals, from everyday essentials to cutting-edge tech products.</p>
            <a href="barang" class="btn-go">Explore Now</a>
        </div>
        <div class="tasks">
            <h2>what's in here?</h2>
            <ul>
                <li>Top Trending Products</li>
                <li>Top Trending Products</li>
                <li>Best Sellers Right Now</li>
                <li>Image Classification</li>
                <li>Must-Have Items</li>
            </ul>
        </div>
    </main>
    <!-- New Arrivals Section -->
    <div class="products">
        <h2>New Arrivals</h2>
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
                    <span>{{htmlspecialchars($brg->harga) }}</span>
                </div>
             @empty
             <div class="col-md-12 text-center">
                <p>Barang tidak ditemukan.</p>
            </div>
             @endforelse
        </div>
    </div>
</body>
</html>

