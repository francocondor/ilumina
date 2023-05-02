@extends('index')
    @section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>
  <style type="text/css">
    .lightbox{
      z-index: 1041;
    }
    .small-img{
      width: 100px;height: 100px;
    }
  </style>

<div class="container-fluid" style="background: #fff;">    
<div class="container container-bg" style="background: #fff;">    


<h1>PORTAFOLIO</h1>

<p>Presentamos los trabajos de <b>renderizado</b> y <b>post producción</b> realizados en nuestra oficina de arquitectura, además, algunos elaborados en etapa académica universitaria. Toda la experiencia durante estos años en técnicas de representación lo usamos como material de clase para capacitar a nuevos estudiantes.</p>

<a data-toggle="lightbox" href="#demoLightbox">
<img src="dist/img/portfolio/15.jpg" class="col-xs-12 col-md-6" style="padding: 15px 15px 0px 15px;">
</a>

<div id="demoLightbox" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
            <img src="dist/img/portfolio/15.jpg" >
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>

<a data-toggle="lightbox" href="#demoLightbox2">
<img src="dist/img/portfolio/13.jpg" class="col-xs-12 col-md-6" style="
height: 345px;
padding: 15px 15px 10px 15px;">
</a>
<div id="demoLightbox2" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
            <img src="dist/img/portfolio/31.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>

<a data-toggle="lightbox" href="#demoLightbox3">
<img src="dist/img/portfolio/16.jpg" class="col-xs-12 col-md-6" style="height: 345px;padding: 10px 15px 10px 15px;">
</a>
<div id="demoLightbox3" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/34.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>



<a data-toggle="lightbox" href="#demoLightbox4">
<img src="dist/img/portfolio/3.jpg" class="col-xs-12 col-md-8" style="height: 386px;padding: 10px 15px 10px 15px;">
</a>

<div id="demoLightbox4" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
            <img src="dist/img/portfolio/21.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>

<a data-toggle="lightbox" href="#demoLightbox5">
    <img src="dist/img/portfolio/4.jpg" class="col-xs-12 col-md-4" style="height: 190px;padding: 10px 15px 10px 15px;">
</a>
<div id="demoLightbox5" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
            <img src="dist/img/portfolio/22.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>

<a data-toggle="lightbox" href="#demoLightbox6">
    <img src="dist/img/portfolio/2.jpg" class="col-xs-12 col-md-4" style="padding: 10px 15px 10px 15px;height: 195px;">
</a>
<div id="demoLightbox6" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/20.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>





<div class="col-md-6">

<a data-toggle="lightbox" href="#demoLightbox7">
<img src="dist/img/portfolio/37.jpg" class="col-xs-12 col-md-12" style="padding: 10px 0px 10px 0px;">
</a>

<div id="demoLightbox7" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
            <img src="dist/img/portfolio/37.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>

<a data-toggle="lightbox" href="#demoLightbox8">
    <img src="dist/img/portfolio/14.jpg" class="col-xs-12 col-md-12" style="
padding: 15px 0px;
">
</a>
<div id="demoLightbox8" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="lightbox-dialog" style="position: fixed; width: 1135px; height: 647px; top: 0px; left: 50%; margin-left: -567.5px;">
        <div class="lightbox-content" style="width: 1135px; height: 647px;">
        <img src="dist/img/portfolio/32.jpg" style="width: 1115px; height: 627px;">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>
</div>
<div class="col-md-6">

<a data-toggle="lightbox" href="#demoLightbox9">
    <img src="dist/img/portfolio/18.jpg" class="col-xs-12 col-md-12" style="padding: 10px 0px 15px 0px;">
</a>

<div id="demoLightbox9" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/36.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>
</div>


<a data-toggle="lightbox" href="#demoLightbox10">
    <img src="dist/img/portfolio/9.jpg" class="col-xs-12 col-md-12" style="
    padding: 15px 15px 0px 15px;">
</a>
<div id="demoLightbox10" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/27.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>



<a data-toggle="lightbox" href="#demoLightbox11">
    <img src="dist/img/portfolio/7.jpg" class="col-xs-12 col-md-6" style="padding: 15px 15px 0px 15px;height: 337px;">
</a>
<div id="demoLightbox11" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="lightbox-dialog" style="position: fixed; width: 1135px; height: 647px; top: 0px; left: 50%; margin-left: -567.5px;">
        <div class="lightbox-content" style="width: 1135px; height: 647px;">
            <img src="dist/img/portfolio/25.jpg" style="width: 1115px; height: 627px;">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>


<a data-toggle="lightbox" href="#demoLightbox12">
    <img src="dist/img/portfolio/8.jpg" class="col-xs-12 col-md-6" style="padding: 15px 15px 15px 15px;">
</a>
<div id="demoLightbox12" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/26.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>


<a data-toggle="lightbox" href="#demoLightbox13">
    <img src="dist/img/portfolio/17.jpg" class="col-xs-12 col-md-5" style="padding: 10px 15px 15px 15px;">
</a>
<div id="demoLightbox13" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/35.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>

<a data-toggle="lightbox" href="#demoLightbox14">
    <img src="dist/img/portfolio/1.jpg" class="col-xs-12 col-md-7" style="padding: 0px 15px 15px 15px;">
</a>
<div id="demoLightbox14" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/19.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>

<a data-toggle="lightbox" href="#demoLightbox15">
    <img src="dist/img/portfolio/6.jpg" class="col-xs-12 col-md-12">
</a>
<div id="demoLightbox15" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/24.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>

<a data-toggle="lightbox" href="#demoLightbox16">
    <img src="dist/img/portfolio/12.jpg" class="col-xs-12 col-md-12" style="
    padding: 15px 15px 0px 15px;
">
</a>
<div id="demoLightbox16" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/30.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>



<a data-toggle="lightbox" href="#demoLightbox17">
    <img src="dist/img/portfolio/10.jpg" class="col-xs-12 col-md-4" style="
    height: 260px;
    padding: 16px 0px 10px 15px;
">
</a>
<div id="demoLightbox17" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/28.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>



<a data-toggle="lightbox" href="#demoLightbox18">
    <img src="dist/img/portfolio/11.jpg" class="col-xs-12 col-md-4" style="
    height: 260px;
    padding: 15px 0px 10px 15px;
">
</a>
<div id="demoLightbox18" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/29.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>



<a data-toggle="lightbox" href="#demoLightbox19">
    <img src="dist/img/portfolio/5.jpg" class="col-xs-12 col-md-4" style="
    padding: 15px 0px 8px 15px;
    height: 260px;
">
</a>
<div id="demoLightbox19" class="lightbox fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="lightbox-dialog">
        <div class="lightbox-content">
        <img src="dist/img/portfolio/23.jpg">
            <!--div class='lightbox-caption'>
                    Write here your caption here
            </div-->
        </div>
    </div>
</div>


</div>
</div>
@endsection 
@push('scripts')

@endpush
