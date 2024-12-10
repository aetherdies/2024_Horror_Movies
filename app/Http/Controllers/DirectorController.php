<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $director = Director::with('horror')->get();
        return view('director.index', compact('director'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('horror.index')->with('error', 'Access denied.');
        }

        $horror= Horror::all();
        return view('director.create', compact('horror'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('director.index')->with('error', 'Access denied.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:225',
            'image' => 'nullable|image|max:2048',
            'bio' => 'nullable|string|max:100',
            'horror' => 'array',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('horror/images'), $imageName);
            $validated['image'] = $imageName;
        }

        $director = Director::create($validated);

        if ($request->has('horror')) {
            $director->horror()->attach($request->horror);
        }

        return redirect()->route('director.index')->with('success', 'Director Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Director $director)
    {
        $director->load('horror');
        return (view('director.show', compact('director')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        $horror = Horror::all();
        $directorHorror = $director->horror->pluck('id')->toArray();
        return view('director.edit', compact('director', 'horror', 'directorHorror'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Director $director)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:225',
            'image' => 'nullable|image|max:2048',
            'bio' => 'nullable|string|max:100',
            'horror' => 'array',
        ]);

        $director->update($validated);

        if ($request->has('horror')) {
            $director->horror()->sync($request->horror);
        }

        return redirect()->route('director.index')->with('success', 'Director Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director)
    {
        $director->horror()->detach();
        $director->delete();

        return redirect()->route('director.index')->with('success', 'Director Deleted Successfully!');
    }
}
