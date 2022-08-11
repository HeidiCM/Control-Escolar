<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materias;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $mate=Materias::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mate=new Materias();
        
        $mate->id_materia=$request->get('id_materia');
        $mate->nombre=$request->get('nombre');
        $mate->grupos=$request->get('grupos');
        $mate->semestre=$request->get('semestre');
        $mate->formacion=$request->get('formacion');
        $mate->id_docente=$request->get('id_docente');

        $mate->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_materia)
    {
        //
        return $mate=Materias::find($id);
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
        //
        $mate=Materias::find($request->$id);

        $mate->id_materia=$request->get('id_materia');
        $mate->nombre=$request->get('nombre');
        $mate->grupos=$request->get('grupos');
        $mate->semestre=$request->get('semestre');
        $mate->formacion=$request->get('formacion');
        $mate->id_docente=$request->get('id_docente');

        $mate->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mate=Materias::find($id);

        $mate->delete();
    }
}

