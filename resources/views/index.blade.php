    <!DOCTYPE html>
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        
        <title>Ilumina-Arquitectura</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Josefin+Sans">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        
        <style>
          nav {
            font-family: 'Josefin Sans', serif;
            font-size: 16px;
            z-index: 1;
            width: 100%;
            border: transparent;
            position: relative;
            background: rgba(255, 255, 255, 0.5);
          }
          body {
            font-family: 'Josefin Sans', serif;
            background:#e4e4e4a1;
          }

            a:link{ 
            text-decoration:none; 
            } 
        
            .titulo-curso{
                color: #1b9eb3;
            }
          
            .description-min{
                color: #000;            
            }

            .description-min{
                text-decoration: none;
            }

            .titulo-curso:hover{
                color: #1b9eb3;
                text-decoration: none;
            }



        </style>
        <style>
            .social-media-header{
                height:50px;
                background:#EB4E4F;            
            }
            .header{
                height: 100px;
                background: #ffffff;
            }
            .social-media-footer{
                height:100px;
                background:#EB4E4F;            
            }
            .colorTitle{
                 
                color: #1a9eb3;  
            }
            .colorInstructor{
                color: #EB4E4F;  
            }
            h5:hover{
                color: #19ae4b;
            }
            .colorPrice{
                color: #ed5252;
                font-size: 18px;
            }

            hr { 
                display: block;
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                margin-left: auto;
                margin-right: auto;
                border-style: inset;
                border-width: 1px;
            }
            .buttonComprar{
                color: #fffcfc;
                background-color: #1a9eb3;
                border-color: #1a9eb3;
            }
            .buttonComprar:hover{
                color: #1a9eb3;
                background-color: #fff;
                border-color: #1a9eb3;
            }
            .buttonAgregar:hover{
                color: #fffcfc;
                background-color: #1a9eb3;
                border-color: #1a9eb3;
            }
            .buttonAgregar{
                color: #ed5252;
                background-color: #fff;
                border-color: #1a9eb3;
            }

            .descripcion-card{
            font-size: 10px;
            }
            .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            }
            .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
            }

            .img-course{
            height: 500px;
            width: auto;
            }

            .rating > span:hover:before,
            .rating > span:hover ~ span:before {
            content: "\2605";
            position: absolute;
            }
            .curso-contenido:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            footer{ 
            
            bottom:0; 
            width:100%; 
            height:150px; 
            background: #ed5252;
            }
             .navbar-nav>li{
                display: inline;
                padding-left: 20px;
                padding-right: 15px;
                color: #000;
            }
            .description-min{
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 4;
                -webkit-box-orient: vertical;
            }

            .btn-ilumina{
                color: #ec4e4f;border-color: #1a9eb3;
            }
            .btn-ilumina:hover{
                color: #fff;border-color: #1a9eb3;
                background: #1a9eb3;
            }
            
            .modal-confirm {		
                color: #636363;
                width: 325px;
            }
            .modal-confirm .modal-content {
                padding: 20px;
                border-radius: 5px;
                border: none;
            }
            .modal-confirm .modal-header {
                border-bottom: none;   
                position: relative;
            }
            .modal-confirm h4 {
                text-align: center;
                font-size: 26px;
                margin: 30px 0 -15px;
            }
            .modal-confirm .form-control, .modal-confirm .btn {
                min-height: 40px;
                border-radius: 3px; 
            }
            .modal-confirm .close {
                position: absolute;
                top: -5px;
                right: -5px;
            }	
            .modal-confirm .modal-footer {
                border: none;
                text-align: center;
                border-radius: 5px;
                font-size: 13px;
            }	
            .modal-confirm .icon-box {
                color: #fff;		
                position: absolute;
                margin: 0 auto;
                left: 0;
                right: 0;
                top: -70px;
                width: 95px;
                height: 95px;
                border-radius: 50%;
                z-index: 9;
                background: #82ce34;
                padding: 15px;
                text-align: center;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            }
            .modal-confirm .icon-box i {
                font-size: 58px;
                position: relative;
                top: 3px;
            }
            .modal-confirm.modal-dialog {
                margin-top: 80px;
            }
            .modal-confirm .btn {
                color: #fff;
                border-radius: 4px;
                background: #82ce34;
                text-decoration: none;
                transition: all 0.4s;
                line-height: normal;
                border: none;
            }
            .modal-confirm .btn:hover, .modal-confirm .btn:focus {
                background: #6fb32b;
                outline: none;
            }
            .trigger-btn {
                display: inline-block;
                margin: 100px auto;
            }




            .modal-error {		
                color: #636363;
                width: 325px;
            }
            .modal-error .modal-content {
                padding: 20px;
                border-radius: 5px;
                border: none;
            }
            .modal-error .modal-header {
                border-bottom: none;   
                position: relative;
            }
            .modal-error h4 {
                text-align: center;
                font-size: 26px;
                margin: 30px 0 -15px;
            }
            .modal-error .form-control, .modal-error .btn {
                min-height: 40px;
                border-radius: 3px; 
            }
            .modal-error .close {
                position: absolute;
                top: -5px;
                right: -5px;
            }	
            .modal-error .modal-footer {
                border: none;
                text-align: center;
                border-radius: 5px;
                font-size: 13px;
            }	
            .modal-error .icon-box {
                color: #fff;		
                position: absolute;
                margin: 0 auto;
                left: 0;
                right: 0;
                top: -70px;
                width: 95px;
                height: 95px;
                border-radius: 50%;
                z-index: 9;
                background: #F44336;
                padding: 15px;
                text-align: center;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            }
            .modal-error .icon-box i {
                font-size: 58px;
                position: relative;
                top: 3px;
            }
            .modal-error.modal-dialog {
                margin-top: 80px;
            }
            .modal-error .btn {
                color: #fff;
                border-radius: 4px;
                background: #F44336;
                text-decoration: none;
                transition: all 0.4s;
                line-height: normal;
                border: none;
            }
            .modal-error .btn:hover, .modal-error .btn:focus {
                background: #ff5722;
                outline: none;
            }
            .trigger-btn {
                display: inline-block;
                margin: 100px auto;
            }

