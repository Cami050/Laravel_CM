<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categorias = Categoria::orderBy('nombre')->get();
        // dd($categorias);
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre'=>['required','string','max:255'],
            'precio'=>['required','numeric','min:0'],
            'cantidad'=>['required','integer','min:0'],
            'descripcion'=>['nullable','string'],
            'cantidad_id'=>['required','exists:categorias,id'],
        ]);

        Producto::create($data);
        return redirect()->route('productos.index')->with('ok','Producto creado');
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
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
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
    $producto = Producto::findOrFail($id);

    $data = $request->validate([
        'nombre' => ['required', 'string', 'max:255'],
        'precio' => ['required', 'numeric', 'min:0'],
        'cantidad' => ['required', 'integer', 'min:0'],
        'descripcion' => ['nullable', 'string'],
    ]);

    $producto->update($data);

    return redirect()->route('productos.index')->with('ok', 'Producto actualizado correctamente');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('ok','producto eliminado');
    }
}
