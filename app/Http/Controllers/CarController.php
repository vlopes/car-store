<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('index', compact('cars'));
    }

    public function create(Car $car)
    {
        return view('create-edit', compact('car'));
    }

    public function store(Request $request)
    {
        Car::create($request->all());

        return redirect()->route('veiculos.index');
    }

    public function edit(Car $veiculo)
    {
        return view('create-edit', ['car' => $veiculo]);
    }

    public function update(Request $request, Car $veiculo)
    {
        $veiculo->update($request->all());

        return redirect()->route('veiculos.index');
    }

    public function destroy(Car $veiculo)
    {
        $veiculo->delete();
        return redirect()->route('veiculos.index');
    }
}
