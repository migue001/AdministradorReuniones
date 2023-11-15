<?php

namespace App\Http\Controllers;

use App\Models\instituciones;
use Illuminate\Http\Request;

class InstitucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('instituciones.create');
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
    public function show(instituciones $instituciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(instituciones $instituciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, instituciones $instituciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(instituciones $instituciones)
    {
        //
    }
}
