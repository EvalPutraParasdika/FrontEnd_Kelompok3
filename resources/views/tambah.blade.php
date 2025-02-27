<html>

<form action="/produk" method="post">
  @csrf
  <label for="name">
    Nama Produk
  </label>
  <input type="text" name="name">

  <label for="slug"></label>
    Slug Produk
  </label>
  <input type="text" name="slug">

  <label for="harga">
    Harga Produk
  </label>

  <input type="text" name="harga">
  <input type="submit">
</form>

</html>