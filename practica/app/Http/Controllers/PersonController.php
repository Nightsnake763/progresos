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
        return back();
    }

    public function delete($id){
        $person = Person::find($id);
        $person->delete();

        return back();
    }

    public function update(Request $request, $id){
        $person = Person::find($id);
        $country = Country::get();
        return view('update', compact('person', 'country'));
    }

    public function update_data(Request $request, $id){
        $person = Person::find($id);
        $person->update($request->all());
        $person->save();

        //return $request;
        return redirect("/");
    }

    public function addSon(Request $request, $id){
        $son = new Son($request->all());
        $son->person_id = $id;
        $son->save();

        return back();
    }
}
