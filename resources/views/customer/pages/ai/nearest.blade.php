<!DOCTYPE html>
<html>
<head>
    <title>Nearest Product</title>
</head>
<body>
    <h1>Nearest Product</h1>
    @if ($product)
        <p>Name: {{ $product->name }}</p>
        <p>Latitude: {{ $product->latitude }}</p>
        <p>Longitude: {{ $product->longitude }}</p>
    @else
        <p>No product found within the specified radius.</p>
    @endif
</body>
</html>
