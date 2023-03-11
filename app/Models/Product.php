<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'description',

    ];


    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function variations()
    {
        return $this->hasMany(Variation::class,'product_id','id');
    }
    public function getMinWeight()
    {
        return $this->variations()->min('weight');
    }
    public function getMinPrice()
    {
        return $this->variations()->min('price');
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
}
