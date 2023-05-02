<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Controllers\input;

class Cpanel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('Curso')->get();

        $numeroCurso =  count($data);

        $user = DB::table('users')->get();
        $numeroUser =  count($user);

        //Alumno_has_Curso
        $alumnoCurso = DB::table('Pedido')->get();        
        $numeroAlumnoCurso =  count($alumnoCurso);

        return view('cpanel/home',compact('numeroCurso','numeroUser','numeroAlumnoCurso')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('Curso')->get();

        $instructores = DB::table('Instructor')
        //->where('idInstructor', $idInstructor)
        ->join('users','users.id','=','users_id')
        ->get();
        
        $categorias = DB::table('Categoria')
        ->where('Estado','=','1')
        ->get();
        //print_r("instructor".$instructor->name);

        return view('cpanel/curso',compact('data','instructores','categorias')); 
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
        //
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
    }




    public function consulta_usuario()
    {
        $data = DB::table('users')
        ->get();

        return view('cpanel/consulta_usuarios',compact('data')); 
    }

    public function moduloCpanelAlumno()
    {
        $data = DB::table('users')
        ->join('Alumno', 'users.id', '=', 'Alumno.users_id')
        ->get();

        return view('cpanel/consulta_alumno',compact('data')); 
    }
    

    public function moduloCpanelAlumnoxCurso()
    {

        //SELECT * FROM users 
        //INNER JOIN Alumno ON users.id = Alumno.idAlumno 
        //INNER JOIN Alumno_has_Curso ON Alumno.idAlumno = Alumno_has_Curso.Alumno_idAlumno 
        //INNER JOIN Curso ON Alumno_has_Curso.Curso_idCurso = Curso.idCurso

        $data = DB::table('Pedido')
        ->get();

        return view('cpanel/consulta_alumno_curso',compact('data')); 
    }

    public function moduloCpanelCurso()
    {
        $data = DB::table('Curso')->get();

        $instructores = DB::table('Instructor')
        //->where('idInstructor', $idInstructor)
        ->join('users','users.id','=','users_id')
        ->get();

        $categorias = DB::table('Categoria')
        ->where('Estado','=','1')
        ->get();
        //print_r("instructor".$instructor->name);

        return view('cpanel/consulta_curso',compact('data','instructores','categorias')); 
    }

    public function moduloCpanelSeccion()
    {

        // SELECT * FROM Seccion 
        //INNER JOIN Curso_has_Seccion ON Seccion.idSeccion = Curso_has_Seccion.Seccion_idSeccion 
        //INNER JOIN Curso ON Curso_has_Seccion.Curso_idCurso = Curso.idCurso

        $data = DB::table('Seccion')
        ->join('Curso_has_Seccion','Seccion.idSeccion','=','Curso_has_Seccion.Seccion_idSeccion')
        ->join('Curso','Curso_has_Seccion.Curso_idCurso','=','Curso.idCurso')
        ->select('Seccion.idSeccion','Seccion.Nombre', 'Seccion.titulo', 'Seccion.subtitulo' ,'Curso.Nombre as curso')
        ->get();


        //print_r("instructor".$instructor->name);

        return view('cpanel/consulta_seccion',compact('data')); 
    }

    public function moduloCpanelClase()
    {
        $data = DB::table('Curso')->get();

        $instructores = DB::table('Instructor')
        //->where('idInstructor', $idInstructor)
        ->join('users','users.id','=','users_id')
        ->get();

        $categorias = DB::table('Categoria')
        ->where('Estado','=','1')
        ->get();
        //print_r("instructor".$instructor->name);

        return view('cpanel/consulta_curso',compact('data','instructores','categorias')); 
    }


    public function editar_seccion($idSeccion){
        
        $data = DB::table('Seccion')
        ->join('Curso_has_Seccion','Seccion.idSeccion','=','Curso_has_Seccion.Seccion_idSeccion')
        ->join('Curso','Curso_has_Seccion.Curso_idCurso','=','Curso.idCurso')
        ->select('Seccion.idSeccion','Seccion.Nombre', 'Seccion.titulo', 'Seccion.subtitulo' ,'Curso.Nombre as curso')
        ->get();


        //print_r("instructor".$instructor->name);

        return view('cpanel/editar_seccion',compact('data')); 
    }
}
