<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => 'boolean'
        ];

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function variations()
    {
        return $this->hasMany(Variation::class,'product_id','id');
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
}
