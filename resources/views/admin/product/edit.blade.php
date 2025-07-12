<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ubah Produk</h1>
    <form action="/produk/{{ $produk->id }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="nama" value="{{ $produk->nama }}" placeholder="Nama Produk">
        <input type="text" name="harga" value="{{ $produk->harga }}" placeholder="Harga Produk">
        <input type="text" name="deskripsi" value="{{ $produk->deskripsi }}" placeholder="Deskripsi Produk">
        <button type="submit">Tambah Produk</button>
    </form>
</body>

</html>