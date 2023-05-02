<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Controllers\input;

class Clases extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('Curso')->get();

        return view('cursos/Home',compact('data')); 
    }

    

    public function DetalleCurso($id){

        
        $data = DB::table('Curso')->where('idCurso', $id)->get();

        $instructor = json_decode( json_encode($data), true);

        $idInstructor = $instructor[0]['Instructor_idInstructor'];

        $instructor = DB::table('Instructor')->where('idInstructor', $idInstructor)->get();
        
        $iUsuario = json_decode( json_encode($instructor), true);

        $idUsuario = $iUsuario[0]['users_id'];

        $iUsuario = DB::table('users')->where('id', $idUsuario)->get();

        $contenido_curso = DB::table('Curso')
                ->join('Curso_has_Seccion', 'Curso.idCurso', '=', 'Curso_has_Seccion.Curso_idCurso')
                ->join('Seccion', 'Curso_has_Seccion.Seccion_idSeccion', '=','Seccion.idSeccion' )
                ->select('Seccion.*')->where('Curso.idCurso',$id)
                ->get();
        
        $idUser = Auth::user();

        if($idUser != null){
            $idUser = $idUser->id;
        }else{
            $idUser = 0;
        }

        $Comprado = DB::table('Curso')
                ->join('Alumno_has_Curso','Curso.idCurso','=','Curso_idCurso')
                ->join('Alumno','Alumno_idAlumno','=','Alumno.idAlumno')
                ->where('Alumno.users_id','=',$idUser)
                ->where('Curso.idCurso','=',$id)
                ->get();

        $Comprado = count($Comprado);      
        
        $Secciones = $contenido_curso->toArray();                    

        foreach ($Secciones as $Seccion => $S) {
        
            $idSeccion = $S->idSeccion;
           $clases[$Seccion] = DB::table('Clase')
                                ->join('Seccion_has_Clase','Clase.idClase','=','Seccion_has_Clase.Clase_idClase')
                                ->where('Seccion_has_Clase.Seccion_idSeccion','=',$idSeccion)
                                ->get();                     
        }
        return view('cursos/DetalleCurso',compact('data','instructor','iUsuario','Secciones','clases','Comprado'));
    }

    public function MultimediaCurso($idcurso,$idseccion,$idclase){
    

        $data = DB::table('Curso')->where('idCurso', $idcurso)->get();

        //$instructor = json_decode( json_encode($data), true);

        /*$idInstructor = $instructor[0]['Instructor_idInstructor'];

        $instructor = DB::table('Instructor')->where('idInstructor', $idInstructor)->get();
        
        $iUsuario = json_decode( json_encode($instructor), true);

        $idUsuario = $iUsuario[0]['users_id'];

        $iUsuario = DB::table('users')->where('id', $idUsuario)->get();
        */
        $claseDB = DB::table('Clase')->where('idClase', $idclase)->get();

        $contenido_curso = DB::table('Curso')
                ->join('Curso_has_Seccion', 'Curso.idCurso', '=', 'Curso_has_Seccion.Curso_idCurso')
                ->join('Seccion', 'Curso_has_Seccion.Seccion_idSeccion', '=','Seccion.idSeccion' )
                ->select('Seccion.*')->where('Curso.idCurso',$idcurso)
                ->get();
        
        
        $Secciones = $contenido_curso->toArray();                    

        foreach ($Secciones as $Seccion => $S) {
            
            $idSeccion = $S->idSeccion;
            
            $clases[$Seccion] = DB::table('Clase')
                                ->join('Seccion_has_Clase','Clase.idClase','=','Seccion_has_Clase.Clase_idClase')
                                ->where('Seccion_has_Clase.Seccion_idSeccion','=',$idSeccion)->get();                     
        }

        return view('cursos/MultimediaCurso',compact('data','instructor','iUsuario','Secciones','clases','claseDB'));
    }

    public function MisCursos(){

        $idUser = Auth::user();

        if($idUser != null){
            $idUser = $idUser->id;
        }else{
            echo "<style>.my-4{height:300px;}</style>";
        }

        $data = DB::table('Curso')
                ->join('Alumno_has_Curso','Curso.idCurso','=','Curso_idCurso')
                ->join('Alumno','Alumno_idAlumno','=','Alumno.idAlumno')
                ->where('Alumno.users_id','=',$idUser)
                ->get();

        return view('cursos/MisCursos',compact('data')); 

    }

    public function moduloCurso()
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
        $cursos = $request->all();
        print_r($cursos);
        
        $tabla = DB::table('Curso')->insert(
        ['Nombre' => $cursos["Nombre"], 'Contenido'=>$cursos['Contenido'], 'Descripcion' => $cursos["Descripcion"], 'Categoria_idCategoria' => $cursos["idCategoria"],'Video' => $cursos["Video"], 'Precio' => $cursos["Precio"] ,'Precio_sin_descuento' => $cursos["Precio-Final"] , 'Instructor_idInstructor' => $cursos["idInstructor"]]);

        
        return response()->json(['success' => 'Se registro un nuevo curso']);
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
}
