<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

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

}
