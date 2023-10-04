<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    protected $table = 'status_orders';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'idOrder',
        'type_account',
        'idStatus'
    ];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function status()
    {
        return $this->belongsTo(Status::class,'idStatus');
    }

    public function order()
    {
        return $this->belongsTo(Order::class,'idOrder');
    }

    public function typeaccount()
    {
        return $this->belongsTo(TypeAccount::class,'type_account');
    }
}