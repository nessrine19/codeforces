<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function products_alternative()
{
    return $this->hasMany(Product_alternative::class, 'id_Product');
}
}
