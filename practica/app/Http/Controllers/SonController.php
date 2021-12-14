<?php

namespace App\Http\Controllers;

use App\Models\Son;
use Illuminate\Http\Request;

class SonController extends Controller
{
    public function edit($id){
        $son = Son::find($id);
        return view('updateSon', compact('son'));
    }

    public function update(Request $request, $id){
        $son = Son::find($id);
        $son->update($request->all());

        return redirect('/');
    }

    public function delete($id){
        $son = Son::find($id);
        $son->delete();

        return back();
    }
}
