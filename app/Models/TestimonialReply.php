<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialReply extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'id_user',
        'id_testimonial',
        'pesan_reply',
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'id_products', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
