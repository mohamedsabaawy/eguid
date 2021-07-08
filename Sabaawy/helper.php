<?php
namespace App\Sabaawy;

use Illuminate\Support\Facades\Auth;

function responseJson($status , $msg , $data=null){
    $response =[
        'status' => $status,
        'msg'    => $msg,
        'data'   => $data
    ];
    return $response;
};

function getCity(){
    $city = [
        'id' => '1'
    ];
    if(Auth::user())
        $city = [
            'id' =>Auth::user()->city_id,
            'name' => Auth::user()->City->name
        ];
    elseif (session()->has('city_id'))
        $city = [
            'id' => session('city_id'),
            'name' => session('city_name')
        ];
    return $city;
}
