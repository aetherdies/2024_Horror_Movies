<?php

namespace App\Http\Controllers;

use App\Models\Horror;
use Illuminate\Http\Request;

class HorrorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horror = Horror::all();
        return view('horror_movie.index', compact('horror'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Horror_Movie $horror_Movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horror_Movie $horror_Movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horror_Movie $horror_Movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horror_Movie $horror_Movie)
    {
        //
    }
}
