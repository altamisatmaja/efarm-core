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
        // return $this->belongsTo(CategoryLivestock::class, 'id', 'id');
    }

}
