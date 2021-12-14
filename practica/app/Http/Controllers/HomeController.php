<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $people = Person::get();
        $country = Country::get();
        return view('welcome', compact('people', 'country'));
    }
}
