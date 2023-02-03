<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
class Vendor extends Model
{
    use HasFactory;

    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
