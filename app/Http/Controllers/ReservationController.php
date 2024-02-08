<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create() 
    {
        return view('guest.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'], 
            'email' => ['required', 'email'], 
            'date' => ['required', 'date', 'after_or_equal:today'],
            'time' => ['required', 'regex:/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/'],
            'table_id' => 'required',
            'notes' => 'max:255',
        ]);

        return redirect()->route('guest.index')->with('success', 'Booked table');
    }
}
