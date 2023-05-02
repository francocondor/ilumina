@extends('index')
@section('content')

<!-- Page Content -->
<div style="background: #1a9eb3;">
        <div class="container"> 
            <div class="row" style="padding: 0px;background: #fff;">
                <!--a href="#">                  
                    <div class="embed-responsive embed-responsive-16by9"-->
                    <div class="container" style="height: auto;background: #fff">

                        <img src="../images/curso_titulo_{{ $data->first()->idCurso }}.png" width="100%" />
                        
                        <?php echo $data->first()->Video; ?>
                        
                        <!--<div style="background: #333;height: 10px;"></div>
                        
                        
                        <?php if($data->first()->idCurso == 4) {?>      
                            <h1 style="font-size: 140px;font-weight: 900;text-align: left;">MEGA</h1>
                            <h1 style="font-size: 140px;font-weight: 900;text-align: center;">PACK</h1>
                            <h3 style="font-size: 30px;text-align: left;font-weight: 100;font-style: italic;"><strong>PACK 1, 2 y 3</strong></h1>
                            <h1 style="font-size:30px;text-align: left;"><strong>13 CURSOS ONLINE</strong></h1>
                        <?php }else{?>
                            <h1 style="font-size: 80px;text-align: left;">{{ $data->first()->Nombre }}</h1>
                            <h1 style="font-size:30px;text-align: left;"><strong>CURSO ONLINE</strong></h1>
                        <?php }?>-->
                        </div>
                    </div>

                    
                    <!--/div>
                </a-->
            </div>
            <div class="container" style="background: #ebebeb;">                
                <div class="col-md-offset-1 col-md-5">
                    <div class="caption">              
                        <h3 class="colorTitle" style="color: #29b172;">{{ $data->first()->Nombre }}</h3>
                        
                        <?php if($data->first()->Precio == "0.00"|| $data->first()->Precio == null || $data->first()->Precio == "0"){?>
                            
                        <?php }else{?>    
                            <!--Change 5 for 100-->                        
                            <?php if($data->first()->idCurso == 5) {
                                
                                if($Comprado==1){?>                                   
                                    <p style="color: #000;font-size: 20px;">${{ $data->first()->Precio_sin_descuento }}</p>
                                <?php  }else{?>
                                    <p style="color: #000;font-size: 20px;">${{ $data->first()->Precio }}</p>
                                <?php }?>
                            <?php }else{?>
                            <p style="color: #000;font-size: 20px;"><code style="color: #868686;text-decoration: line-through;background: none;">{{ $data->first()->Precio_sin_descuento }}</code>  ${{ $data->first()->Precio }} </p>
                            <?php }?>
                        <?php }?>
                        <?php if($Comprado==0){?>                        
                        <p style="text-align: left;"> 
                            <!--Change 5 for 100-->
                            <?php if($data->first()->idCurso == 5) {?>
                                @guest         
                                <!--a href="{{ route('login') }}" class="btn buttonComprar" role="button">TRÁMITE DE CERTIFICACIÓN</a-->
                                <a href="{{ route('login') }}" class="btn buttonComprar" role="button">COMPRAR</a>
                                @else
                                <!--a href="#" class="btn buttonComprar" data-precio="{{ $data->first()->Precio }}" data-id="{{ $data->first()->idCurso }}" data-producto="{{ $data->first()->Nombre }}" id="buyButton" role="button">TRÁMITE DE CERTIFICACIÓN</a-->
                                <a href="#" class="btn buttonComprar" data-precio="{{ $data->first()->Precio }}" data-id="{{ $data->first()->idCurso }}" data-producto="{{ $data->first()->Nombre }}" id="buyButton" role="button">COMPRAR</a>
                                @endguest                            

                            <?php }else{ ?>
                                @guest         
                                    <a href="{{ route('login') }}" class="btn buttonComprar" role="button">COMPRAR</a>
                                @else
                                    <a href="#" class="btn buttonComprar" data-precio="{{ $data->first()->Precio }}" data-id="{{ $data->first()->idCurso }}" data-producto="{{ $data->first()->Nombre }}" id="buyButton" role="button">COMPRAR</a>
                                @endguest
                            <?php }?>
                            <!--a href="#" class="btn buttonAgregar" role="button">AGREGAR</a-->
                        </p>
                        <?php }else{                            
                            if($data->first()->idCurso == 5) {?>
                                <a href="#" class="btn buttonComprar" data-precio="{{ $data->first()->Precio_sin_descuento }}" data-id="{{ $data->first()->idCurso }}" data-producto="{{ $data->first()->Nombre }}" id="buyButton" role="button">TRÁMITE DE CERTIFICACIÓN</a>
                        <?php }else{?>
                        
                        <p style="text-align: left;">
                             YA TIENES ESTE CURSO
                             <br>
                             <br>
                             <a href="#" class="btn buttonComprar" role="button">VER MÁS CURSOS</a>
                        </p>
                        <?php }}?>
                        <div class="text-center col-md-6">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    
                    <div class="caption visible-md visible-sm visible-lg">              
                        <h3 class="colorTitle" style="color: #1a9eb3;text-align: right;">INSTRUCTOR</h3>
                        <p style="color: #000;font-size: 20px;text-align: right;">CARLOS CORRALES</p>
                        <p style="text-align: right;"><b>Arquitecto y Urbanista</b> de la Pontificia Universidad Católica del Perú (PUCP), fundador de <b>Ilumina Arquitectura</b>, proyectista y desarrollador gráfico en Macar Arquitectos. 4 años de experiencia especializado en visualización arquitectónica, diseño paramétrico y Certificado Internacionalmente por Stratasys empresa líder en las nuevas tecnologías de fabricación digital / 3D printing<br>
                             <br>                             
                        </p>                                                
                    </div>

                    <div class="caption visible-xs">              
                        <h3 class="colorTitle" style="color: #1a9eb3;text-align: left;">INSTRUCTOR</h3>
                        <p style="color: #000;font-size: 20px;text-align: left;">CARLOS CORRALES</p>
                        <p style="text-align: left;"><b>Arquitecto y Urbanista</b> de la Pontificia Universidad Católica del Perú (PUCP), fundador de <b>Ilumina Arquitectura</b>, proyectista y desarrollador gráfico en Macar Arquitectos. 4 años de experiencia especializado en visualización arquitectónica, diseño paramétrico y Certificado Internacionalmente por Stratasys empresa líder en las nuevas tecnologías de fabricación digital / 3D printing<br>
                             <br>                             
                        </p>                                                
                    </div>


                </div>
                <div class="col-md-2">
                    <img class="visible-md visible-sm visible-lg" src="../images/imagen_instructor.png" width="100%" alt="">
                    <img class="visible-xs" src="../images/imagen_instructor.png" width="100%" alt="" style="padding: 0px 100px 0px 100px;text-align: center;">
                </div>
            </div>
        </div>         
    
