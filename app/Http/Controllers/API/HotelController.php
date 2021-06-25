<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Http\Resources\HotelResource;
use App\Http\Resources\LandmarkResource;
use App\Http\Resources\RoomResource;
use App\Models\City;
use App\Models\Client;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\Landmark;
use function App\Sabaawy\responseJson;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    public function city(Request $request)
    {
        $cities = City::where('country_id', $request->country_id)->pluck('name' ,'id');
        if (!count($cities) > 0)
            return responseJson('0', 'please chose country');
        return responseJson('1', 'success', $cities);
    }

    public function country()
    {
        $countries = Country::all()->pluck('name' , 'id');
        return responseJson('1', '', $countries);
    }

    public function index(Request $request)
    {
        if ($request->hotel_id) {
            return responseJson('1', 'success', new HotelResource(Hotel::hotel()->find($request->hotel_id)));
        }

        if($request->city_id){
            return responseJson('1','',
            HotelResource::collection(Hotel::hotel()->where('city_id',$request->city_id)->paginate(PAGINATE)));
        }

        return responseJson('1','',HotelResource::collection(Hotel::hotel()->paginate(PAGINATE)));
    }

    public function search(Request $request)
    {
        if ($request->city_id <> null) {
            $city = City::find($request->city_id);
            if (!$city)
                return responseJson('0', 'not found');
            $rooms = $city->HotelRooms;
            $rooms = $rooms->where('number', $request->number)->where('client_id', null)->unique('hotel_id');
            return responseJson('1', 'success', RoomResource::collection($rooms));
        }
        return responseJson('0', 'not found');
    }

}
