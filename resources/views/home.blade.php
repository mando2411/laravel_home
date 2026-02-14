<!DOCTYPE html>
<html>
<head>
    <title>Stylish Dresses</title>
    <style>
        .grid {display:flex;flex-wrap:wrap;gap:20px;}
        .card {width:220px;border:1px solid #eee;padding:10px;}
        img {width:100%;height:auto;}
        .old {text-decoration:line-through;color:#999;}
    </style>
</head>
<body>

<h1>Latest Dresses 👗</h1>

<div class="grid">

@foreach($products as $product)
    <div class="card">

        <img src="{{ $product->image }}" alt="{{ $product->post_title }}">

        <h3>{{ $product->post_title }}</h3>

        @if($product->regular_price && $product->regular_price != $product->price)
            <span class="old">{{ $product->regular_price }}</span>
        @endif

        <strong>{{ $product->price }}</strong>

        <br><br>

        <a href="/product/{{ $product->post_name }}">
            Buy Now
        </a>

    </div>
@endforeach

</div>

</body>
</html>