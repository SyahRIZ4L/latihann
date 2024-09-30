<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nama Barang</title>
    <link rel="stylesheet" href="{{asset('tambahBarang.css')}}">
</head>
<body>

    <header class="header">
        <div class="logo">
            <img src="{{asset('Assets/Path_Nihility.webp') }}" alt=logo" class="logo">
            <h1>IXseed Marketplace</h1>
        </div>

        <nav class="nav">
            <a href="/dashboard">Home</a>
            <a href="/barang">Products</a>
            <a href="/cart">Cart</a>
            <a href="/barang/tambah">Add Products </a>
            <a href="/register" class="btn-signup">Logout</a>
        </nav>
    </header>



    <h2>Tambah Barang Baru</h2>
    <form action="{{url('barang/tambah/process')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nama Barang</label>
        <br/>
        <input type="text" name="nama_barang">
        <br/>
        <label>Deskripsi</label>
        <br/>
        <textarea name="deskripsi" rows="10"></textarea>
        <br/>
        <label>Harga</label>
        <br/>
        <input type="number" name="harga" id="">
        <br/>
        <label>Stok</label>
        <br>
        <input type="number" name="stok" id="">
        <br/>
        <label>Gambar</label>
        <br/>
        <input type="file" name="foto_barang">
        <br/>
        <button type="submit">Tambahkan</button>
    </form>
</body>
</html>
