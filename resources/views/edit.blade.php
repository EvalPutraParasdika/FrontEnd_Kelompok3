<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="/produk" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="slug">Slug:</label>
        <input type="text" name="slug" id="slug" required>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>