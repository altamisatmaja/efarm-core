<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categorylivestock() {
        return $this->hasMany(CategoryLivestock::class, 'id_kategori_produk');
        // return $this->belongsTo(CategoryLivestock::class, 'id_kategori');
    }
}
