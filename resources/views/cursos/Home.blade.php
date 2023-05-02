@extends('index')
    @section('content')

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/slides/1.jpg" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/slides/2.jpg" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/slides/3.jpg" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

<div class="container-bg" style="background: #1a9eb3;min-height: auto;">    
    <div class="container" style="background: #1a9eb3;">
        <div>
            <h2 class="my-4 text-center text-lg-center" style="padding: 25px 0; color: #fff;
    ">CURSOS ONLINE</h2>
        </div>
        <?php
    
        foreach ($data as $cursos => $curso) {
        ?>        
            <div class="col-lg-offset-0 col-lg-3 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-4 col-xs-offset-2 col-xs-8">
                <?php if($curso->Estado == 1){?>
                    <a href="detalleCurso/{{ Hashids::encode($curso->idCurso) }}" class="d-block mb-4 h-100">                
                <?php } ?>
                
                <div class="thumbnail" style=<?php if($curso->tipoCurso == 1){ echo "'  background-color:#656363; min-height: 410px;'"; }else{ echo "'background-color:#e7e6e6; min-height: 410px;'";}  ?> >
                <?php if($curso->Estado == 1){?>
                <a href="detalleCurso/{{ Hashids::encode($curso->idCurso) }}" class="d-block mb-4 h-100">
                <?php } ?>
                    <img class="img-fluid img-thumbnail" src="{{$curso->Imagen}}" alt="">
                    <?php if($curso->Estado == 1){?>
                    </a>
                    <?php } ?>
                    <div class="caption">
                    <?php if($curso->Estado == 1){?>
                    <a href="detalleCurso/{{ Hashids::encode($curso->idCurso) }}" class="d-block mb-4 h-100">
                    <?php } ?>
                        <div class="row col-md-10 col-xs-10"><h4 class="text-left titulo-curso"<?php if($curso->idCurso == 4){ echo "style='font-size: 26px;color:#e7e6e6;'"; } if($curso->posicion == 5 || $curso->posicion == 6){ echo "style='color:#e7e6e6;'";  } ?>>{{ $curso->Nombre}}</h4></div>
                            <div class="col-md-2 col-xs-2" style="padding: 10px 30px;"><p><code style="padding: 4px 8px;font-size: 30px;color: <?php  if($curso->posicion == 5){ echo "#666666";  }else{ echo "#ededed"; }?>;background-color: <?php  if($curso->posicion == 1){ echo "#feca1d";  }else if($curso->posicion == 6 || $curso->posicion == 5){ echo "#e7e6e6"; }else{ echo "#058ba0"; } ?> ;border-radius: 4px;"><?php if($curso->numerocurso != 0){  echo $curso->numerocurso;  }else{

                                if($curso->posicion == 1){?>
                                    <img src="images/icono.png" alt="" style="height: 15px;">
                                <?php }else if($curso->posicion == 6){?>
                                    <img src="images/icono_2.png" alt="" style="height: 15px;">
                                <?php }

                            }?></code></p></div>
                                <div class="row">                                    
                                    <?php if($curso->CantidadPaquetes > 0) {?>      
                                        <div class="col-md-12 col-xs-10" style="margin: -13px 0px;"><p style="<?php if($curso->posicion == 5 || $curso->posicion == 6){ echo "color: #e7e6e6;";  }else{ echo "color: #000;";} ?> ;font-size: 20px;"><code style="background: none;<?php if($curso->posicion == 5 || $curso->posicion == 6){ echo "color: #e7e6e6;";  }else{ echo "color: #000;";} ?> font-size: 24px;">
                                            {{$curso->CantidadPaquetes}}</code> packs</p>
                                        </div>                      
                                    <?php } ?>
                                    <div class="col-md-12 col-xs-10"><p style="<?php if($curso->posicion == 5 || $curso->posicion == 6){ echo "color: #e7e6e6;";  }else{ echo "color: #000;";} ?> font-size: 20px;"><code style="<?php if($curso->posicion == 5 || $curso->posicion == 6){ echo "color: #e7e6e6;";  }else{ echo "color: #000;";} ?>   background: none;font-size: 24px;">{{$curso->Modulo}}</code><?php if($curso->posicion == 1 || $curso->posicion == 6){ echo ""; }else{ echo "cursos";} ?> </p>
                                    </div>                                                                                              
                                    <div class="col-md-12 text-right"><p style="<?php if($curso->posicion == 5 || $curso->posicion == 6){ echo "color: #e7e6e6;";  }else{ echo "color: #000;";} ?> font-size: 20px;"><code style="color: #868686;background: none; <?php if($curso->posicion == 2 || $curso->posicion == 3 || $curso->posicion == 4 || $curso->posicion == 5  ){ echo "text-decoration: line-through;"; }?> "> 
                                    <?php if($curso->posicion != 1){ 
                                        echo $curso->Precio_sin_descuento; }?>
                                        </code> 
                                    <?php
                                    if ($curso->posicion == 1){
                                        //echo "US$ 0.00";
                                        echo "US$".$curso->Precio; 
                                    }else if($curso->posicion == 2 || $curso->posicion == 3 || $curso->posicion == 4 || $curso->posicion == 5 || $curso->posicion == 6 ){
                                         echo "US$".$curso->Precio; 
                                         }?>
                                    </p>                            
                                    </div>
                                    <img class="img-fluid img-thumbnail col-md-offset-4 col-md-8 col-xs-10 col-sm-8" src="images/estrellas.png" alt="" style="background: none;border: none;">
                                </div>                                
                                <!--p class="text-left description-min">Luego de haber concluido el curso podrás combinar todas las técnicas o métodos para tus propios proyectos y verás buenos resultados de representación gráfica.</p-->  
                                <?php if($curso->Estado == 1){?>
                                </a>
                                <?php } ?>
                                <!--p class="text-right"><a href="detalleCurso/1" class="d-block mb-4 h-100">
                                                                        </a><a href="detalleCurso/1" class="btn btn-ilumina" role="button">Consultar</a>
                                                                </p-->
                    </div>
                </div>
                <?php if($curso->Estado == 1){?>
                </a>
                <?php } ?>
            </div>   
        <?php
            }
        ?>   
       
        
    </div>
    </div>

