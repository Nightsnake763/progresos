<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Person;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $people = Person::get();
        $country = Country::get();
        return view('welcome', compact('people', 'country'));
    }
}
