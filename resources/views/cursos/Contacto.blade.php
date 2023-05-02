@extends('index')
    @section('content')
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}



#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}

</style>

<div class="container-fluid" style="background: #fff;">    
    <div class="container container-bg" style="background: #fff;">    

        <h2 class="text-center"><b>CAPACÍTATE CON NOSOTROS</b></h2>
		<br>
		<h4  class="text-center"><b>SEDE PRINCIPAL - ESCUELA</b></h4>
        <h5 class="text-center">PEDRO RUIZ 912, piso 2 Breña</h5>
		<h5 class="text-center"> altura paradero Bertelo con Tingo María</h5>
		<h5 class="text-center"> a 5 min de Plaza la Bandera - a 10min de PUCP</h5>        
		<br>
		<h4  class="text-center"><b>OFICINA PROYECTOS</b></h4>
        <h5 class="text-center">Alberto Barajas 375, SAN BORJA</h5>		
		<h5 class="text-center"> a 10 min de la estación San Borja Sur</h5>

		<br>
		<h5 class="text-center">iluminatectura@gmail.com</h5>		
		<h5 class="text-center">Whatsapp +51 950 087 170</h5>

        <div class="container text-center col-md-offset-3 col-md-6" >
        <form method="POST"  id="contact">            
            
            <fieldset>
			
            <input placeholder="Nombre" id="Nombre" name="Nombre"  type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
            <input placeholder="Apellidos" id="Apellidos" name="Apellidos" type="text" tabindex="2" required autofocus>
            </fieldset>
            <fieldset>
            <input placeholder="Email" id="Email" name="Email" type="email" tabindex="3" required>
            </fieldset>
            <fieldset>
            <input placeholder="Número" id="numero" name="numero" type="tel" tabindex="4" required>
            </fieldset>
            <fieldset>
            <input placeholder="Centro de Estudios" id="Estudios" name="Estudios" type="text" tabindex="5" required autofocus>
            </fieldset>
            <fieldset>
            <input placeholder="Asunto" id="Asunto" name="Asunto" type="text" tabindex="6" required autofocus>
            </fieldset>
            <fieldset>
            <textarea placeholder="Mensaje" id="Mensaje" name="Mensaje" tabindex="7" required></textarea>
            </fieldset>
            <fieldset>
            <!--button name="submit" type="submit" id="contact-submit" style="background:#1a9eb3;" data-submit="...Sending">Enviar</button-->
			<button type="button" id="enviarCorreo" class="btn btn-info pull-right">Enviar</button>
            </fieldset>
        </form>
        </div>
        
        <div class="col-md-6" style="background-color:#1a9eb3;padding: 10px 10px 8px 10px;">
            <h4  class="text-center" style="color: #fff;">SEDE PRINCIPAL-ESCUELA</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.6906321623787!2d-77.05863538470749!3d-12.064794045522108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8e002f51edb%3A0x76ee1e468990d92c!2sPedro%20Ruiz%20912%2C%20Bre%C3%B1a%2015083!5e0!3m2!1ses-419!2spe!4v1578861969051!5m2!1ses-419!2spe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>            
        </div>
        <div class="col-md-6" style="background-color:#1a9eb3;padding: 10px 10px 8px 10px;">
            <h4  class="text-center" style="color: #fff;">OFICINA DE PROYECTOS</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.121033145443!2d-77.00973878470701!3d-12.103865846261991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7dfa83fe2b1%3A0x691410eca53a7d14!2sAlberto%20Barajas%20375%2C%20Cercado%20de%20Lima%2015036!5e0!3m2!1ses-419!2spe!4v1578862087581!5m2!1ses-419!2spe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>

	

    
</div>

@endsection 
@push('scripts')
<script>
  
  $("#enviarCorreo").on("click", function() {
            
	var form = $('#contact')[0];
	console.log($('#contact')[0]);
	console.log($('#contact'));
	
	var formData = new FormData(form);
	console.log(form);
	console.log(formData);

	
	var empty = true;
	
	if( $('#Nombre').val().length === 0  || $('#Mensaje').val().length === 0 || $('#Apellidos').val().length === 0 || 
	$('#numero').val().length === 0 || $('#Estudios').val().length === 0 ||  $('#Asunto').val().length === 0 ){
        alert('Completar los campos');
		empty = false;
    }

	
	if(empty){
		$.ajax({
			url: 'contact_send',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			type: 'POST', 
			data : formData, 
			cache : false, 
			processData: false, 
			contentType: false,
			success: function ( data ) {
				console.log( data );
				console.log( formData );
				console.log("SUCESS");
			}
		});
	}
	console.log("Registro");		
} );
</script>  
@endpush