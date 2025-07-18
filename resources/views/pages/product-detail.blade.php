<h2>{{ $product->name }}</h2>
<img src="{{ asset('storage/' . $product->image) }}" width="200">
<p>Harga: {{ $product->price }}</p>
