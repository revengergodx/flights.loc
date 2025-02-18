<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Flight\StoreRequest;
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

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        return 1111;
    }

    public function search(Request $request)
    {

    }
}

