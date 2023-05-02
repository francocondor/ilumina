@extends('index')
    @section('content')


<div class="container-fluid" style="background: #fff;">

    <img src="images/alumnos.jpg" class="img-fluid" width="100%" alt="">

    <div class="container container-bg" style="background: #fff;">    

        <h2 class="text-center"><b>NUESTRA ESCUELA</b></h2>

        <p class="text-center" style="font-size:16px;">con más de <b>3 años</b> dando un servicio de calidad 
        en la enseñanza a jóvenes universitarios y egresados capacitandosé en técnicas de <b>representación arquitectónica,
         modelado 3D, diseño paramétrico y las nuevas tecnologías de fabricación digital con impresión 3D.</b> A cargo de docentes colegiados, titulados y egresados 
         de la facultad de Arquitectura y Urbanismo PUCP. Siempre comprometidos a dar lo mejor de nosotros 
         para tu formación académica. Se parte de nuestra comunidad <b>ILUMINA ARQUITECTURA!</b> Te esperamos</p>
        

        <img src="images/trabajos_finales.jpg" class="img-fluid" width="100%" alt="">

        <h3 class="text-center">Compartimos algunos de los trabajos de nuestros alumnos. Aplicando todos los</h3>
        <h3 class="text-center">conocimientos adquiridos en sus proyectos académicos y edificios referenciales.</h3>

        <video autoplay loop muted id="myVideo" oncanplay="this.muted=true" style="width:100%">
            <source src="RECORRIDO_FINAL_RCIA.mp4" type="video/mp4">
        </video>
    </div>

    <img src="images/clases.jpg" class="img-fluid" width="100%" alt="">
</div>




    @endsection 