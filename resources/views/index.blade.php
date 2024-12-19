<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
    <h1>Your Cart</h1>
    </header>
    <main>
        <section>
            <h2>Featured Products</h2>
            <div class="products">
                @foreach($products as $product)
                    <div class="product">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <p>Price: ${{ $product->price }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Laravel E-commerce. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>