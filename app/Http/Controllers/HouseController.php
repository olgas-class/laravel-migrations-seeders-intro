<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller {
    public function index() {
        $houses = House::all();
        return view('houses.index', compact('houses'));
    }

    public function show($id) {
        $house = House::findOrFail($id);
        return view('houses.show', compact('house'));
    }
}
