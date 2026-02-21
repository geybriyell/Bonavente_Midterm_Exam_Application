<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .container {
            width: 70%;
            margin: 50px auto;
        }
        .card {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Product List</h1>

    @foreach($products as $product)
        <div class="card">
            <h2>{{ $product['name'] }}</h2>
            <p><strong>Price:</strong> ₱{{ number_format($product['price']) }}</p>
            <p>{{ $product['description'] }}</p>
        </div>
    @endforeach

</div>

</body>
</html>