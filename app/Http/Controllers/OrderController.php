<?php

namespace App\Http\Controllers;

use App\Models\notifications;
use App\Models\Order;
use App\Models\Product;
use App\Models\ReceivedOrder;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function cart()
    {
        // Fetch the orders for the authenticated user
        $orders = Order::with('product')->where('user_id', auth()->id())->get();

// Calculate total amount (assuming service fee is static)
        $serviceFee = 1.00;
        $totalAmount = $orders->sum(function ($order) {
            return $order->product->price * $order->quantity;
        }) + $serviceFee;

        return view('order.cart', compact('orders', 'totalAmount'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Create the order
        $order = Order::create([
            'user_id' => auth()->id(), // The user placing the order
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'status' => 'pending',
        ]);

        // Find the product to check its owner
        $product = Product::find($request->product_id);

        // Check if the product was posted by another user
        // if ($product->user_id !== auth()->id()) {
        //     // Create a notification for the product owner
        //     notifications::create([
        //         'user_id' => $product->user_id, // The user who posted the product
        //         'order_id' => $order->id, // The related order
        //         'product_id' => $product->id, // The related product
        //         'message' => 'Your product has been ordered by ' . Auth::user()->name . '!', // Custom notification message
        //     ]);
        // }

        return redirect()->route('dashboard')->with('success', 'Order placed successfully!');
    }
    //qr

public function updateStatus(Request $request, $id)
{
    // Validate the request (in this case, the ID is coming from the URL)
    // Assuming the QR code contains just the order ID
    // If you're passing more than just the ID, adjust the logic accordingly
    $validated = $request->validate([
        'qr_code' => 'required|string', // Adjust this if necessary based on your QR code content
    ]);

    // Find the order using the ID passed from the QR code
    $order = Order::findOrFail($id);

    // Update order status based on current status
    if ($order->status === 'pending') {
        // Change status from 'pending' to 'on-process'
        $order->status = 'on-process';
    } elseif ($order->status === 'on-process') {
        // Change status from 'on-process' to 'completed'
        $order->status = 'completed';
    } else {
        // If the order is neither pending nor on-process, you can decide what to do
        return redirect()->route('deliver.dashboard')->with('error', 'Invalid order status to update.');
    }

    // Save the updated order status
    $order->save();

    // Log the action (who updated the order)
    $userId = auth()->user()->id; // Get the logged-in user's ID

    // Record the order receiving in a separate table (assumed name: received_orders)
    DB::table('received_orders')->insert([
        'user_id' => $userId, // The ID of the user who processed the order
        'product_id' => $order->product_id, // Assuming the order has a product_id field
        'order_id' => $order->id,  
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Log the action for debugging
    \Log::info("Order {$order->id} status updated by user: {$userId} to '{$order->status}'");

    return redirect()->route('deliver.dashboard')->with('success', 'Order status updated successfully.');
}



}
