@extends('layouts.main')

@section('title', 'Catalogue')

@section('content')
<div class="container py-4">
    <section class="catalogue-section">
        <h2><span class="bold-order">PRODUCT</span> CATALOGUE</h2>

        <div class="row">
            {{-- sidebar --}}
            <div class="col-lg-3 mb-4">
                @include('components.sidebar', ['categories' => $categories])
            </div>

            {{-- konten produk --}}
            <div class="col-lg-9">
                <h3 class="mb-4">All New Products</h3>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
                    @forelse ($products as $product)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('storage/products/' . $product->image ) }}" alt="{{ $product->code }}" class="card-img-top img-fluid">
                                <div class="card-body text-center">
                                    <p class="card-text">{{ $product->code }}</p>
                                    <a href="{{ route('product.show', $product->id) }}" class="btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No Product found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection