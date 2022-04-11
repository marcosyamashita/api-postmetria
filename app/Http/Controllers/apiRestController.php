<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\modelApiRest;

class apiRestController extends Controller
{

    public function index()
    {
        return modelApiRest::all();
    }

    public function show($id)
    {
        return modelApiRest::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cep = modelApiRest::findOrFail($id);
        $cep->update($request->all());
    }

    public function destroy($id)
    {
        $cep = modelApiRest::findOrFail($id);
        $cep->delete();
    }
}
