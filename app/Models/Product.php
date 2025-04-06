<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product', 'category_id', 'price', 'image', 'stock'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function order_detail() {
        return $this->hasMany(OrderDetail::class);
    }
}
