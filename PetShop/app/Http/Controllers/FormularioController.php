<?php

namespace App\Http\Controllers;
use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
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
        $form = new Formulario();
        $form->nombre = $request->input('nombre');
        $form->apellido = $request->input('apellido');
        $form->edad = $request->input('edad');
        $form->email = $request->input('email');
        $form->numero = $request->input('numero');
        $form->nombre_mascota = $request->input('nombre_mascota');
        $form->texto = $request->input('texto');
        $form->save();
        return response()->json($form, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
