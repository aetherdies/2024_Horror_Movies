<?php

namespace App\Http\Controllers;

use App\Models\Horror;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HorrorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horror = Horror::all();
        return view('horror.index', compact('horror'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('horror.index')->with('error', 'Access denied.');
        }
        return view('horror.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'year' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jfif,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/horror'), $imageName);
        }

        Horror::create([
            'title' => $request->title,
            'description' => $request->description,
            'year' => $request->year,
            'image' => $imageName,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return to_route('horror.index')->with('success', 'Horror Movie Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(horror $horror)
    {
        return view('horror.show')->with('horror', $horror);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(horror $horror)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, horror $horror)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(horror $horror)
    {
        //
    }
}
