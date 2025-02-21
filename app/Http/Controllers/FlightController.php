<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Flight\StoreRequest;
use App\Http\Requests\Admin\Flight\UpdateRequest;
use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view('pages.admin.flights.index', compact('flights'));
    }

    public function create()
    {
        $airports = Airport::all();
        return view('pages.admin.flights.create', compact('airports'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Flight::firstOrCreate($data);
        return redirect()->route('flights.index');
    }

    public function edit(Flight $flight)
    {
        $airports = Airport::all();
        return view('pages.admin.flights.edit', compact('flight', 'airports'));
    }

    public function update(Flight $flight, UpdateRequest $request)
    {
        $flight->update($request->validated());
        return redirect()->route('flights.index');
    }

    public function delete(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('flights.index');
    }

    public function search(Request $request)
    {

    }
}

