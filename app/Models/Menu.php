<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name','cover','restaurant_id','details','price'];


    public function restaurant()
    {
        return $this->belongsTo(Hotel::class ,'restaurant_id');
    }
}
