<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Owner;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create(Request $request)
    {
        $owners = Owner::all();
        return view('cars.create', [
            'owners' => $owners,
            'owner_id' => $request->owner_id
        ]);
    }

    public function store(Request $request)
    {
        Car::create($request->all());
        return redirect()->route('owners.index');
    }

    public function edit(Car $car)
    {
        $owners = Owner::all();
        return view('cars.edit', compact('car', 'owners'));
    }

    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return redirect()->route('owners.index');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return back();
    }
}
