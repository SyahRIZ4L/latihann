
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Toko Online</title>
    <style>
        /* CSS untuk styling halaman */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .header {
            background-color: #004AAD;
            padding: 20px;
            color: white;
            text-align: center;
        }
        .hero {
            background-image: url('{{ asset('Assets/blackground3.webp') }}');
            background-size: cover;
            background-position: center;
            padding: 60px 20px;
            text-align: center;
            color: white;
            position: relative;
        }
        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #004AAD;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .hehe {
            background-color: #940606;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            float: right; /* Menempatkan tombol di sebelah kanan */
            margin-top: -30px; /* Sesuaikan margin sesuai kebutuhan untuk mengatur vertikal posisi */
        }
        .products {
            padding: 40px 20px;
            background-color: white;
        }
        .products h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .product-list {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .product-item {
            background-color: #fff;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            width: 200px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .product-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .product-item h2 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .product-item p {
            margin-bottom: 10px;
            color: #666;
        }
        .product-item span {
            font-weight: bold;
            color: #004AAD;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>Welcome to Your Dashboard</h1>
        <a href="{{url('login')}}" class="hehe">Login</a>
        <a href="{{url('register')}}" class="hehe">Register</a>
        <a href="{{url('logout')}}" class="hehe">Keluar</a>

    </div>

    <!-- Add this section just below the header div -->
<div class="navigation-buttons">
    <a href="{{ url('barang') }}" class="nav-btn">Barang</a>
    <a href="{{ url('/barang/tambah') }}" class="nav-btn">Tambah</a>
    <a href="{{ url('/cart') }}" class="nav-btn">keranjang</a>
</div>

<!-- Add this CSS in the <style> section -->
<style>
    /* ... existing styles ... */

    .navigation-buttons {
        background-color: #f8f9fa;
        padding: 10px 0;
        text-align: center;
    }

    .nav-btn {
        display: inline-block;
        padding: 8px 16px;
        margin: 0 5px;
        background-color: #004AAD;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .nav-btn:hover {
        background-color: #003380;
    }
</style>


    <!-- Hero Section -->
    <div class="hero">
        <h1>Your Website Your Way</h1>
        <p>Explore the possibilities with our solutions.</p>
        <a href="{{url('barang')}}" class="btn">Get Started</a>
    </div>

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

