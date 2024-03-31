<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product(){
        return $this->BelongsTo(Product::class, 'id', 'id');
    }
    public function user(){
        return $this->BelongsTo(User::class, 'id', 'id');
    }
}
