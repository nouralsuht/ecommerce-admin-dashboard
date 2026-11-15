<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/products-create.css') }}">
</head>

<body>
    <h1>Add Product</h1>

    <a href="{{ route('products') }}">Back to Products</a>
    @if ($errors->any())
        <ul class="validation-errors" role="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Product name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"> 
        <label for="price">Product price</label>
        <input type="number" id="price" name="price" min="0" step="0.01" value="{{ old('price') }}">
        <label for="stock">Product stock</label>
        <input type="number" id="stock" name="stock" value="{{ old('stock') }}">
        <button type="submit">Add Product</button>
    </form>
</body>

</html>
