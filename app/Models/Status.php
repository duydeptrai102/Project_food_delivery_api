<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';
    protected $primaryKey = 'id';
    
    protected $fillable = ['name'];

    public $timestamps = true; 
    protected $dateFormat = 'Y-m-d H:i:s'; 

    public function statusorder()
    {
        return $this->hasMany(StatusOrder::class);
    }
}