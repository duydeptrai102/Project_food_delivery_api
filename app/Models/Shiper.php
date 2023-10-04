<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shiper extends Model
{
    protected $table = 'shipers';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'fullname',
        'username',
        'password',
        'email',
        'phone',
        'image',
        'address',
        'id_type_account',
        'status'
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

    public function reviewshiper()
    {
        return $this->hasMany(ReviewShiper::class);
    }
}