<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    public $fillable = [
        'product_id',
        'order_id'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
