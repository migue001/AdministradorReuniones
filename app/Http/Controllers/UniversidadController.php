<?php

namespace App\Http\Controllers;

use App\Models\universidad;
use Illuminate\Http\Request;

class UniversidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //
        $datos['universidad'] = Universidad::paginate(1);
        return view('universidades.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return view('universidades.create');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'universidad' => 'required|string|max:200',
        ];
        $mensaje = ['required' => 'El atributo es requerido'];
        $this->validate($request,$campos,$mensaje);
        $datosUniversidad = $request->except('_token');
        Universidad::insert($datosUniversidad);
       // return response()->json($datosUniversidad);
       return redirect('universidades')->with('mensaje','Empleado Agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(universidad $universidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $universidad=Universidad::findOrFail($id);

        return view('universidades.edit',compact('universidad'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'universidad' => 'required|string|max:200',
        ];
        $mensaje = ['required' => 'El atributo es requerido'];
        $this->validate($request,$campos,$mensaje);
        $datosUniversidad = request()->except(['_token','_method']);
        Universidad::where('id','=',$id)->update($datosUniversidad);

        $universidad=Universidad::findOrFail($id);
       // return view('universidades.edit',compact('universidad'));
       return redirect('empleado')->with('mensaje','Empleado Modificado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Universidad::destroy($id);
        //return redirect('universidades');
        return redirect('universidades')->with('mensaje','Empleado Borrado');

    }
}
