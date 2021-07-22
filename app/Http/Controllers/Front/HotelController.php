<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Hotel;
use App\Models\HotelRoom;
use App\Models\Landmark;
use App\Models\RoomType;
use Illuminate\Http\Request;
use function App\Sabaawy\getCity;

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
        $hotels = Hotel::with('clients')->hotel()->where('city_id',getCity()['id'])->get();
        return view('front.hotel.index',compact('hotels'));
    }


    public function show(Hotel $hotel)
    {
        $landmarks = Landmark::where('city_id' , $hotel->City->id)->get();
        $views = RoomType::where('hotel_id' ,$hotel->id)->get();
        return view('front.hotel.show',compact('hotel','views','landmarks'));
    }
}
