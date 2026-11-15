<h1>Edit Product</h1>

<p>You are editing: {{ $product->name }}</p>

<a href="{{ route('products') }}">Back to Products</a>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Product name</label>
    <input
        type="text"
        id="name"
        name="name"
        value="{{ old('name', $product->name) }}"
    >
    <label for="price">Product price</label>
    <input
        type="number"
        id="price"
        name="price"
        min="0"
        step="0.01"
        value="{{ old('price', $product->price) }}"
        >
    <label for="stock">Product stock</label>
    <input
    type="number"
    id="stock"
    name="stock"
    min="0"
    value="{{ old('stock', $product->stock) }}"
>
<button type="submit">Update Product</button>

</form>
