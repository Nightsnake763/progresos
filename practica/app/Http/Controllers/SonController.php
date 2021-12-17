<?php

namespace App\Http\Controllers;

use App\Models\Son;
use App\Models\Person;
use Illuminate\Http\Request;
use App\Http\Requests\SonRequest;

class SonController extends Controller
{
    public function store(SonRequest $request, $id){
        $son = new Son($request->all());
        $son->person_id = $id;
        $son->save();

        return response()->json([
            'saved' => true,
            'son' => $son
        ]);
    }

    public function edit($id) {
        $son = Son::find($id);
        return view('edit', compact('son'));
    }

    public function update(SonRequest $request, Son $son){
        $son->update($request->all());

        return response()->json([
            'saved' => true
        ]);
    }

    public function delete(Son $son){
        $son->delete();

        return response()->json([
            'deleted' => true
        ]);
    }
}
