<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::where('restaurant_id' , Auth::guard('hotel')->id())->get();
        return view('hotel.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $room = Menu::create([
           'name'=>$request->name,
           'details'=>$request->details,
           'price'=>$request->price,
           'cover'=>$request->cover->store('view' , 'public'),
           'restaurant_id'=>$request->user()->id,
        ]);
        return redirect()->route('menu.index')->with('status' , 'add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
//        $room = HotelRoom::find($id);
//        $last = $room->Clients->where('id' , $room->client_id)->last();
////        return $last;
//        return view('hotel.room.show',compact('room','last'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('hotel.menu.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);

        if(!$request->cover == null){
            Storage::disk('public')->delete($menu->cover);
            $photo = $request->cover->store('view' ,'public');
        }else{
            $photo =$menu->cover;
        }
        $menu->update([
            'name'=>$request->name,
            'details'=>$request->details,
            'cover'=> $photo,
            'price'=> $request->price,
        ]);
//        return $menu;
        return redirect()->route('menu.index')->with('status' , 'room menu updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        Storage::disk('public')->delete($menu->cover);
        $menu->delete();
        return redirect()->back()->with('status','room menu deleted');
    }
}
