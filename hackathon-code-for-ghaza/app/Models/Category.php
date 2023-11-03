<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function Products_category()
    {
        return $this->hasMany(Product::class, 'id_category');
    }

    public function Products_alt()
    {
        return $this->hasMany(Product_alternative::class, 'id_category');
    }
}
