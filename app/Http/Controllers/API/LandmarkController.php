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

class LandmarkController extends Controller
{

    public function index(Request $request)
    {
        if ($request->landmark_id) {
            return  new LandmarkResource(Landmark::find($request->landmark_id));
        }

        if($request->city_id){
            return HotelResource::collection(Landmark::where('city_id',$request->city_id)->paginate(PAGINATE));
        }

        return LandmarkResource::collection(Landmark::all());
    }

    public function search(Request $request)
    {
        if ($request->city_id <> null) {
            $city = City::find($request->city_id);
            if (!$city)
                return responseJson('0', 'not found');
            $rooms = $city->HotelRooms;
            $rooms = $rooms->where('number', $request->number)->where('client_id', null)->unique('hotel_id');
            return  RoomResource::collection($rooms);
        }
        return responseJson('0', 'not found');
    }

}
