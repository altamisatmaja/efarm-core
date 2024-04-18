<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'orders_details';


    public function  order(){
        return $this->belongsTo(Order::class, 'id');
    }

    public function partner(){
        return $this->hasMany(Partner::class,'id', 'id_partner');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

}
