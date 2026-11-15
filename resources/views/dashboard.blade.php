{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>

<body>
    <h1>E-Commerce Admin Dashboard</h1>
    <p>Welcome {{ $name }} to your dashboard!</p>
    <p>Your age is: {{ $age }}</p>
    <p>You have {{ $productsCount }} products in your inventory.</p>
    <p>{{ 3 + 5 }}</p> --}}
    {{-- @if ($productsCount > 0)
        <p>You have products in your inventory.</p>
    @else
        <p>You have no products in your inventory.</p>
    @endif
    <h3>Product count = {{ $productsCount }}</h3>
    <h2>Product List:</h2>
    {{-- <ul>
        @foreach ($products as $product)
            <li>
                {{ $product['name'] }} - {{ $product['price'] }} JOD 
                @if ($product['price'] > 200)
                Expensive 
                @else
                Affordable
                
                @endif

            </li>
        @endforeach
    </ul> --}}
    {{-- <h3>product list with forelse :</h3>
    <ul>
        @forelse ($products as $product)
            <li>
                {{ $product['name'] }} - {{ $product['price'] }} JOD
            </li>
        @empty
            <li>No products available.</li>
        @endforelse
    </ul>
    <h3>
        Product list with foreach :
    </h3>
    <ul>
        @foreach ($p as $product)
            <li>
                {{ $product['name'] }} - {{ $product['price'] }} JOD
            </li>
        @endforeach
    </ul>
    @if ($productsCount > 0)
        <p>Products are available</p>
    @else
        <p>No products available</p>
    @endif --}} 
    {{-- <h2>Featured Product:</h2> --}}
    {{-- <p>Product Name: {{ $featuredProduct['name'] }}</p>
      <p>Product Price: {{ $featuredProduct['price'] }}</p> --}}
    {{-- @if ($featuredProduct['price'] > 200)
        <p>This is an expensive product.</p>
        @else
        <p>This is an affordable product.</p>
        @endif --}}
{{-- </body>

</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="dashboard-layout">
        <aside class="sidebar">
            <div class="brand"><span class="brand-icon">E</span> Commerce Admin</div>
            <p class="nav-label">WORKSPACE</p>
            <nav aria-label="Main navigation">
                <a class="active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('products') }}">Products <span>&rarr;</span></a>
                <a href="{{ route('nour') }}">Nour</a>
            </nav>
            <div class="sidebar-footer">Your store, at a glance.</div>
        </aside>
        <main>
            <header class="topbar"><span>Workspace / <strong>Dashboard</strong></span><span class="avatar" aria-label="User profile"> {{ strtoupper(substr($name, 0, 1)) }} </span></header>
            <section class="welcome">
                
                <p class="eyebrow">STORE OVERVIEW</p>
                <h1>Welcome back, {{ $name }}.</h1>
                <p>Here is a quick look at your product inventory.</p>
            </section>
            <section class="summary" aria-label="Dashboard summary">
                <article class="stat-card"><p>Total products</p><strong>{{ $productsCount }}</strong><span>Products in your inventory</span></article>
                <article class="stat-card profile-card"><p>Your profile</p><strong>{{ $name }}</strong><span>Your age is: {{ $age }}</span></article>
            </section>
            <section class="inventory">
                <div class="section-heading"><div><p class="eyebrow">INVENTORY</p><h2>Product overview</h2></div><a class="button" href="{{ route('products') }}">View products &rarr;</a></div>
                <ul class="product-list">
                    @forelse ($products as $product)
                        <li><span class="product-icon" aria-hidden="true">{{ strtoupper(substr($product['name'], 0, 1)) }}</span><span class="product-name">{{ $product['name'] }}</span><strong>{{ $product['price'] }} <small>JOD</small></strong></li>
                    @empty
                        <li class="empty-state">No products available.</li>
                    @endforelse
                </ul>
            </section>
        </main>
    </div>
</body>
</html>
