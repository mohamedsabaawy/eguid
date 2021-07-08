<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\City;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function map()
    {
        return view('front.services.map');
    }
    public function otherSites()
    {
        return view('front.services.otherSites');
    }
    public function museums()
    {
        return view('front.services.museums');
    }

    public function city(Request $request)
    {
        if (Auth::user()){
            $client = Client::find(Auth::id());
            $client->city_id = $request->city_id;
            $client->save;
            return redirect()->back();
        }
        session()->put('city_id' , $request->city_id);
        session()->put('city_name' , City::find($request->city_id)->name);
        return redirect()->back();
    }

}
