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
  		
		  <h1  style="text-align: center;font-size: 64px;">3D PRINTING</h1>
		  <div class="embed-responsive embed-responsive-16by9">
  			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gccBGrjhmi8"></iframe>
		</div>
		<br>
		<div class="container">
			<p>Innovamos nuestra oficina con impresora 3D para los <b>TALLERES de fabricación digital</b> y diseño paramétrico y ademas de brindar <b>SERVICIOS de impresión 3D </b>
			para alumnos, profesionales y empresas. Contáctanos para mayor información y cotizar un modelo que desees imprimir. Contamos con la metodología FDM</p>
  			
		</div>
		<br>
		<div class="container">
		<img src="images/3Dprinting.jpg" class="row col-xs-12 col-md-12" alt=""/>
		</div>
		<div class="container">
			<p>En la imagen 1 se muestra una impersión 3D de un corazón en Tecnología POLYJET con resina realizado en el diplomado de fabricación Digital PUCP. La imagen 2,3 y 4 impresiones 
			en tecnología FDM realizada por nuestros alumnos del taller de rhino y fabricación digital. El Alyev Center- Zaha Hadid, torre paramétrica y tramas en superficies orgánicas, respectivamente.</p>
		</div>
		<br>
		<br>
    <!--div id="animationsContainer">          
      <div class="worte">
        <span class="zeile-eins">Muy Pronto</span>
        <span class="zeile-zwei">Estamos construyendo</span>		
      </div>
    </div-->
  </div>
</div>
</div>
@endsection 
@push('scripts')

@endpush
