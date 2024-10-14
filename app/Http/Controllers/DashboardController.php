<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //product
        // Fetch the orders for the authenticated user
        $orders = Order::with('product')->where('user_id', auth()->id())->get();

        // Calculate total amount (assuming service fee is static)
        $serviceFee = 1.00;
        $totalAmount = $orders->sum(function ($order) {
            return $order->product->price * $order->quantity;
        }) + $serviceFee;
        $userCount = User::where('usertype', 'user')->count();
        $deliverCount = User::where('usertype', 'deliver')->count();
        $providerCount = User::where('usertype', 'provider')->count();
        $adminCount = User::where('usertype', 'admin')->count();

        $products = Product::all();
        return view('dashboard', compact('userCount', 'deliverCount', 'providerCount', 'adminCount', 'orders', 'products', 'totalAmount'));
    }
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1', // Optionally add quantity
        ]);

        // Create a new order
        Order::create([
            'product_id' => $request->input('product_id'),
            'user_id' => auth()->id(), // Associate the order with the authenticated user
            'quantity' => $request->input('quantity', 1), // Default to 1 if not provided
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product added to order successfully!');
    }
    public function allUsers()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }
}
