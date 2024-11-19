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
        $horrors = Horror::all();
        return view('horror.index', compact('horrors'));
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
    public function store(Request $request, Horror $horror)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        $horror->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
            'horror_id' => $horror->id
        ]);

        return redirect()->route('horror.show', $horror)->with('success', 'Review Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(horror $horror)
    {
        $horror->load('reviews.user');
        return view('horror.show', compact('horror'));
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
