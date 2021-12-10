<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function update($id){
        $person = Person::find($id);
        return view('update', compact('person'));
    }

    public function update_data($id){
        $person = Person::find($id);
        foreach ($_POST as $key => $value) {
            if ($key != "_token"){
                $person->$key = $value;
            }
        }
        $person->save();

        $people = Person::get();
        return redirect("/");
    }
}
