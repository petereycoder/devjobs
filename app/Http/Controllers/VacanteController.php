<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Vacante::class)){
            return view('vacantes.index');
        }
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Gate::allows('create', Vacante::class)){
            return view('vacantes.create');
        }
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
    public function show(Vacante $vacante)
    {
        //
        return view('vacantes.show', [
            'vacante' => $vacante
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacante $vacante)
    {
        //$this->authorize('update', $vacante);
        if(Gate::allows('update', $vacante)){
            return view('vacantes.edit', [
                'vacante' => $vacante
            ]);
        }else{
            return redirect()->route('vacantes.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
