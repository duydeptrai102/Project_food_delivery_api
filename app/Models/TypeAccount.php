<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeAccount extends Model
{
    protected $table = 'type_accounts';
    protected $primaryKey = 'id';
    
    protected $fillable = ['name'];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }

    public function store()
    {
        return $this->hasMany(Store::class);
    }

    public function shiper()
    {
        return $this->hasMany(Shiper::class);
    }
    
    public function statusorder()
    {
        return $this->hasMany(StatusOrder::class);
    }
}