@extends('index')
@section('content')


<div class="container" style="min-height: 720px;">    
    <h2 class="my-4 text-center text-lg-center" style="text-decoration: underline; color:#fff;">MIS CURSOS</h2>
    
    <?php 
    
    if($data->isEmpty()){
        echo '<div class="col-lg-12 col-md-12 col-xs-12"><h2 class="text-center"> Aún no tienes cursos </h2></div>';
    }else{
        
    foreach ($data as $curso => $c) {
    
        if($c->idCurso != 4){    
    ?>        
        <div class="col-lg-12 col-md-12 col-xs-12" >
            <a href="detalleCurso/{{ Hashids::encode($c->idCurso) }}" class="d-block mb-4 h-100">                
            <div class="thumbnail" style="height: 260px;">
                <div class="col-md-4">
                <img class="img-fluid img-thumbnail" src="{{ $c->Imagen }}" alt=""/>
                </div>
                <div class="caption">
                    <h4 class="text-left" style="color:#000;">{{ $c->Nombre }}</h4>
                    <hr>
                    <p class="text-left description-min" style="color:#000;">{!! $c->Descripcion !!}</p>  
                    <p class="text-left">
                        <a href="detalleCurso/{{ Hashids::encode($c->idCurso) }}" style="background: #199eb2;border-color: #199eb2;" class="btn btn-primary" role="button">VER CURSO</a>
                    </p>
                </div>
            </div>
            </a>
        </div>   
    <?php
            }
        }
    }
    ?>      
</div>



@endsection