<div class="container-bg" style="background: #fff;">    
    <video autoplay loop muted id="myVideo" oncanplay="this.muted=true" style="width:100%">
        <source src="promo.mp4" type="video/mp4">
    </video>
</div>

<div class="container-bg" style="background: #fff;">    
    <div class="container" style="background: #fff;">
        <div class="row">
            <h2 class="my-4 text-center text-lg-center" style="padding: 50px 0; color: #3e3c3c;">Nuestros Números</h2>
  
        </div>                                
    </div>
</div>
<div class="container-bg" style="background:#fff ;">    
    <div class="container" style="background: #fff;">
        <div class="row">
            <div class="col-xs-offset-3 col-md-2  col-md-offset-1 col-xs-5">
            <img class="img-fluid img-thumbnail col-md-offset-2 col-md-10" src="images/Recurso_12.png" alt="" style="min-height:120px; background: none;border: none;">
                <h1 style="font-size: 70px;text-align: center;">+600</h1>
                <p style="font-size: 20px;text-align: center;">ESTUDIANTES</p>
                <p style="font-size: 16px;text-align: center;">capacitados con los mejores programas actualizados en el rubro de arquitectura</p>
            </div>
            <div class="col-md-2 col-md-offset-0 col-xs-offset-3 col-xs-5">
            <img class="img-fluid img-thumbnail col-md-offset-2 col-md-10" src="images/Recurso_13.png" alt="" style="min-height: 120px;background: none;border: none;">
                <h1 style="font-size: 70px;text-align: center;">7</h1>
                <p style="font-size: 20px;text-align: center;">CURSOS PRESENCIALES</p>
                <p style="font-size: 16px;text-align: center;">enfocado en la visualización arquitectónica digital en nuestras 2 sedes de Lima - Perú</p>
            </div>
            <div class="col-md-2 col-md-offset-0 col-xs-offset-3 col-xs-5">
            <img class="img-fluid img-thumbnail col-md-offset-2 col-md-10" src="images/Recurso_14.png" alt="" style="min-height: 120px;background: none;border: none;">
                <h1 style="font-size: 70px;text-align: center;">3</h1>
                <p style="font-size: 20px;text-align: center;">CURSOS ONLINE</p>
                <p style="font-size: 16px;text-align: center;">dirigido a estudiantes y profesionales para la representación de proyectos con la técnica de postprodución</p>
            </div>
            <div class="col-md-2 col-md-offset-0 col-xs-offset-3 col-xs-5">
            <img class="img-fluid img-thumbnail col-md-offset-2 col-md-10" src="images/Recurso_15.png" alt="" style="min-height: 120px;background: none;border: none;">
                <h1 style="font-size: 70px;text-align: center;">3</h1>
                <p style="font-size: 20px;text-align: center;">AÑOS</p>
                <p style="font-size: 16px;text-align: center;">de experencia capacitando a estudiantes con el mejor servicio y docencia</p>
            </div>
            <div class="col-md-2 col-md-offset-0 col-xs-offset-3 col-xs-5">
            <img class="img-fluid img-thumbnail col-md-offset-2 col-md-10" src="images/Recurso_16.png" alt="" style="min-height: 120px;background: none;border: none;">
                <h1 style="font-size: 70px;text-align: center;">1</h1>
                <p style="font-size: 20px;text-align: center;">WORKSHOP FABRICACIÓN DIGITAL</p>
                <p style="font-size: 16px;text-align: center;">Líderes en aplicación y enseñanza de las nuevas tecnologías de impresión 3D en arquitectura </p>
            </div>
        </div>                                
    </div>
    <img src="images/Recurso_5.png" width="100%">
    <h1 style="height: 98px;text-align: center;margin: -80px 0px;color: #fff;font-size:32px;">CAPACITATE CON NOSOTROS</h1>
</div>



    @endsection 