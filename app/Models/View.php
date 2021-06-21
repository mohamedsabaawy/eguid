<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = ['name' , 'cover','details'];

    public function HotelRoom()
    {
        return $this->hasMany(HotelRoom::class,'view_id');
    }
}
