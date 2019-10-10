<?php

namespace App\Http\Controllers;

use App\Madera;
use Illuminate\Http\Request;

class MaderaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO: Crear la vista
        $maderas['maderas']=Madera::paginate();
        return view('Catalogo.catalogoIndex',$maderas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Hacia el formulario
        return view('Catalogo.registro'); // La del formulario
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $DatosDeMadera=request()->except('_token');
        Madera::insert($DatosDeMadera);
        return redirect('/');
       //return response()->json($DatosDeMadera);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Madera  $madera
     * @return \Illuminate\Http\Response
     */
    public function show(Madera $madera)
    {
        return view('Catalogo.catalogoShow', compact('madera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Madera  $madera
     * @return \Illuminate\Http\Response
     */
    public function edit(Madera $madera)
    {
        return view('Catalogo.registro', compact('madera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Madera  $madera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Madera $madera)
    {
        $madera->tipo = $request->tipo;
        $madera->medida = $request->medida;
        $madera->grosor = $request->grosor;
        $madera->cantidad = $request->cantidad;
        $madera->detalles = $request->detalles;
        $madera->save();

        return redirect()->route('catalogo.show', $madera->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Madera  $madera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Madera::destroy($id);
        return redirect('/catalogo');
    }
}
