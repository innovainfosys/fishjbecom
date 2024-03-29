<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBlock extends Model
{
    use HasFactory;
    public function items()
    {
        return $this->hasMany(HomeBlockProducts::class)->orderBy('id', 'desc')->take(6);
    }

    public function allItems()
    {
        return $this->hasMany(HomeBlockProducts::class);
    }
}
