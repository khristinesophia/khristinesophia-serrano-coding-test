<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>

    <a href="{{ route('products.create') }}">Add Product</a>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product->name }} - {{ $product->price }}
                <a href="{{ route('products.show', $product->id) }}">View</a>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>

    {{ $products->links() }} <!-- Pagination links -->
</body>
</html>
