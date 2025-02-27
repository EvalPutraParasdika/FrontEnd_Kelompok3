<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <table>
    <tr>
      <td>Nama Produk</td>
      <td>Slug Produk</td>
      <td>Harga Produk</td>
      <td>Aksi</td>
    </tr>
    @foreach ($produk as $row)
    <tr>
      <td>{{$row->name}}</td>
      <td>{{$row->slug}}</td>
      <td>{{$row->harga}}</td>
      <td>
      <a href="/produk/{{$row->id}}">Edit</a>
      <a href="/produk/{{$row->id}}">Hapus</a>
      </td>
    </tr>
  @endforeach
  </table>
</body>

</html>