<!DOCTYPE html>
<html>
    <head>
        <title>Edit Barang</title>
        <link rel="stylesheet" href="{{asset('editBarang.css')}}">
    </head>
    <body>
        <h2>Edit {{$barang->nama_barang}}</h2>
        <form action="{{url('barang/edit/process/')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="barang_id" value="{{$barang->barang_id}}">
            <label>Nama Barang</label>
            <br/>
            <input type="text" name="nama_barang" value="{{$barang->nama_barang}}">
            <br/>
            <label>Deskripsi</label>
            <br/>
            <textarea name="deskripsi" rows="10">{{$barang->deskripsi}}</textarea>
            <br/>
            <label>Harga</label>
            <br/>
            <input type="number" name="harga" value="{{$barang->harga}}">
            <br/>
            <label>Stok</label>
            <br/>
            <input type="number" name="stok" value="{{$barang->stok}}">
            <br/>
            <label>Gambar</label>
            <br/>
            <input type="file" name="foto_barang">
            <br/>
            <button type="submit">Simpan</button>
        </form>
    </body>
</html>
