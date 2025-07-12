<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="post">
        @csrf
        <input type="text" name="nama" placeholder="Nama Produk">
        <input type="text" name="harga" placeholder="Harga Produk">
        <input type="text" name="deskripsi" placeholder="Deskripsi Produk">
        <button type="submit">Tambah Produk</button>
    </form>
</body>

</html>