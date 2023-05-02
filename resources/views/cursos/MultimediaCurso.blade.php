<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ilumina-Arquitectura</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Josefin+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>

body, html {
  margin: 0;
  overflow: hidden;
  height:100%;
}

@media (min-width: 768px){
  #left {
    position: absolute;
    top: 0px;
    bottom: 0;
    left: 0;
    
    overflow-y: scroll; 
  }
  
  #right {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    overflow-y: scroll;
   
  }
}


.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
    </style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51950087170&text=hola!%20tengo%20una%20consulta%20sobre%20el%20curso%20online" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<div style="background: #f4f4f4;">
    <div class="row">      
        <div class="">        
            <div class="container">
                <div class="col-sm-4" id="left" style="padding:20px;">
                <h3>CURSO</h3>
                <div style="Background: #616161;border-radius: 10px;margin: 5px 0px 20px 0px;height: 35px;text-align: left;">
                    <a class="btn" style="color:#fff;" href="/">Menu Principal</a>
                </div>                
                 <div class="panel-group" id="accordion">
                <?php                 
                foreach ($Secciones ?? '' as $Seccion => $S) {?>                                 
                    <div class="panel panel-default" style="border-color: #e0e0e0;">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$Seccion+1}}">{{$S->Nombre}}</a>
                            </h4>
                        </div>
                        <div id="collapse{{$Seccion+1}}" class="panel-collapse collapse in">
                            <div class="panel-body">
                            <?php
                                foreach ($clases[$Seccion] as $clase => $c) {?>                                
                                <?php 
                                    if($claseDB->first()->idClase == $c->idClase){?>
                                    <ul style="background: #048da2;border-radius: 10px 10px 10px 10px;padding: 10px;">
                                    <a href="../detalle-curso-reproducir/{{Hashids::encode($data->first()->idCurso)}}_{{Hashids::encode($S->idSeccion)}}_{{Hashids::encode($c->idClase)}}" class="seccion" style="color:#fff;"><i class="glyphicon glyphicon-play-circle" style="padding-right: 5px;color:#fff;"></i>{{$c->Nombre}}</a>                                
                                    <?php }else{ ?>
                                    <ul>    
                                    <a href="../detalle-curso-reproducir/{{Hashids::encode($data->first()->idCurso)}}_{{Hashids::encode($S->idSeccion)}}_{{Hashids::encode($c->idClase)}}" class="seccion" style="color:#000;"><i class="glyphicon glyphicon-play-circle" style="padding-right: 5px;color:#EB4E4F;"></i>{{$c->Nombre}}</a>                                
                                    <?php } ?>                                                                                                
                                    </ul>
                                <?php
                                    }
                                ?>                              
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div> 
                </div>
                
                    <?php if($claseDB->first()->Multimedia == "" ){?>
                        <div class="col-sm-8" id="right" style="padding-top:100px;background: #000;">
                        <a  href="{{ $claseDB->first()->otro }}"  target="_blank" class="btn btn-link">                                                
                            <!--h1 style="background: #078da2;color: #f7f7f7;height: 80px;text-align: center;padding: 20px;text-decoration: underline;">
                            DESCARGAR MATERIALES</h1-->
                            <img src="../images/Descargaimagen.jpeg" width="100%" alt="">                        
                        </a>                                   
                        </div>
                    <?php }else{  ?>                  
                        <div class="col-sm-8" id="right" style="padding-top:100px;background: #000;">
                        
                        <?php if($claseDB->first()->idClase == 178 ){?>
                            <div style="width: 100%;height: 200px;background: #048da2;text-align: center;"> <a href="{{ $claseDB->first()->otro }}" target="_blank" class="btn btn-link">                                                
                                <!--h1 style="background: #078da2;color: #f7f7f7;height: 80px;text-align: center;padding: 20px;text-decoration: underline;">
                                DESCARGAR MATERIALES</h1-->
                                <img src="../images/Descargaimagen.jpeg" width="100%" alt="">                            
                                </a>                                   
                            </div>
                        <?php }?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <?php echo $claseDB->first()->Multimedia; ?>
                        </div>
                        </div>
                    <?php } ?>
                
            </div>
        </div> 
    </div>
</div>


    
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(window).bind("load", function () {
    $(".drive-viewer-toolstrip").remove();
  });
</script>

<script>

    $(function(){
        $(document).bind("contextmenu",function(e){
            //return false;
            $(".drive-viewer-toolstrip").remove();
        }); 
    });



    $( document ).ready(function() {
       $(".drive-viewer-toolstrip").remove();
        $( "#context-menu" ).remove();
    });
    
    $(window).load(function(){
        alert("click"); 
        $(".drive-viewer-toolstrip").remove();
});

    $( document ).ready(function() {
        console.log( "document loaded" );
        $(".drive-viewer-toolstrip").remove();
        $( "#context-menu" ).remove();
    });
 
    $( window ).on( "load", function() {
        console.log( "window loaded" );
        $(".drive-viewer-toolstrip").remove();
        $( "#context-menu" ).remove();
    });

    $("iframe").click(function() {
        alert("click");
        $(".drive-viewer-toolstrip").remove();
        $( "#context-menu" ).remove();
    });
        
    $('#context-menu').mousedown(function(event) {
        switch (event.which) {
            case 1:
                alert('Left mouse button pressed');
                break;
            case 2:
                alert('Middle mouse button pressed');
                break;
            case 3:
                alert('Right mouse button pressed');
                break;
            default:
                alert('You have a strange mouse');
        }
    });

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
</html>