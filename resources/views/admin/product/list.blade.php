<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Produk</h1>
    <a href="/produk/create">Tambah Produk</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <a href="{{ route('produk.edit', $item->id) }}">Edit</a>
                    <a href="javascript:void(0)"
                        onclick="event.preventDefault(); confirm('Apakah Anda yakin ingin menghapus data ini?') ? return document.getElementById('delete-form-{{ $item->id }}').submit(); : false;">Hapus</a>
                    <form id="delete-form-{{ $item->id }}" action="{{ route('produk.destroy', $item->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>