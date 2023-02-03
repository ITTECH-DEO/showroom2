<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vendor;
use App\Models\Transaction;
class Car extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'name_car',
        'type_car',
        'description',
        'img_car2',
        'img_car3',
        'img_car4',
        'img_car_lainnya1',
        'img_car_lainnya2',
        'img_car_lainnya3',
        'img_car_lainnya4',
        'doors',
        'seats',
        'tahun',
        'model',
        'fisrt_registartion',
        'millage',
        'fuel',
        'engine_size',
        'power',
        'color',
        'status_id',
        'whatsapp_id',
        'vendor_id',
        'day_price',

    ];
    public function vendor()
    {
    	return $this->belongsTo(Vendor::class);
    }

    public function status()
    {
    	return $this->belongsTo(Status::class);
    }

    public function whatsapp()
    {
    	return $this->belongsTo(Whatsapp::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
