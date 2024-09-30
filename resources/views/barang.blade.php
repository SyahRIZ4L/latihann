<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZennStore</title>
    <link rel="stylesheet" href="{{asset('barang.css')}}">
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





    @forelse($barang as $brg)
<div class="col-md-4">
    <div class="product-card">
        @if ($brg->foto_barang)
        <img src="{{asset('foto_barang/' . $brg->foto_barang)}}" class="product-image" alt="{{ $brg->nama_barang }}">
        @else
        <img src="{{asset('Assets/notfound.jpg') }}" class="product-image" alt="{{ $brg->nama_barang }}">
        @endif
        <div class="product-info">
            <h5 class="product-title">{{ $brg->nama_barang }}</h5>
            <p class="product-description">{{ $brg->deskripsi }}</p>
            <p class="product-price">Rp {{ number_format($brg->harga, 0, ',', '.') }}</p>
            <div class="product-actions">
                <a href="#" class="btn btn-detail">Detail</a>
                <a href="{{url('barang/edit/' . $brg->barang_id)}}" class="btn btn-edit">Edit</a>
                <form action="{{url('barang/delete')}}" method="POST" class="delete-form">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id_barang" value="{{$brg->barang_id}}">
                    <button type="submit" class="btn btn-delete">Delete</button>
                </form>
                <form action="{{url('cart/process')}}" method="POST" class="cart-form">
                    @csrf
                    <input type="hidden" name="barang_id" value="{{$brg->barang_id}}">
                    <input type="hidden" name="qty" value="1">
                    <button type="submit" class="btn btn-cart">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
</div>
@empty
<div class="col-md-12 text-center">
    <p>No products found.</p>
</div>
@endforelse


</body>
</html>

