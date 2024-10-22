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
        return view('horror.index', compact('horror'));
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
    public function show(horror $horror)
    {
        //
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
