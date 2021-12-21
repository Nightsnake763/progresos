<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Person;
use App\Http\Requests\PersonRequest;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function store(PersonRequest $request){
        $person = new Person($request->all());
        $person->save();

        return response()->json([
            'saved' => true,
            'person' => $person
        ]);
    }

    public function delete(Person $person){
        $person->sons()->delete();
        $person->delete(); //En mi mente esto iba a elimiar tanto a la persona como a sus hijos pero no funciono

        return response()->json([
            'deleted' => true,
        ]);
    }

    public function edit(Request $request, Person $person){
        $country = Country::get();
        return view('update', compact('person', 'country'));
    }

    public function update(PersonRequest $request, Person $person){
        $person->update($request->all());
        $person->save();

        return response()->json([
            'saved' => true,
            'person' => $person
        ]);
    }
}
