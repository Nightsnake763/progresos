<?php

namespace App\Http\Controllers;

use App\Models\Son;
use App\Models\Country;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function store(Request $request){
        $person = new Person($request->all());
        $person->save();

        return response()->json([
            'saved' => true,
            'person' => $person
        ]);
    }

    public function delete( Person $person){
        $person->delete();

        return response()->json([
            'saved' => true,
        ]);
    }

    public function edit(Request $request, Person $person){
        $country = Country::get();
        return view('update', compact('person', 'country'));
    }

    public function update(Request $request, Person $person){
        $person->update($request->all());
        $person->save();

        //return $request;
       return response()->json([
            'saved' => true,
            'person' => $person
        ]);
    }

    public function addSon(Request $request, $id){
        $son = new Son($request->all());
        $son->person_id = $id;
        /*
        $son->save();
        */
        return $request;
    }
}
