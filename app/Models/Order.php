<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';

    protected $fillable = [
        'idCustomer',
        'idStore',
        'idShiper'
    ];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function addressorder()
    {
        return $this->hasMany(AddressOrder::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'idCustomer');
    }

    public function shiper()
    {
        return $this->belongsTo(Shiper::class,'idShiper');
    }

    public function store()
    {
        return $this->belongsTo(Store::class,'idStore');
    }

    public function statusorder()
    {
        return $this->hasMany(StatusOrder::class);
    }

    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
