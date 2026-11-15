<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
</head>

<body>
    <h1>{{ $title }}</h1>
    @if (session('success'))
    <p class="success-message" role="status">{{ session('success') }}</p>
@endif
<p class="product-count">Total products: {{ $productsCount }}</p>
    <a href="{{ route('dashboard') }}">Back to Dashboard</a>
    {{-- <ul>
        @forelse($products as $product)
        <li>
            {{ $product['name'] }} - {{ $product['price'] }} JOD
            @empty
            <li>No products available.</li>
        </li>
        @endforelse
    </ul> --}}
    <div class="table-container">
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Price Category</th>
            <th>Availability</th>
            <th>Actions</th>
        </tr>

        @forelse ($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }} JOD</td>
                <td>
                    @if ($product['price'] > 200)
                        Expensive
                    @else
                        Affordable
                    @endif
                </td>
                <td>
                    @if ($product['stock'] == 0)
<span class="out-of-stock">Out of Stock</span>
                    @elseif ($product['stock'] >= 1 && $product['stock'] <= 3)
<span class="low-stock">Low Stock</span>
                    @else
<span class="in-stock">In Stock</span>
                    @endif
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No products available.</td>
            </tr>
        @endforelse
    </table>
    </div>

</body>

</html>


