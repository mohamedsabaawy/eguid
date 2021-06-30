<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hotel extends Authenticatable
{
    protected $guard = 'hotel';
    protected $table = 'hotels';
    public $timestamps = true;
    protected $hidden = ['password'];
    protected $fillable = array('name', 'email', 'password', 'cover', 'longitude', 'latitude', 'restaurant', 'city_id', 'user_id', 'details' ,'restaurant');

    public function scopeHotel($query)
    {
        return $query->where('restaurant','=', null);
    }
    public function scopeRestaurant($query)
    {
        return $query->where('restaurant','!=', null);
    }

    public function Rooms()
    {
        return $this->hasMany('App\Models\HotelRoom');
    }

    public function Photos()
    {
        return $this->hasMany('App\Models\HotelPhoto');
    }

    public function Clients()
    {
        return $this->belongsToMany(Client::class,'reviews')->withPivot(['title','review','comment']);
    }

    public function City()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function RoomTypes()
    {
        return $this->hasMany(RoomType::class);
    }

    public function getRatingAttribute()
    {
        return $this->Clients()->average('review');
    }

    public function menu()
    {
        return $this->hasMany(Menu::class,'restaurant_id');
    }

}
