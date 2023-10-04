<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewShiper extends Model
{
    protected $table = 'review_shipers';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'idShiper',
        'idCustomer',
        'idContent',
        'quanlity'
    ];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function shiper()
    {
        return $this->belongsTo(Shiper::class,'idShiper');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'idCustomer');
    }

}