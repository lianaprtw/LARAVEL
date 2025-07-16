@extends('layouts.main')

@section('title', 'Your Chart')

@section('content')
<div class="container-main-chart">
    <section class="cart-section">
        <h2>Your Shopping Chart</h2>

        <div class="cart-table-wrapper">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Name</th>
                        <th>QTY</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cartItems as $item)
                        <tr>
                            <td data-label="Item">
                                <img src="{{ asset($item['image_url']) }}" alt="{{ $item['name'] }}">
                            </td>
                            <td data-label="Name">{{ $item['name'] }}</td>
                            <td data-label="Qty">{{ $item['quantity'] }}</td>
                            <td data-label="Price">{{ $item['price'] }}</td>
                            <td data-label="Total">{{ $item['price'] * $item ['quantity'] }}</td>
                            <td data-label="Action">
                                <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-remove">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Your cart is empty.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="cart-summary">
            <p>Sub Total: USD {{ $cartTotal }}</p>
            <a href="{{ route('checkout') }}" class="checkout-btn">Check Out</a>
        </div>
    </section>
</div>
@endsection
