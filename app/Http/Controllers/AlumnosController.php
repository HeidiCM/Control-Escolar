<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return $alumn=Alumnos::all();
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
        $alumn=new Alumnos();
        
        $alumn->matricula=$request->get('matricula');
        $alumn->nombres=$request->get('nombres');
        $alumn->apellido_p=$request->get('apellido_p');
        $alumn->apellido_m=$request->get('apellido_m');
        $alumn->semestre=$request->get('semestre');
        $alumn->grupo=$request->get('grupo');
        $alumn->estado=$request->get('estado');

        $alumn->save();
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
        return $alumn=Alumnos::find($id);
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
        $alumn=Alumnos::find($request->$id);
        
        $alumn->matricula=$request->get('matricula');
        $alumn->nombres=$request->get('nombres');
        $alumn->apellido_p=$request->get('apellido_p');
        $alumn->apellido_m=$request->get('apellido_m');
        $alumn->semestre=$request->get('semestre');
        $alumn->grupo=$request->get('grupo');
        $alumn->estado=$request->get('estado');

        $alumn->update();
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
        $alumn=Alumnos::find($id);

        $alumn->delete();
    }
}