</div>

<div class="container" style="padding-top:40px;background: #fff;">
    
        <div class="col-md-offset-1 col-sm-10 col-md-10">
            <div class="col-sm-12">
                <h4 class="colorTitle"><b>DESCRIPCIÓN</b></h4>
                <!--p class="text-justify">{{ $data->first()->Descripcion }}</p-->        
                <div style="font-family: sans-serif;">
                    {!! $data->first()->Contenido !!}
                </div>

                <?php  if($data->first()->idCurso == 4){ ?>
                <div style="font-family: sans-serif;">
                <h3><b>PLANIMETRÍA ARQUITECTÓNICA</b></h3>
                    <p>El pack se desarrollará en <b> 4 CURSOS </b> cada uno con un ejercicio. Entre ellos, la edición de una vivienda unifamiliar, el manejo de pinceles para la técnica de agua, mar u océano, la elaboración de un Plot Plant (planta de techos) y la edición de un proyecto emplazado en un terreno en pendiente (curvas de nivel). El proceso de trabajo abarca desde cómo exportar el plano base desde otros programas como Sketchup, AutoCAD e incluso la corrección de grosor de líneas desde Illustrator hasta el resultado final de composición en Photoshop.</p>
                </div>
                <?php }?>
            </div>
        </div>
        <?php foreach ($Secciones as $Seccion => $S)         
            if($S->imagen != ""){{?>        
        <div class="col-md-offset-1 col-md-11">

            <div class="col-md-5">
                <h1 style="font-size: 100px;">{{$Seccion}}</h1>
                <h3 style="color: #0e7f90;"><strong>{{ $S->titulo }}</strong></h3>
                <h4 style="color: #0e7f90;">{{ $S->subtitulo }}</h4>
            </div>
            <div class="col-md-6">
                <img class="img-fluid img-thumbnail" src="../{{ $S->imagen }}" alt=""/>
            </div>
        </div>
        <?php }
        
            }                
        if($data->first()->idCurso == 4){?>


            <div class="visible-xs container col-md-12">
                <div class="col-md-6">
                    <img class="img-fluid" width="100%" src="../images/Recurso_23.png" alt=""/>
                    <img class="img-fluid" width="100%"  src="../images/Recurso_24.png" alt=""/>
                    <img class="img-fluid" width="100%" src="../images/Recurso_25.png" alt=""/>
                    <img class="img-fluid" width="100%"  src="../images/Recurso_26.png" alt=""/>
                </div>
            </div>


            <div class="visible-md visible-sm visible-lg container col-md-12" style="padding: 40px 100px 0px 100px;">
                <div class="col-md-6">
                    <img class="img-fluid" width="100%" src="../images/Recurso_23.png" alt=""/>
                    <img class="img-fluid" width="100%" src="../images/Recurso_25.png" alt=""/>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" width="100%"  src="../images/Recurso_24.png" alt=""/>
                    <img class="img-fluid" width="100%"  src="../images/Recurso_26.png" alt=""/>
                </div>
            </div>

            <div class="container col-md-12 visible-xs" style="padding: 0px 10px;">   
                <div style="padding: 0px;" class="col-xs-6">                                                                                                  
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>1</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>CASA A</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Vivienda Unifamiliar</p>                
                </div>
                <div style="padding: 0px 10px;" class="col-xs-6">                                                                                       
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>2</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>Técnica de</b></p>
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>agua,</b></p>
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>mar, océano</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Ciudad</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Metropolitana</p>                
                </div>
                <div style="padding: 0px;" class="col-xs-6">                                                                                                  
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>3</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>Plot Plant</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Proyecto PFC</p>                
                </div>
                <div style="padding: 0px 10px;" class="col-xs-6">                                                                                             
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>4</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>Curvas Nivel</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Cuzco, T5 PUCP</p>                
                </div>                                
            </div>

            <div class="container col-md-12 visible-md visible-sm visible-lg" style="padding: 0px 100px 0px 100px;">
                <div style="padding: 0px;" class="col-md-3 col-sm-3 col-lg-3">                                                    
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>1</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>CASA A</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Vivienda Unifamiliar</p>                
                </div>
                <div style="padding: 0px;" class="col-md-3 col-sm-3 col-lg-3">                                                    
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>2</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>Técnica de</b></p>
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>agua,</b></p>
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>mar, océano</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Ciudad</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Metropolitana</p>                
                </div>
                <div style="padding: 0px;" class="col-md-3 col-sm-3 col-lg-3">                                        
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>3</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>Plot Plant</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Proyecto PFC</p>                
                </div>
                <div style="padding: 0px;" class="col-md-3 col-sm-3 col-lg-3">                                        
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>4</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>Curvas Nivel</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Cuzco, T5 PUCP</p>                
                </div>                                
            </div>

            <div class="col-md-offset-1 col-sm-offset-1 col-lg-offset-1 col-xs-offset-0 col-xs-12 col-sm-10 col-md-10 col-lg-10" style="font-family: sans-serif;">
            
                <h3><b>DIAGRAMAS EN ISOMETRIA</b></h3>
                    <p>Aprenderás los tipos de representación de un proyecto a través de isometrías de manera clara y concisa con el programa Adobe Photoshop. Además, conocerás los procedimientos para optimizar el tiempo de edición. Por último, como extra, conocerás el trabajo en simultaneo con Adobe Illustrator para entender la función de cada programa, por un lado, la edición de texturas (Photoshop) y por otro, el trabajo con vectores (Illustrator).</p>
                    <br>
                    <p>El pack se desarrollará en 4 CURSOS cada uno con el objetivo de representar un proyecto a través de diagramas de VOLUMTRIA, PROGRAMA, CIRCULACIÓN y ESTRUCTURA. El proceso de trabajo abarca desde cómo exportar las isometrías en documentos independientes desde otros programas como Sketchup, AutoCAD; trabajar con escenas, editar el grosor de líneas, y de esta manera lograr un excelente nivel de representación gráfica con texturas en Photoshop.</p>
            
            </div>
            <div class="container col-md-12 visible-xs">
                <div class="col-md-12">
                    <img class="img-fluid" style="padding: 10px 10px 10px 5px;" width="100%" src="../images/Recurso_28.png" alt=""/>
                </div>
            
                <div class="col-md-4">
                    <img class="img-fluid" style="padding: 10px 10px 10px 5px;"  width="100%" src="../images/Recurso_29.png" alt=""/>
                    <img class="img-fluid" style="padding: 10px 10px 10px 5px;" width="100%" src="../images/Recurso_30.png" alt=""/>
                </div>
                <div class="col-md-8">
                    <img class="img-fluid" style="padding: 10px 10px 10px 5px;" width="100%" src="../images/Recurso_31.png" alt=""/>                
                </div>
            </div>


            <div class="container col-md-12 visible-md visible-sm visible-lg" style="padding: 40px 100px 0px 100px;">
                <div class="col-md-12">
                    <img class="img-fluid" style="padding: 10px 10px 10px 5px;" width="100%" src="../images/Recurso_28.png" alt=""/>
                </div>
            
                <div class="col-md-4">
                    <img class="img-fluid" style="padding: 5px 5px 10px 0px;"  width="115%" src="../images/Recurso_29.png" alt=""/>
                    <img class="img-fluid" style="padding: 10px 5px 5px 0px;" width="115%" src="../images/Recurso_30.png" alt=""/>
                </div>
                <div class="col-md-8">
                    <img class="img-fluid" style="padding: 5px 5px 5px 0px;" width="100%" src="../images/Recurso_31.png" alt=""/>                
                </div>
            </div>






            <div class="container col-md-12 visible-xs" style="padding: 0px 10px;">   
                <div style="padding: 0px;" class="col-xs-6">                                                    
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>1</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>VOLUMETRÍA</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Edificio + Entorno</p>                
                </div>
                <div style="padding: 0px 10px;" class="col-xs-6">                                                    
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>2</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>PROGRAMA </b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Edificio + Entorno</p>                
                </div>
                <div style="padding: 0px;" class="col-xs-6">                                      
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>3</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>CIRCULACIÓN</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Recorridos principales,</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">recorridos secundarios,</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">nucleos de circulación</p>                
                </div>
                <div style="padding: 0px 10px;" class="col-xs-6">                                     
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>4</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>ESTRUCTURAS</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Sistema constructivo</p>                
                </div>                                
            </div>


            <div class="container col-md-12 visible-md visible-sm visible-lg" style="padding: 0px 100px;">   
                <div style="padding: 0px;" class="col-md-3 col-sm-3 col-lg-3">                                                    
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>1</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>VOLUMETRÍA</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Edificio + Entorno</p>                
                </div>
                <div style="padding: 0px;" class="col-md-3 col-sm-3 col-lg-3">                                                    
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>2</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>PROGRAMA </b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Edificio + Entorno</p>                
                </div>
                <div style="padding: 0px;" class="col-md-3 col-sm-3 col-lg-3">                                        
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>3</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>CIRCULACIÓN</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Recorridos principales,</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">recorridos secundarios,</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">nucleos de circulación</p>                
                </div>
                <div style="padding: 0px;" class="ccol-md-3 col-sm-3 col-lg-3">                                        
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>4</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>ESTRUCTURAS</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Sistema constructivo</p>                
                </div>                                
            </div>
            <div class="col-md-offset-1 col-sm-offset-1 col-lg-offset-1 col-xs-offset-0 col-xs-12 col-sm-10 col-md-10 col-lg-10" style="font-family: sans-serif;">
                <h3><b>CORTES Y DETALLES CONSTRUCTIVOS</b></h3>
                <p>El pack se desarrollará en 5 CURSOS los cuales son: un corte arquitectónico artístico, la edición de un detalle constructivo de cimentación a techo (escantillón) con la técnica de recorte inverso y máscara de capa, la elaboración de expresiones gráficas alternativas a partir del detalle constructivo, elevaciones con sombras y ambientados con el uso de pinceles y, por último, la edición de un corte fugado con la técnica de distorsión de texturas. El proceso de trabajo abarca desde cómo exportar los cortes o elevaciones en PDF (archivo base) desde otros programas como Sketchup, AutoCAD e incluso la corrección de grosor de líneas desde Illustrator hasta el resultado final de composición en Photoshop.</p>
            
            </div>
            <div class="container col-md-12 visible-md visible-sm visible-lg" style="padding: 40px 100px 0px 100px;">
                <div class="col-md-7">
                    <img class="img-fluid"  width="100%" src="../images/Recurso_32.png" alt=""/>
                    <img class="img-fluid"  width="100%" src="../images/Recurso_33.png" alt=""/>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid"  width="100%" src="../images/Recurso_34.png" alt=""/>
                    <img class="img-fluid"  width="100%" src="../images/Recurso_35.png" alt=""/>
                    <img class="img-fluid"  width="100%" src="../images/Recurso_36.png" alt=""/>
                </div>
            </div>

            <div class="container col-xs-12 visible-xs">
                <div class="col-md-12">
                    <img class="img-fluid"  width="100%" src="../images/Recurso_32.png" alt=""/>
                    <img class="img-fluid"  width="100%" src="../images/Recurso_33.png" alt=""/>
                </div>
                <div class="col-md-12">
                    <img class="img-fluid"  width="100%" src="../images/Recurso_34.png" alt=""/>
                    <img class="img-fluid"  width="100%" src="../images/Recurso_35.png" alt=""/>
                    <img class="img-fluid"  width="100%" src="../images/Recurso_36.png" alt=""/>
                </div>
            </div>


            <div class="container col-md-12 visible-xs" style="padding: 0px 10px;">   
                <div style="padding: 0px;" class="col-xs-6">                                                   
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>1</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>CORTE</b></p>
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>ARQUITECTÓNICO</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Vivienda Unifamiliar</p>                
                </div>
                <div style="padding: 0px 10px;" class="col-xs-6">    
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>2</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>DETALLE</b></p>
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>CONSTRUCTIVO</b></p>                    
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Proyecto PFC:</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Sección</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">auditoria y aulas</p>                
                </div>
                <div style="padding: 0px;" class="col-xs-6">   
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>3</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>EXPRESIÓN</b></p>
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>Gráfica</b></p>                    
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>Alternativa</b></p>                    
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Proyecto PFC:</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Sección</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">auditorio y aulas</p>                
                </div>
                <div style="padding: 0px 10px;" class="col-xs-6">    
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>4</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>ELEVACIONES</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Esherick House</p>    
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Louis Kahn</p>                
                </div>                                
                <div style="padding: 0px;" class="col-xs-offset-3 col-xs-8">                                               
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>5</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>CORTE FUGADO</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Esherick House,</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Louis Kahn</p>                
                    
                </div>                  
            </div>




            <div class="container col-md-12 col-xs-offset-1 visible-md visible-sm visible-lg">
                <div style="padding: 0px;" class="col-md-2 col-sm-2 lg-2">                                                    
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>1</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>CORTE</b></p>
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>ARQUITECTÓNICO</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Vivienda Unifamiliar</p>                
                </div>
                <div style="padding: 0px;" class="col-md-2 col-sm-2 lg-2">                                                    
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>2</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>DETALLE</b></p>
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>CONSTRUCTIVO</b></p>                    
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Proyecto PFC:</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Sección</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">auditoria y aulas</p>                
                </div>
                <div style="padding: 0px;" class="col-md-2 col-sm-2 lg-2">                                        
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>3</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>EXPRESIÓN</b></p>
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>Gráfica</b></p>                    
                    <p style="font-size: 16px;text-align: left;color: #0b7b8c;"><b>Alternativa</b></p>                    
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Proyecto PFC:</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">Sección</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;">auditorio y aulas</p>                
                </div>
                <div style="padding: 0px;" class="col-md-2 col-sm-2 lg-2">                                        
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>4</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>ELEVACIONES</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Esherick House</p>    
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Louis Kahn</p>                
                </div>                                
                <div style="padding: 0px;" class="col-md-2 col-sm-2 lg-2">                                        
                    <br/>
                    <p style="font-size: 80px;text-align: left;">&nbsp;<b>5</b></p>
                    <p style="font-size: 20px;text-align: left;color: #0b7b8c;"><b>CORTE FUGADO</b></p>
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Esherick House,</p>                
                    <p style="font-size: 14px;text-align: left;color: #0b7b8c;  ">Louis Kahn</p>                
                    
                </div>                  
            </div>
        <?php   } ?>
        <div class="col-md-offset-1 col-sm-offset-1 col-lg-offset-1 col-xs-offset-0 col-xs-12 col-sm-10 col-md-10 col-lg-10">
        <br>
            <p style="font-size: 14px;font-family: sans-serif;"> Luego de haber concluido el curso podrás aplicar las técnicas aprendidas tus propios proyectos y verás sobresalientes resultados de <b>representación gráfica</b></p>
        <br>
        </div>

        <div class="container col-md-12 col-xs-offset-1">
        <div style="border: 2px #0a7384;height: 440px;border-style: solid;padding: 20px;margin: 0px -2px 0px 0px;" class="col-md-2 col-xs-9">                
                <br/><br/>
                <img class="img-responsive center-block" style="width: 50%;" src="../images/Recurso 17.png" alt=""/>
                <br/>
                <p style="font-size: 16px;text-align: center;"><b>MODALIDAD ONLINE</b></p>
                <p style="font-size: 14px;text-align: center;">videos didácticos que los puedes visualizar a tu ritmo y en el momento que desees</p>                
            </div>
            <div style="border: 2px #0a7384;height: 440px;border-style: solid;padding: 20px;margin: 0px -2px 0px 0px;" class="col-md-2 col-xs-9">
                <br/><br/>
                <img class="img-responsive center-block" style="width: 50%;" src="../images/Recurso 18.png" alt=""/>
                <br/>
                <p style="font-size: 16px;text-align: center;"><b>CONVIERTETE EN EXPERTO</b></p>
                <p style="font-size: 14px;text-align: center;">No necesitas conocimientos previos, en cada tema iniciamos desde básico y te damos todas las herramientas para que te conviertas en un experto </p>
            </div>
            <div style="border: 2px #0a7384;height: 440px;border-style: solid;padding: 20px;margin: 0px -2px 0px 0px;;background: #1c778e;" class="col-md-2 col-xs-9">
                <br/><br/>
                <img class="img-responsive center-block" style="width: 50%;" src="../images/Recurso 19.png" alt=""/>
                <br/>
                <p style="font-size: 16px;text-align: center; color: #fff;"><b>RECURSOS GRATUITOS</b></p>
                <p style="font-size: 14px;text-align: center; color: #fff;">para la elaboración de tus próximas ediciones. Entre ellos pinceles, texturas, paginas webs y mucho más. !Ahorrarás tiempo con todos los materiales a disposicón!</p>
            </div>
            <div style="border: 2px #0a7384;height: 440px;border-style: solid;padding: 20px;margin: 0px -2px 0px 0px;" class="col-md-2 col-xs-9">
                <br/><br/>
                <img class="img-responsive center-block" style="width: 50%;" src="../images/Recurso 20.png" alt=""/>
                <br/>
                <p style="font-size: 16px;text-align: center;"><b>CERTIFICATE</b></p>
                <p style="font-size: 14px;text-align: center;">al haber concluido el curso y entregar el trabajo final donde aplicarás todas las técnicas aprendidas.!Los trabajos SOBRESALIENTES serán publicados!</p>
            </div>
            <div style="border: 2px #0a7384;height: 440px;border-style: solid;padding: 20px;" class="col-md-2 col-xs-9">
                <br/><br/>
                <img class="img-responsive center-block" style="width: 50%;" src="../images/Recurso 22.png" alt=""/>
                <br/>
                <p style="font-size: 16px;text-align: center;"><b>MEMBRESÍA PREMIUM</b></p>
                <p style="font-size: 14px;text-align: center;">para que accedas por siempre a los cursos que te has inscrito y adquirir todos los recursos de manera ¡ILIMITADA! </p>
            </div>                                        
        </div>
        <div class="container col-md-10 col-xs-offset-1">
            <div class="row col-sm-12">
                <br> <br> 
                <h4 class="colorTitle"><strong>CONTENIDO</strong></h4>
                <br> 
                <br> 
                 <div class="panel-group" id="accordion">
                <?php 
                
                foreach ($Secciones as $Seccion => $S) {?>                                 
                    <div class="panel panel-default" style="border-color: #e0e0e0;">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$Seccion+1}}">{{$S->Nombre}}</a>
                        </h4>
                    </div>
                    <div id="collapse{{$Seccion+1}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php
                                foreach ($clases[$Seccion] as $clase => $c) {?>
                                <ul>
                                    <?php 
                                    
                                    if ($data->first()->idCurso == 5){
                                     //   $Comprado = 1;
                                    }
                                    
                                    if($Comprado==0){ ?>
                                        <i class="glyphicon glyphicon-play-circle" style="padding-right: 5px;color:#EB4E4F;"></i>{{$c->Nombre}}                                                                    
                                    <?php } else{?>
                                        <a href="../detalle-curso-reproducir/{{Hashids::encode($data->first()->idCurso)}}_{{Hashids::encode($S->idSeccion)}}_{{Hashids::encode($c->idClase)}}" class="seccion" style="color:#000;"><i class="glyphicon glyphicon-play-circle" style="padding-right: 5px;color:#EB4E4F;"></i>{{$c->Nombre}}</a>                                
                                    <?php }?>
                                </ul>
                            <?php }?>                              
                            </div>
                        </div>
                    </div>
                <?php }?>

            <?php 
            if($data->first()->idCurso == 4){            
                for($a=0;$a<count($cursos) - 1;$a++){?>                  
                <div class="panel panel-default" style="border-color: #e0e0e0;">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$a}}">CURSO {{ $cursos[$a]->idCurso}} - {{ $cursos[$a]->Nombre }}</a>
                        </h4>
                    </div>

                    <?php  if($data->first()->idCurso == 4){ ?> 
                    <div id="collapse-{{$a}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>    
                            <?php if($Comprado==1){ ?>
                                <?php  
                                    $ruta = "";
                                    if( $cursos[$a]->idCurso == 1){
                                        $ruta = "_yn_yn";
                                    }else if($cursos[$a]->idCurso == 2){
                                        $ruta = "_pl_ngl";
                                    }else if($cursos[$a]->idCurso == 3){
                                        $ruta = "_ynn_ynnn";
                                    }                                
                                ?>
                                <a href="../detalle-curso-reproducir/{{Hashids::encode($cursos[$a]->idCurso)}}{{ $ruta }}" class="seccion" style="color:#000;"><i class="glyphicon glyphicon-play-circle" style="padding-right: 5px;color:#EB4E4F;"></i> IR A CURSO </a>                                
                                <?php }else{

                                    $ruta = "";
                                    if( $cursos[$a]->idCurso == 1){
                                        $ruta = "detalleCurso/yn";
                                    }else if($cursos[$a]->idCurso == 2){
                                        $ruta = "detalleCurso/or";
                                    }else if($cursos[$a]->idCurso == 3){
                                        $ruta = "detalleCurso/br";
                                    }   ?>
                                    
                                    <a href="../{{ $ruta }}" class="seccion" style="color:#000;"><i class="glyphicon glyphicon-play-circle" style="padding-right: 5px;color:#EB4E4F;"></i> IR A CURSO </a>                                
                                
                                <?php } ?>
                                
                            </ul>
                        </div>
                    </div>
                    <?php }?>
                </div>
             <?php   }
            }
            //cursos ?>
        </div> 
    </div>    
