<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    protected $table = 'adrresses';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'city',
        'district',
        'ward',
        'address'
    ];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function customer()
    {
        return $this->belongsTo(Customer::class,'address');
    }
}