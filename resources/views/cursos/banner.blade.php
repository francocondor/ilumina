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

        <div class="container text-center col-md-12" >
            <div class="col-md-6" >
                <h2>Banner Actual</h2>
                <a href="{{ $muestra->link }}" class="float" target="_blank"><img width="100%" src="{{ $muestra->imagen }}" alt=""></a>
            </div>
        
            <div class="col-md-6">
                <form method="POST"  id="contact">            
                    <h2>Nuevo banner</h2>
                    <fieldset>                    
                        <input placeholder="URL de la imagen" id="nombre" name="nombre"  type="text" tabindex="1" required autofocus>
                        <input placeholder="URL de envío" id="url" name="url"  type="text" tabindex="2" required autofocus>
                    </fieldset>
                    <br/>
                    <fieldset>
                    <button type="button" id="actualizarBanner" class="btn btn-info col-md-12">Actualizar</button>                    
                    <button type="button" id="mostrarBanner" class="btn btn-success col-md-12">Mostrar</button>
                    <button type="button" id="ocultarBanner" class="btn btn-light col-md-12">Ocultar</button>
                    </fieldset>
                </form>
            </div>
        </div>        
    </div>

	

    
</div>

@endsection 
@push('scripts')
<script>
  
  $("#actualizarBanner").on("click", function() {
    var nombre = $("input[name=nombre]").val();
    var url = $("input[name=url]").val();

    var mostrar = 1;	
    var registrar = 1;	
    $.ajax({
        url: 'bannerMuestra',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST', 
        data : { nombre: nombre,
                url: url,
                    mostrar: mostrar,
                    registrar: registrar},                     
        success: function ( data ) {
            console.log( data );
            console.log("SUCESS");
        }
    });	
	console.log("Registro");		
} );


$("#ocultarBanner").on("click", function() {
    var mostrar = 0;	
    var registrar = 0
    $.ajax({
        url: 'bannerMuestra',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST', 
        data : { mostrar: mostrar,registrar: registrar },  
        success: function ( data ) {
            console.log( data );
            console.log("SUCESS");
        }
    });	
	console.log("Registro");		
} );



$("#mostrarBanner").on("click", function() {
    var mostrar = 1;	
    var registrar = 0;	
    $.ajax({
        url: 'bannerMuestra',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST', 
        data : { mostrar: mostrar,registrar: registrar },  
        success: function ( data ) {
            console.log( data );
            console.log("SUCESS");
        }
    });	
	console.log("Registro");		
} );

</script>  
@endpush