</div>

        <!-- Modal HTML -->
        <div id="mysuccess" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE876;</i>
                        </div>				
                        <h4 class="modal-title">Tu compra ha sido realizada!</h4>	
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Acabamos de enviar tu comprobante a la dirección de correo electrónico registrada.</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success btn-block" id="closemodal" data-dismiss="modal">LISTO</button>
                    </div>
                </div>
            </div>
        </div>     
        </div>      

<!-- Modal HTML -->
<div id="myError" class="modal fade">
	<div class="modal-dialog modal-error">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">cancel</i>
				</div>				
				<h4 class="modal-title">Hubo un error al procesar tu compra</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Por favor vuelve a intentar el proceso de compra.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" id="closemodal" data-dismiss="modal">LISTO</button>
			</div>
		</div>
	</div>
</div>     


  @endsection
  @push('scripts')
  <script src="https://checkout.culqi.com/js/v3"></script>
<script>
    $( "#closemodal" ).click(function() {
        window.location.reload();
    });


    // Configura tu llave pública
    Culqi.publicKey = 'pk_live_kDjh6ssBbDWH38r3';
    // Configura tu Culqi Checkout
    var precio = "";
    var producto = "";
    var idCurso = ""

    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // Usa la funcion Culqi.open() en el evento que desees
    $('#buyButton').on('click', function(e) {
        var producto = $(this).attr('data-producto');
        var precio = $(this).attr('data-precio');
        var idCurso = $(this).attr('data-id');
        
        console.log(producto);
        console.log(precio * 100);
        console.log(idCurso);

    Culqi.settings({
        title: 'Ilumina Arquitectura',
        currency: 'USD',
        description: producto,
        amount: precio * 100
    }); 


        // Abre el formulario con las opciones de Culqi.settings
        Culqi.open();
        e.preventDefault();
    });

    function culqi() {
    if (Culqi.token) { // ¡Objeto Token creado exitosamente!
      var token = Culqi.token.id;
      //alert('Se ha creado un token:' + token);
      //En esta linea de codigo debemos enviar el "Culqi.token.id"
      //hacia tu servidor con Ajax

      $("#loading-id").removeClass('hide');
        $.ajax({
            type: "post",
            //headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            dataType: "json",
            url: "pagoTarjeta",
            data: {
                "token": token,
                "id_Curso": {{$data->first()->idCurso}}
            },
            done : function() {
                console.log("done");
            },
            success :function(response) {
                $("#loading-id").addClass('hide');
                $("#mysuccess").modal();                
                console.log("succes");
                console.log(response);                
            },
            error: function(e) {
                $("#loading-id").addClass('hide');
                $("#myError").modal();  
                console.log("error");
                console.log(e.responseJSON);
                $.each(e.responseJSON, function (index, value) {
                    
                });
            }
        });
      



    } else { // ¡Hubo algún problema!
      // Mostramos JSON de objeto error en consola
      console.log(Culqi.error);
      alert(Culqi.error.user_message);
    }
};

</script>  
@endpush


