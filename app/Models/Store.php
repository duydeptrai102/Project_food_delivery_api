<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nameStore',
        'username',
        'password',
        'email',
        'phone',
        'image',
        'address',
        'id_type_account'
    ];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function typeaccount()
    {
        return $this->belongsTo(TypeAccount::class,'id_type_account');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}

