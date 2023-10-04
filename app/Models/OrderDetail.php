<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'idOrder',
        'idProduct',
        'quantity',
        'size'
    ];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function order()
    {
        return $this->belongsTo(Order::class,'idOrder');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'idProduct');
    }
}