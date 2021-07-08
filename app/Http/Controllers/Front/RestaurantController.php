<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function App\Sabaawy\getCity;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Hotel::restaurant()->where('city_id' ,'=',getCity()['id'])->get();
        return view('front.restaurant.index',compact('restaurants'));
    }


    public function show(Hotel $restaurant)
    {
        $types = $restaurant->RoomTypes;
        return view('front.restaurant.show',compact('restaurant','types'));
    }
}
