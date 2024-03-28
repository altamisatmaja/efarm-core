<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    // public function livestocks(){
    //     return $this->belongsTo(Livestock::class, 'id_livestock');
    // }

    // public function categorylivestock
}
