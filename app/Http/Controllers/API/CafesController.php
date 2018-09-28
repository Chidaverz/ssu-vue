<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Http\Request\StoreCafeRequest;
use Request;

class CafesController extends Controller
{
    public function getCafes()
    {
        $cafes = Cafe::all();

        return response()->json($cafes);
    }

    public function getCafe($id)
    {
        $cafe = Cafe::where('id', '=', $id)->first();

        return response()->json($cafes);
    }

    public function postNewCafe(StoreCafeRequest $request)
    {
        $cafe = new Cafe();

        $cafe->name    = $request->get('name');
        $cafe->address = $request->get('address');
        $cafe->city    = $request->get('city');
        $cafe->state   = $request->get('state');
        $cafe->zip     = $request->get('zip');

        $cafe->save();

        return response()->json($cafe, 201);
    }
}
