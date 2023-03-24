<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Document</h1>
        <h1>Document</h1>
        <p>Product ID: {{ $product->id }}</p>
        <p>Product Name: {{ $product->name }}</p>
        <p>Product Price: {{ $product->price }}</p>
        <p>Product Image: <img src="{{ asset('images/'.$product->image) }}" alt=""></p>
        <p>Product Description: {{ $product->description }}</p>
    </div> 
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>