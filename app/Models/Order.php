<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'total_amount',
        'status',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function oderitem(){
        return $this->hasMany(OrderItem::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}


