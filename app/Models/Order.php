<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'status'];
    protected $appends = ['total'];


    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalAttribute()
    {
        return $this->order_detail->sum(function ($detail) {
            return $detail->product->price * $detail->quantity;
        });
    }
}
