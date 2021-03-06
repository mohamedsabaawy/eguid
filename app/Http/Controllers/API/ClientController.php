<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Http\Resources\ClientCollection;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use Dotenv\Validator;
use Illuminate\Support\Facades\Storage;
use function App\Sabaawy\responseJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:hotels|unique:users|unique:clients',
//            'password' => 'required|confirmed',
        ]);
        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        return responseJson('1', '', new ClientResource($client));
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        $token = Auth::guard('api')->attempt($credentials);
        if (!$token) {
            return responseJson('0', 'invalid user');
        }
        $client = Auth::guard('api')->user();
        return responseJson('1', 'success', [
            'client' => new ClientResource($client),
            'token' => $token
        ]);
    }

    public function index(Request $request)
    {
        $client = Client::all();
        return responseJson(1, '', new ClientResource($request->user()));
    }

    public function update(Request $request)
    {
//        return $request->user()->id;
        $client = Client::find($request->user()->id);

        $request->validate([
            'cover' => 'required|image'
        ]);
        if ($request->cover == null) {
            $photo = $client->cover;
        } else {
            Storage::disk('public')->delete($client->cover);
            $photo = $request->cover->store('client', 'public');
}
        $client->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'cover' => $photo,
            'city_id' => $request->city_id,
        ]);
        $client->save();

        return new ClientResource($client);
    }
}
