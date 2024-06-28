<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        <br>

        <label for="description">Product Description:</label>
        <textarea name="description" id="description" required>{{ $product->description }}</textarea>
        <br>

        <label for="price">Product Price:</label>
        <input type="number" step="0.01" name="price" id="price" value="{{ $product->price }}" required>
        <br>

        <button type="submit">Update Product</button>
    </form>
    <a href="{{ route('products.index') }}">Back to Products</a>
</body>
</html>
