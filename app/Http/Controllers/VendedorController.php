<?php

namespace App\Http\Controllers;
use App\Models\Vendedor;

use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('vendedores.index', compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $vendedor= new \App\Models\Vendedor;
    $vendedor->nombre=$request['nombre'];
    $vendedor->cargo=$request['cargo'];
    $vendedor->telefono=$request['telefono'];
    $vendedor->save();

    //  dd($request);
    
    // $vendedorcreate($data); viejita
    
    // dd($vendedor);
    return redirect()->route('vendedores.index')->with('success', 'Vendedor creado correctamente.');
    
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $vendedor = Vendedor::findOrFail($id); 
        $vendedor = \App\Models\Vendedor::findOrFail($id);
        return view('vendedores.edit', compact('vendedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        // $vendedor = Vendedor::findOrFail($id);
        $vendedor = \App\Models\Vendedor::findOrFail($id);
        // dd($vendedor);

        $data = $request->validate([
            'nombre'=> ['required', 'string', 'max:255'],
            'cargo' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
        ]);

        $vendedor->update($data);

        return redirect()->route('vendedores.index')->with('ok', 'Vendedor actualizado correctamente');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendedorDelete = \App\Models\Vendedor::findOrFail($id);
        $vendedorDelete->delete();
        return redirect()->route('vendedores.index')->with('ok', 'Vendedor eliminado');

    }
}
