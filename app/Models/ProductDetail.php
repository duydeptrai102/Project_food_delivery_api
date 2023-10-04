<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = 'product_detials';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'idProduct',
        'price',
        'size',
        'status'
    ];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function product()
    {
        return $this->belongsTo(Product::class,'idProduct');
    }
}