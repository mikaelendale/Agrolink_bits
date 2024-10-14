<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use App\Models\Order;
use Illuminate\Http\Request;

class DeliverController extends Controller
{
   public function deliverDashboard()
{
    // Get the currently logged-in user's ID
    $loggedUserId = auth()->id();

    // Fetch only the received orders, including associated products and user information
    $receivedOrders = Order::with(['user', 'product', 'receivedOrders']) // Ensure these relationships are defined in the Order model
        ->get();

    // Pass the received orders to the deliver.index view
    return view('deliver.index', compact('receivedOrders'));
}


public function generateQrCode($id)
{
    // Generate QR code for the order link
    $orderLink = route('order.scan', ['id' => $id]);
    $qrCode = QrCode::size(300)->generate($orderLink);

    return response($qrCode)->header('Content-type', 'image/svg+xml');
}
public function showQrCode($id)
{
    // Generate the QR code for the order link
    $orderLink = route('order.scan', ['id' => $id]);
    $qrCode = QrCode::size(300)->generate($orderLink);

    // Pass the QR code and order ID to the view
    return view('order.qr_code', compact('qrCode', 'id'));
}

}
