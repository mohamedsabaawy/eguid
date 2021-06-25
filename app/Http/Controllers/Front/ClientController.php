<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\Hotel;
use App\Models\HotelRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Type;

class ClientController extends Controller
{
    public function registerForm()
    {
        return view('front.client.register');
    }

    public function register(ClientRequest $request)
    {
        $client = Client::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
        ]);
        return redirect()->route('client.form.login');
    }

    public function loginForm()
    {
        return view('front.client.login');
    }

    public function login(Request $request)
    {
        $client = $request->only(['email', 'password']);
        if (Auth::guard('client')->attempt($client)) {
            return redirect()->route('front.welcome');
//            return redirect()->intended(route('front.welcome'));
        }
        return redirect()->back()->with('status', 'please enter valid data');

    }

    public function logout()
    {
        Auth::guard('client')->logout();
        return redirect()->route('front.welcome');
    }

    public function room(Request $request){
        $request->validate([
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'number' => 'required',
        ]);

//        if(!strtotime($request->end_at) > strtotime($request->end_at))
//            return redirect()->back()->with('status' ,'check out must be > check in');
        $d = strtotime($request->end_at) - strtotime($request->start_at) ;
        if($d == 0){
           return redirect()->back()->with('status','check out must be > check in');
        }
        $day = $d / 86400;
        $room = HotelRoom::where([
            ['client_id',null],
            ['hotel_id',$request->hotel_id],
            ['number',$request->number],
        ])->first();


        if ($room <> null){
            Auth::guard('client')->user()->HotelRooms()->attach($room,['start_at'=>$request->start_at ,'end_at'=>$request->end_at,'price'=>($room->RoomType->price * $day)]);
            $room->client_id = Auth::guard('client')->id();
            $room->save();
            return redirect()->back()->with('status' , 'your request sent to accept please waite');
        }
        return redirect()->back()->with('status' ,'sorry no room');
    }
}
