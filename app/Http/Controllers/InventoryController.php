<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product; // Import the Product model
use App\Models\ReceivedOrder;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class InventoryController extends Controller
{
    public function inventory(Request $request)
    {
        // Get the search term from the request
        $searchTerm = $request->input('search');

        // Retrieve products posted by the authenticated user, filtered by the search term if provided
        $inventory = Product::where('user_id', auth()->id())
            ->when($searchTerm, function ($query) use ($searchTerm) {
                return $query->where('name', 'LIKE', '%' . $searchTerm . '%');
            })
            ->get();

        return view('provider.inventory', compact('inventory', 'searchTerm'));
    }
    public function create()
    {
        // Return the view for creating a new product
        return view('provider.products.create'); // Make sure you create this view
    }
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|string|max:255',
            'description' => 'nullable|string', // Add description validation if needed
            'stock' => 'required|integer|min:0', // Ensure stock is required and a non-negative integer
        ]);

        // Create a new product
        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'description' => $request->input('description'), // Include description if needed
            'stock' => $request->input('stock'), // Include stock field
            'user_id' => auth()->id(), // Associate the product with the authenticated user
        ]);

        // Redirect back to the inventory with a success message
        return redirect()->route('inventory')->with('success', 'Product created successfully!');
    }

    public function orders()
    {
        // Assuming the provider is authenticated
        $providerId = auth()->id();

// Fetch orders related to the authenticated provider
        $orders = Order::with('product', 'user')->get();

        return view('provider.products.orders', compact('orders'));
    }

    public function showQrCode($orderId)
    {
        $order = Order::findOrFail($orderId);

        // Generate QR code that contains the order ID or relevant info
        $qrCode = QrCode::size(200)->generate(route('order.process', $order->id));

        return view('provider.products.qr', compact('qrCode', 'order'));
    }

    public function processOrder(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);

        // Assume that the QR code contains the product ID
        $productId = $request->input('product_id'); // This should be the product ID retrieved from the QR code
        $userId = auth()->id(); // Get the currently authenticated user
        // Update the order status to "On Process"
        $order->status = 'On Process';
        $order->save();

        // Create a record in the received_orders table
        ReceivedOrder::create([
            'user_id' => $userId,
            'order_id' => $orderId,
            'product_id' => $productId,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order is now on process and recorded successfully.');
    }
}