/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 150ms infinite linear;
  -moz-animation: spinner 150ms infinite linear;
  -ms-animation: spinner 150ms infinite linear;
  -o-animation: spinner 150ms infinite linear;
  animation: spinner 150ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
/*min-width: 800px;*/
width: 50%;
min-height: 150px;
margin: 5px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
@media only screen and (max-width: 800px) {
  .cnt223{
    width: 80%;
    min-height: 150px;
    margin: 15px auto;
    background: #f3f3f3;
    position: relative;
    z-index: 103;
    padding: 15px 35px;
    border-radius: 5px;
    box-shadow: 0 2px 5px #000;
  }
}


@media only screen and (max-width: 600px) {
  .cnt223{
    width: 100%;
    min-height: 150px;
    margin: 35px auto;
    background: #f3f3f3;
    position: relative;
    z-index: 103;
    padding: 15px 35px;
    border-radius: 5px;
    box-shadow: 0 2px 5px #000;
  }
}

.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
    </head>
    <?php 
    
    $banner = isset($banner) ? $banner : '';
    if($banner != ""){ ?>
    <div class='popup' style="display: block;height: 100%;background: #000000a6;">
        <div class='cnt223'>
            <a href='' class='close'>X</a>
            <a href="{{  $banner->link }}" class="float" target="_blank"><img width="100%" src="{{ $banner->imagen }}" alt=""></a>

        </div>
    </div>
    <?php } ?>
    <body style="background: #1a9eb3;">

    <div id="loading-id" class="loading hide">Loading&#8230;</div>    
    <nav class="navbar navbar-default" style="min-height: 120px;z-index: 1;
            width: 100%;
            border: transparent;
            position: relative;
            margin-bottom: 0px;
            background: #e8e8e8;">
      <div class="container-fluid" style="padding-top: 20px;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="padding-left: 15px;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/" style="padding: 10px;"><img src="{{ asset('images/logo_ilumina.png')}}" style="width: 130px;"/></a>
          <!--a class="navbar-brand" href="#">Logo</a-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse col-md-12 col-sm-3" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" style="font-size: 12px;">
            <li><a href="{{URL::to('/')}}"><p style="font-size: 14px;text-align: center;color: #383838;">CURSOS</p><p style="text-align: center;margin: -10px 0px;color: #383838;font-size: 10px">ONLINE</p></a></li>      
            <li><a href="{{URL::to('/')}}/pack-presencial"><p style="font-size: 14px;text-align: center;color: #383838;">PACKS</p><p style="text-align: center;margin: -10px 0px;color: #383838;font-size: 10px">PRESENCIAL</p></a></li>      
            <li><a href="{{URL::to('/')}}/3d-printing"><p style="font-size: 14px;text-align: center;color: #383838;">3D</p><p style="text-align: center;margin: -10px 0px;color: #383838;font-size: 10px">PRITING</p></a></li>   
            <li><a href="{{URL::to('/')}}/portafolio" style="font-size: 14px;text-align: center;color: #383838;font-size: 14px">PORTAFOLIO</a></li>      
            <li><a href="{{URL::to('/')}}/nosotros" style="font-size: 14px;text-align: center;color: #383838;">NOSOTROS</a></li>      
            <li><a href="{{URL::to('/')}}/contacto" style="font-size: 14px;text-align: center;color: #383838;">CONTACTO</a></li>      
            <!--li><form class="navbar-form navbar-left">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" id="inputSuccess2"/>
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
            </form></li-->
            <!--li><i class="glyphicon glyphicon-th"></i><a href="/mis-cursos">MIS CURSOS</a></li-->
            <!--li><a href="#"><i class="	glyphicon glyphicon-user" style="font-size: 28px;color: #000;"></i></a></li-->
            @guest
            <li><a href="{{ route('login') }}" style="color: #000;font-size: 18px;"><i class="	glyphicon glyphicon-user"></i> ENTRAR</a></li>                                                            
            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" style="font-size: 14px;">{{ strtoupper(Auth::user()->name)}} {{ strtoupper(Auth::user()->last)}}</a>
                <ul class="dropdown-menu">
                    <?php   $instructor = DB::table('Instructor')->where('users_id', Auth::user()->id)->get(); 
                        if(count($instructor) > 0){
                    ?>                
                    <li>
                        <a href="{{URL::to('/')}}/banner-modulo-acceso-publicidad">MODULO BANNER</a>
                        <a href="{{URL::to('/')}}/panel-ilumina">PANEL</a>
                    </li>                                                            
                    <?php }?>
                    <li>
                        <a href="{{URL::to('/')}}/mis-cursos">MIS CURSOS</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            CERRAR SESIÓN
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>                                                            
            @endguest
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
        @yield('content')
        <div class="social-media-footer" style="background:#ececec;height: 340px;font-size: 18px;padding: 120px 0px 0px 80px;">
        <div class="col-xs-12 col-md-4" >
            <p>© 2019 Ilumina Arquitectura</p>
        </div>
        <div class="col-xs-12 col-md-4" >
            <p><a href="tel:1234567" style="color: #2b2f2f;">Telf. +51 950 087 170</a></p>
            <p><a href="mailto:iluminatectura@gmail.com" style="color: #2b2f2f;">iluminatectura@gmail.com</a></p>
        </div>
        <div class="col-xs-12 col-md-4" >
            <a href="https://www.facebook.com/iluminaarquitectura/"><img src="https://img.icons8.com/android/24/000000/facebook.png"></a>
            <a href="https://www.instagram.com/ilumina_arquitectura/"><img src="https://img.icons8.com/material-rounded/32/000000/instagram-new.png"></a>
            <a href="https://www.youtube.com/channel/UCjrjECBNoRk3cu2XdTJhr8A"><img src="https://img.icons8.com/ios-glyphs/32/000000/youtube-play.png"></a>
        </div>
    </div>
    </body>
<div class="fb-customerchat" page_id="1189999361096284"
logged_in_greeting="¡Hola! como podemos ayudarte?"
logged_out_greeting="¡Hola! como podemos ayudarte?"
 minimized="true"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '988321891542680',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v5.0'
    });
  };
  
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/es_US/sdk/xfbml.customerchat.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        var vimeo = new Vimeo('e6d330148956b25b1cd726c7319d603e46773571', settings.vimeo.client_secret, settings.vimeo.access_token);
        vimeo.request({
            path : '/channels/'+params.channel_id + '/videos',
            query : {
                sort        : 'date',
                direction   : 'desc'
            }
        }, function (err, res) {
            if (err) {
                return callback(err);
            }
            callback(null, res);
        });
    </script>   
    @stack('scripts')     
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163144487-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-163144487-1');
    </script>



<script>
    $('.carousel').carousel({
    interval: 1000 * 3
    });

    $( ".dropdown" ).hover(
    function() {
        console.log('activo');
        $( ".dropdown-menu" ).show();
    }, function() {
        console.log('desactivo');
        $( ".dropdown-menu" ).hide();
    }
    );
        
</script>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>
</html> 
