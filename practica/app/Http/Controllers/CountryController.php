<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;

class CountryController extends Controller
{
    public function store(CountryRequest $request)
    {
        $country = new Country($request->all());
        $country->save();

        return response()->json([
            'saved' => true,
            'country' => $country
        ]);
    }
}
