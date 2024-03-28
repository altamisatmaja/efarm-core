<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function typelivestocks() : HasMany {
        return $this->hasMany(TypeLivestock::class, 'id', 'id_typelivestocks');
    }

    public function gender_livestocks() : HasMany {
        return $this->hasMany(GenderLivestock::class, 'id', 'id_jenis_gender_hewan');
    }

    public function partner() : HasMany {
        return $this->hasMany(Partner::class, 'id', 'id_partner');
    }

    public function categoryproduct() : HasMany {
        return $this->hasMany(CategoryProduct::class, 'id', 'id_kategori');
    }

    // public function categorylivestock

    // relationship to typelivestock
    
}
