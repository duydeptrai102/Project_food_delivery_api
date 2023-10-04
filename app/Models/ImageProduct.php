<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $table = 'image_products';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'idProduct',
        'url'
    ];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function product()
    {
        return $this->belongsTo(Product::class,'idProduct');
    }

}