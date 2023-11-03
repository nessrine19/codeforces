<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public function Products()
    {
        return $this->hasMany(Product::class, 'id_country');
    }

    public function Doctors()
    {
        return $this->hasMany(Doctor::class, 'id_country');
    }
    public function Donations()
    {
        return $this->hasMany(Donation::class, 'id_country');
    }
    public function Products_alt()
    {
        return $this->hasMany(Product_alternative::class, 'id_country');
    }
}


