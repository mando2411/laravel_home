<h1>Latest Products</h1>

@foreach($products as $product)
    <div>
        <h3>{{ $product->post_title }}</h3>
        <a href="/product/{{ $product->post_name }}">View Product</a>
    </div>
@endforeach