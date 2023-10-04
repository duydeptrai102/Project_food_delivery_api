<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'idStore',
        'name',
        'status'
    ];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function store()
    {
        return $this->belongsTo(Store::class,'idStore');
    }

    public function imageproduct()
    {
        return $this->hasMany(ImageProduct::class);
    }

    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function productdetail()
    {
        return $this->hasMany(ProductDetail::class);
    }
}