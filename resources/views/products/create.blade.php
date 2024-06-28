<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" required>
        <br>

        <label for="description">Product Description:</label>
        <textarea name="description" id="description" required></textarea>
        <br>

        <label for="price">Product Price:</label>
        <input type="number" step="0.01" name="price" id="price" required>
        <br>

        <button type="submit">Add Product</button>
    </form>
    <a href="{{ route('products.index') }}">Back to Products</a>
</body>
</html>