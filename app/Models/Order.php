<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'product_id',
        'quantity',
        'status',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
// In Order.php model
public function user()
{
    return $this->belongsTo(User::class);
}
public function receivedOrders()
    {
        return $this->hasMany(ReceivedOrder::class); // Adjust this to the correct model
    }
    
    
}
