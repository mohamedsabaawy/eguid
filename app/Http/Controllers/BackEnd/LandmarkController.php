<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\LandmarkRequest;
use App\Models\HotelPhoto;
use App\Models\Landmark;
use App\Models\Country;
use App\Models\LandmarkPhoto;
use App\Models\LandmarkPhotos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use function App\Sabaawy\responseJson;
use Illuminate\Http\Request;

class LandmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landmarks = Landmark::all();
       return view('backend/landmark/index',compact('landmarks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $landmark = Landmark::all();
        return view('backend/landmark/create',compact('countries','landmark'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LandmarkRequest $request)
    {
//        dd($request->all());
        Landmark::create([
            'name' =>$request->name,
            'details' =>$request->details,
            'cover' =>$request->cover->store('imag','public'),
            'city_id' =>$request->city_id,
            'user_id' =>$request->user()->id,
        ]);
        return redirect(route('landmark.index'))->with('status','Landmark added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Landmark $landmark)
    {
        return view('backend.landmark.show' ,compact('landmark'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Landmark $landmark)
    {
        $countries = Country::all();
        return view('backend/landmark/edit',compact('landmark','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landmark $landmark)
    {
//        dd($request->all());
        if($request->cover <> null){
            Storage::disk('public')->delete($landmark->cover);
            $image = $request->cover->store('imag','public') ;
        }else{
            $image = $landmark->cover;
        }
        $landmark->update([
            'name' =>$request->name,
            'details' =>$request->details,
            'cover' =>$image,
            'city_id' =>$request->city_id,
        ]);
        return redirect(route('landmark.index'))->with('status','Landmark update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landmark $landmark)
    {
        Storage::disk('public')->delete($landmark->cover);
        $landmark->delete();
        return redirect(route('landmark.index'))->with('status','Landmark deleted success');
    }

    public function upload(Request $request)
    {
        foreach ($request->photos as $photo)
            $h = LandmarkPhoto::create([
                'name' => $photo->store('landmark','public'),
                'landmark_id' => $request->landmark_id,
            ]);
        return redirect()->back()->with('status' ,'uploaded');
    }

    public function delete(LandmarkPhoto $landmarkPhoto)
    {
        Storage::disk('public')->delete($landmarkPhoto);
        $landmarkPhoto->delete();
        return redirect()->back()->with('status' ,'photo deleted');
    }
}
