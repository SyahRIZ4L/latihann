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

</body>
</html>
@forelse($barang as $brg)
<div class="col-md-4">
    <div class="card">
        @if ($brg->foto_barang)
        <img src="{{asset('foto_barang/' . $brg->foto_barang)}}"
        class="card-img-top" alt="{{ $brg->nama_barang }}">
        @else
        <img src="{{asset('Assets/notfound.jpg') }}"
        class="card-img-top" alt="{{ $brg->nama_barang }}">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $brg->nama_barang }}</h5>
            <p class="card-text">{{ $brg->deskripsi }}</p>
            <p class="card-text">{{ $brg->harga }}</p>
            <a href="#" class="btn btn-primary">Detail</a>
            <a href="{{url('barang/edit/' . $brg->barang_id)}}"class="btn btn-success">Edit</a>
            <form action="{{url('barang/delete')}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="hidden" name="id_barang" value="{{$brg->barang_id}}">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <form action="{{url('cart/process')}}" method="POST">
                @csrf
                <input type="hidden" name="barang_id" value="{{$brg->barang_id}}">
                <input type="hidden" name="qty" value="1">
                <button type="submit" class="btn btn-success">Tambah Ke Keranjang</button>
             </form>
        </div>
    </div>
</div>
@empty
<div class="col-md-12 text-center">
    <p>Barang tidak ditemukan.</p>
</div>
@endforelse
