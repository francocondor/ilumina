<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Controllers\input;
use Culqi\Culqi;
use Culqi\CulqiException;
use Vinkla\Hashids\Facades\Hashids;
use Mail;

class Cursos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('Curso')->orderBy('posicion', 'asc')->get();

        $banner = DB::table('banner')
        ->where('estado','=','1')                
        ->get()
        ->last();

        return view('cursos/Home',compact('data','banner')); 
    }

    public function nosotros()
    {
        $banner = "";
        return view('cursos/Nosotros',compact('banner'));
    }


    public function DetalleCurso($id){

        $id = Hashids::decode($id)[0];        
        $banner = "";
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

        $cursos = DB::table('Curso')->get();

        
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
                                ->where('Clase.Estado','=','1')
                                ->where('Seccion_has_Clase.Seccion_idSeccion','=',$idSeccion)
                                ->get();            
                                
        }
        return view('cursos/DetalleCurso',compact('data','instructor','iUsuario','Secciones','clases','Comprado','cursos','banner'));
    }

    public function MultimediaCurso($idcurso,$idseccion,$idclase){
    

        $multimedia = explode("_",$idcurso.$idseccion.$idclase);

        $idcurso = Hashids::decode($multimedia[0]);
        $idseccion = Hashids::decode($multimedia[1]);
        $idclase = Hashids::decode($multimedia[2]);
        

        if (!Auth::check()){
            $data = DB::table('Curso')->get();

            $banner = DB::table('banner')
            ->where('estado','=','1')
            ->get()
            ->last();
    
            return redirect()->route('login');

        }



        $idUser = Auth::user();
    
        if($idcurso[0] == 5){
            $data = DB::table('Curso')->where('idCurso', $idcurso)->get();
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
                                    ->where('Clase.Estado','=','1')
                                    ->where('Seccion_has_Clase.Seccion_idSeccion','=',$idSeccion)->get();                     
            }
        }else{
            $alumno = DB::table('Alumno')->where('users_id', $idUser->id)->get();

            $curso_alumno = $alumno[0];
            
            $curso_alumno =  DB::table('Alumno_has_Curso')->where('Alumno_idAlumno', $curso_alumno->idAlumno)->where('Curso_idCurso', $idcurso)->get();    
    
            if(count($curso_alumno) > 0){
    
                $data = DB::table('Curso')->where('idCurso', $idcurso)->get();
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
                                        ->where('Clase.Estado','=','1')
                                        ->where('Seccion_has_Clase.Seccion_idSeccion','=',$idSeccion)->get();                     
                }
            }
        }



        

        return view('cursos/MultimediaCurso',compact('data','Secciones','clases','claseDB'));
    }

    public function MisCursos(){

        $idUser = Auth::user();

        if($idUser != null){
            $idUser = $idUser->id;
        }else{
            echo "<style>.my-4{height:300px;}</style>";
        }

        $banner = "";

        $data = DB::table('Curso')
                ->join('Alumno_has_Curso','Curso.idCurso','=','Curso_idCurso')
                ->join('Alumno','Alumno_idAlumno','=','Alumno.idAlumno')
                ->where('Alumno.users_id','=',$idUser)
                ->get();

                
        return view('cursos/MisCursos',compact('data','banner')); 

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
        ['Nombre' => $cursos["Nombre"], 'Contenido'=>$cursos['Contenido'], 'Descripcion' => $cursos["Descripcion"], 'Categoria_idCategoria' => "1", 'Modulo' => $cursos["Modulo"], 'Precio' => $cursos["Precio"] ,'Precio_sin_descuento' => $cursos["Precio-Final"] , 'Instructor_idInstructor' => "1"]);

        $file     = $request->uploadFile;

        print_r($file);
        
        return response()->json(['success' => 'Se registro un nuevo curso']);
    }

    public function pagoTarjeta(Request $request){
     
        $token=$request->input('token');
        $id_producto=$request->input('id_Curso');

        $contenido_curso = DB::table('Curso')->where('idCurso', $id_producto)->get();

        
        $contenido_curso = $contenido_curso[0];


        if($contenido_curso){
        
            if($token){        
                // Configurar tu API Key
                $SECRET_API_KEY = "sk_live_Jgv2ZjT56gofzyiJ";        
                // Autenticación
                $culqi = new Culqi(array('api_key' => $SECRET_API_KEY));            
        
                $idUser = Auth::user();

                try {
                $charge = $culqi->Charges->create(
                    array(
                    "amount" => $contenido_curso->Precio * 100,
                    "capture" => true,
                    "currency_code" => "USD",
                    "description" => $contenido_curso->Nombre,
                    "installments" => 0,
                    "email" => $idUser->email,
                    "first_name" => $idUser->name,
                    "metadata" => array("name"=>$idUser->name),
                    "source_id" => $token
                    )
                );

                $idAlumno = DB::table('Alumno')->where('users_id', $idUser->id)->get();

                if($idAlumno != null){
                    $idAlumno = DB::table('Alumno')->insert(['estado' => "1", 'users_id'=>$idUser->id]);
                    $idAlumno = DB::table('Alumno')->where('users_id', $idUser->id)->get();
                }
                
                

                date_default_timezone_set('America/Lima');
                setlocale(LC_ALL,"es_ES");
                $dateTimeStamp = date("d M Y H:i");            
                $date = date("d/m/Y H:i:s, ", time());

                $pedido = DB::table('Pedido')->insert(['ordenPedido' => strtotime($dateTimeStamp), 'nombreAlumno'=>$idUser->name, 'cursoPedido'=> $contenido_curso->Nombre,
                'fechaOrdenPedido' => $date, 
                'emailPedido' => $idUser->email]);

                if($id_producto == 4){
                    for($i = 1; $i < 5; $i++)
                    $tabla = DB::table('Alumno_has_Curso')->insert(['Alumno_idAlumno' => $idAlumno[0]->idAlumno, 'Curso_idCurso'=>$i]);
                }else{                
                    $tabla = DB::table('Alumno_has_Curso')->insert(['Alumno_idAlumno' => $idAlumno[0]->idAlumno, 'Curso_idCurso'=>$id_producto]);
                }
        
                $subject = "Ilumina Arquitectura - Curso de ".$contenido_curso->Nombre;
                $for = $idUser->email;                
                
                
                Mail::send('cursos/email',['ordenPedido' => strtotime($dateTimeStamp), 'nombreAlumno'=>$idUser->name, 'cursoPedido'=> $contenido_curso->Nombre,
                'fechaOrdenPedido' => $date, 
                'emailPedido' => $idUser->email], function($msj) use($subject,$for){
                    $msj->from("soporte@iluminaarquitectura.com","ilumina arquitectura");
                    $msj->subject($subject);
                    $msj->to($for);
                });
                
                } catch (Exception $e) {
                    return json_encode($e->getMessage());
                }                            
            }
            return json_encode($charge);
        }
        return json_encode("Error al cargar el curso");
    }

    public function email()
    {
        //$idUser = Auth::user();
        return view('cursos/email',compact('idUser')); 
    }

    public function contacto()
    {
        $banner = "";
        return view('cursos/Contacto',compact('banner')); 
    }

    public function email_registro()
    {
        //$idUser = Auth::user();
        return view('cursos/email_registro'); 
    }

    public function contactUSPost(Request $request) {

        $contacto = $request->all();
        print_r($contacto);
        
        $subject = "Ilumina Arquitectura - Comentario";
        $for = "iluminatectura@gmail.com";                

        Mail::send('cursos/email_contacto',['nombre' => $contacto['Nombre'], 'apellido'=>$contacto['Apellidos'], 'email'=> $contacto['Email'],
        'numero' => $contacto['numero'], 
        'asunto' => $contacto['Asunto'],
        'mensaje' => $contacto['Mensaje']]
        , function($msj) use($subject,$for){
            $msj->from("iluminatectura@gmail.com","ilumina arquitectura");
            $msj->subject($subject);
            $msj->to($for);
        });
        

        return json_encode("Respuesta");

    }

    public function contactUS()
    {
        //$idUser = Auth::user();
        $banner = "";
        return view('cursos/email_contacto',compact('banner')); 
    }

    public function portfolio()
    {
        //$idUser = Auth::user();
        $banner = "";
        return view('cursos/portfolio',compact('banner')); 
    }
    

    public function printing()
    {
        //$idUser = Auth::user();
        $banner = "";
        return view('cursos/3dprinting',compact('banner')); 
    }
    

    public function pack()
    {
        //$idUser = Auth::user();
        $banner = "";
        return view('cursos/pack-presencial',compact('banner')); 
    }
    


    public function banner()
    {
        $muestra = DB::table('banner')                
                ->get()
                ->last();

        $banner = "";

        return view('cursos/banner',compact('banner','muestra')); 
    }
    
    public function bannerMuestra(Request $request) {

        $input = $request->all();
      
        $registro = $input["registrar"];
      
        //echo is_bool($registro);

        if($registro == 1){
            $tabla = DB::table('banner')->insert(
                ['imagen' => $input["nombre"], 'link'=> $input['url'], 'estado' => "1"]);        

        }else{
            if($input["mostrar"] == 1){

                $tabla =  DB::table('banner')
                            ->update(['estado' => "1"]);            
                    
            }else{
                $tabla =  DB::table('banner')
                            ->update(['estado' => "0"]);
    
            }
        }

        return response()->json(['success'=>$tabla]);
      
    }


    public function sendAllEmail(){
        $data = DB::table('users')->get();                
        $users = $data->toArray();                    

        //print_r($users);    

        foreach ($users as $user => $s) {
            $subject = "Ilumina Arquitectura - Te invitamos a participar en los TALLERES  GRATUITOS ONLINE ENVIVO";
            
            echo $s->email;
            $for = $s->email;
    
            Mail::send('cursos/email_registro',['nombreAlumno'=>$s->name]
            , function($msj) use($subject,$for){
                $msj->from("iluminatectura@gmail.com","ilumina arquitectura");
                $msj->subject($subject);
                $msj->to($for);
            });    
        }

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

