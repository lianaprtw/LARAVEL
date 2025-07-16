<?php

namespace App\Http\Controllers;

// 
class YourCartController extends Controller
{
    public function index()
    {
        // Data dummy untuk contoh
        $cartItems = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'price' => 100000,
                'quantity' => 2,
                'image_url' => 'asset/banner2.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'price' => 50000,
                'quantity' => 1,
                'image_url' => 'asset/banner2.jpg',

            ],
        ];

        $cartTotal = 0;
        foreach ($cartItems as $item) {
            $cartTotal += $item['price'] * $item['quantity'];
        }

        return view('pages.your-chart', compact('cartItems', 'cartTotal'));
    }

    public function destroy($id)
    {
    return redirect()->back()->with('success', 'Item Removed successfully');
    }
}

