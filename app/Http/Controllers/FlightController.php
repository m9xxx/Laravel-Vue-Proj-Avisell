<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return response()->json(['flights' => $flights], 200);
    }

    public function show($id)
    {
        $flight = Flight::find($id);
        if (!$flight) {
            return response()->json(['message' => 'Flight not found'], 404);
        }
        return response()->json(['flight' => $flight], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|string',
            'company' => 'required|string',
            'price' => 'required|numeric',
            'departure' => 'required|string',
            'destination' => 'required|string',
        ]);

        $flight = Flight::create([
            'id' => $request->id,
            'company' => $request->company,
            'price' => $request->price,
            'departure' => $request->departure,
            'destination' => $request->destination,
        ]);

        return response()->json(['flight' => $flight], 201);
    }

    public function update(Request $request, $id)
    {
        $flight = Flight::find($id);
        if (!$flight) {
            return response()->json(['message' => 'Flight not found'], 404);
        }

        $this->validate($request, [
            'id' => 'string',
            'company' => 'string',
            'price' => 'numeric',
            'departure' => 'string',
            'destination' => 'string',
        ]);

        $flight->update($request->all());

        return response()->json(['flight' => $flight], 200);
    }

    public function destroy($id)
    {
        $flight = Flight::find($id);
        if (!$flight) {
            return response()->json(['message' => 'Flight not found'], 404);
        }

        $flight->delete();

        return response()->json(['message' => 'Flight deleted successfully'], 200);
    }
}
