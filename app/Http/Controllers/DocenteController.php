<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docentes;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $docentes=Docentes::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docentes=new Docentes();
        
        $docentes->rfc=$request->get('rfc');
        $docentes->nombres=$request->get('nombres');
        $docentes->apellido_p=$request->get('apellido_p');
        $docentes->apellido_m=$request->get('apellido_m');
        $docentes->sexo=$request->get('sexo');
        $docentes->telefono=$request->get('telefono');
        $docentes->correo=$request->get('correo');
        $docentes->direccion=$request->get('direccion');

        $docentes->save();
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
        return $docentes=Docentes::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $docentes=Docentes::find($request->id);

        $docentes->rfc=$request->get('rfc');
        $docentes->nombres=$request->get('nombres');
        $docentes->apellido_p=$request->get('apellido_p');
        $docentes->apellido_m=$request->get('apellido_m');
        $docentes->sexo=$request->get('sexo');
        $docentes->telefono=$request->get('telefono');
        $docentes->correo=$request->get('correo');
        $docentes->direccion=$request->get('direccion');

        $docentes->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docentes=Docentes::find($request->id);
        $docentes->delete();
    }
}
