<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Hotel;
use App\Models\HotelRoom;
use App\Models\RoomType;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function search(Request $request)
    {
        $city = City::findOrFail($request->city_id);
        $rooms = $city->HotelRooms;
        $rooms = $rooms->where('number',$request->number)->where('client_id' ,null)->unique('hotel_id') ;
        return view('front.hotel.searche',compact('rooms','city'));
    }
    public function index()
    {
        $hotels = Hotel::hotel()->get();
        return view('front.hotel.search',compact('hotels'));
    }


    public function show(Hotel $hotel)
    {
        $types = $hotel->RoomTypes;
        return view('front.hotel.show',compact('hotel','types'));
    }
}
