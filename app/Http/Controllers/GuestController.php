<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function create()
    {
        return view('guests.form');
    }

    public function index()
    {
        $guests = Guest::all();
        return view('guests.index', ['guests' => $guests]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'concert' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = $request->file('image')->store('guests', 'public');
        $validatedData['image'] = $imagePath;

        Guest::create($validatedData);

        return redirect(route('guest.index'))->with('success', 'Venue created successfully.');
    }
}
