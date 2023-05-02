@extends('index')
    @section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>
  
  <script>
  $.fn.animation = function (speed) {
	var root = $(this);
	
	root.children(".worte").children(".zeile-drei").children().each(function(index) {
		$(this)
			.delay((speed * 5 + 200) * index)
			.animate({ opacity: 1 }, speed)
			.delay(speed * 2);

			if($(this)[0] !== root.children(".worte").children(".zeile-drei").children().last()[0]) {
				$(this).animate({ opacity: 0 }, speed);
			}
	}).promise().done(function () {
		root.children('.worte').animate({left: 300}, speed, function() {
			root.children('.inhalt').animate({ opacity: 1 }, speed);
			root.children('.trennzeile').fadeIn(speed);
		});
	});
};

$('#animationsContainer').animation(1000);
  </script>
  <style type="text/css">
    .lightbox{
      z-index: 1041;
    }
    .small-img{
      width: 100px;height: 100px;
    }

#animationsContainer {
	margin: 0 auto;
	margin-top: 100px;
}
.trennzeile {
	display: none;
	position: relative;
	float: left;
	background: -webkit-linear-gradient(rgba(0,0,0,0) 0%, rgba(0,0,0,1) 50%, rgba(0,0,0,0) 100%);
	background: -o-linear-gradient(rgba(0,0,0,0) 0%, rgba(0,0,0,1) 50%, rgba(0,0,0,0) 100%);
	background: linear-gradient(rgba(0,0,0,0) 0%, rgba(0,0,0,1) 50%, rgba(0,0,0,0) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#00000000',GradientType=0 );
	width: 1px;
	height: 340px;
	top: -30px;
	left: 300px;
}
.inhalt {
	position: absolute;
	text-align: center;
	opacity: 0;
}
.worte {
	position: relative;
	font-weight: bold;
	top: 0;
}
.zeile-eins {
	position: absolute;
	top: 0;	
	font-size: 70px;
}
.zeile-zwei {
	position: absolute;
	top: 70px;
	left: 130px;
	font-size: 50px;
}
.zeile-drei {
	list-style-type: none;
}
.zeile-drei li {
	position: absolute;
	top: 100px;
	opacity: 0;
	font-size: 120px;
}
.zeile-vier {
	position: absolute;
	top: 240px;
	font-size: 30px;
}

  </style>

<div class="container-fluid" style="background: #1a9eb3;Height:auto;">    
  	<div class="container container-bg" style="background: #fff;">   
	  	<h1  style="text-align: center;font-size: 48px;">CURSOS PRESENCIALES</h1>
	  
	<p>Si eres de Lima - Perú inscríbite en nuestros <b>cursos presenciales</b> en los cuales brindamos talleres de <b>Modelado 3D, Renderizado, Post Producción, Diagramación, Metodología BIM, Diseño Paramétrico y Fabricación Digital 3D Printing.</b> </p>	
	<p>Capacítate en los softwares que complementarán tu formación académica y potenciarán tu desempeño en el ámbito laboral como arquitecto y diseñador. En el enfoque que damos para cada taller es integral e interdisciplinario, conociendo el <b>potencial de cada herramienta digital</b> y sus alcances para el desarrollo de un Proyecto.</p>
	<p>Los talleres están a cargo de docentes arquitectos egresados y colegiados de la Pontificia Universidad Católica del Perú.</p>
  		<img src="images/recurso_1.jpg" width="100%" alt="">		 
		
	<p>Contáctanos por nuestras redes sociales o vía Whatsapp para recibir toda la <b>información</b> que necesites: <b>horarios, precios, packs y promociones para estudiantes.</b> Además, te facilitaremos el plan de estudio detallado de los temas que se abordarán en cada clase. Parte de los ejercicios son las imágenes de cada afiche mostrado, asi como también <b>trabajos finales</b> de nuestros exalumnos.</p>
	<img src="images/recurso_2.jpg" width="100%" alt="">		 	
	</div>
</div>
@endsection 
@push('scripts')

@endpush
