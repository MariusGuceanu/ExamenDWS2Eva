<?php

namespace App\Http\Controllers;

use App\Models\Manzanas;
use Illuminate\Http\Request;

class ManzanasController extends Controller
{
    //
    public function index()
    {
        //
        $manzanas = Manzanas::all();
        return view('manzanas', compact('manzanas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('manzanas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $manzanas = new manzanas();
        $manzanas->tipoManzana = $request->input('tipoManzana');
        $manzanas->precioKilo = $request->input('precioKilo');
        $manzanas->save();

        return redirect()->route('manzanas')->with('succers', 'Manzana introducida');
    }

    /**
     * Display the specified resource.
     */
    public function show(manzanas $manzanas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(manzanas $manzanas)
    {
        //
        return view('edit', compact('manzanas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, manzanas $manzanas)
    {
        //
        $manzanas->id = $request->input('id');
        $manzanas->tipoManzana = $request->input('tipoManzana');
        $manzanas->precioKilo = $request->input('precioKilo');
        $manzanas->save();

        return redirect()->route('manzanas')->with('succes', 'Se ha modificado la manzana');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $manzanas = manzanas::findOrFail($id);
        $manzanas->delete();

        return redirect()->route('manzanas')->with('succes', 'Manzana eliminada');
    }
}
