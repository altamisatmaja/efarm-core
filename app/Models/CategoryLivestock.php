<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryLivestock extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function typelivestock() : HasMany {
        return $this->hasMany(TypeLivestock::class);
    }

    public function categoryproduct() {
        return $this->belongsTo(CategoryProduct::class, 'id_kategori_produk');
    }

    public function farm(){
        return $this->hasMany(Farm::class);
    }

}
