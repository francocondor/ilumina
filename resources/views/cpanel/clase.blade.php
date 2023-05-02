@extends('cpanel.index')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registro de Curso        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Curso</a></li>
        <li class="active">Nuevo Curso</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
 

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Formulario</h3>
            </div>
            <form method="POST" id="FormCurso" novalidate enctype="multipart/form-data">
              <div class="box-body">
                  <label for="Nombre">Nombre</label>
                  <input class="form-control" id="Nombre" name="Nombre" type="text" placeholder="">
                  <br>
                  <label for="Contenido">Contenido</label>
                  <textarea class="form-control" rows="3" id="Contenido" name="Contenido" placeholder=""></textarea>
                  <br>
                  <label for="Descripci贸n">Descripci贸n</label>
                  <textarea class="form-control" rows="3" id="Descripcion" name="Descripcion" placeholder=""></textarea>
                  <br>              
                  <label for="Precio">Precio</label>
                  <div class="input-group" class="col-md-3">
                      <span class="input-group-addon">S/. </span>
                      <input type="text" id="Precio" name="Precio" class="form-control ">
                      <span class="input-group-addon">.00</span>
                  </div>  
                  <label for="Precio">Precio sin descuento</label>
                  <div class="input-group" class="col-md-3">
                      <span class="input-group-addon">S/. </span>
                      <input type="text" id="Precio-Final" name="Precio-Final" class="form-control ">
                      <span class="input-group-addon">.00</span>
                  </div>  
                  <br>
                  <label for="Video">Video Promocional</label>
                  <input class="form-control" id="Video" name="Video" type="text" placeholder="<iframe Video></iframe>">                
                  <!--button class="btn btn-success" id="showVideo">Probar</button-->
                  <br>
                  
                  <br><br>
                  <div id="idVideoShowUpdate" class="form-group hidden">
                    <div class="col-sm-12">                    
                      <iframe src="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>                    
                    </div>
                  </div>
                  <label for="Nombre">Link archivo</label>
                  <input class="form-control" type="text" placeholder="Url de archivo a compartir">
                  <br>
                  <div class="form-group">
                      <label for="exampleInputFile">Imagen del cursos</label>
                      <input type="file" id="uploadFile" name="uploadFile[]" multiple/>
                  </div>
                  <label for="idInstructor">Instructor</label>
                  <select class="form-control" name="idInstructor" id="idInstructor">
                      <option value="0">Seleccione</option>
                      <? foreach ($instructores as $instructor=>$i) {?>
                          <option value="{{$i->idInstructor}}">{{$i->name}} {{$i->last}}</option>
                      <?}?>
                  </select>
                  <br>
                  <label for="idCategoria">Categoria</label>
                  <select class="form-control" name="idCategoria" id="idCategoria">
                      <option value="0">Seleccione</option>
                      <? foreach ($categorias as $categoria=>$c) {?>
                          <option value="{{$c->idCategoria}}">{{$c->Nombre}}</option>
                      <?}?>
                  </select><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">A帽adir Nuevo</button>
                  <br>
                    
                    <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Nueva Categoria</h4>
                        </div>
                        <div class="modal-body">
                          <label for="nombreCategoria">Nombre</label>
                          <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" value=""  >
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal">Agregar</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
    
                  <br>
                  <button type="button" id="registrarCurso" class="btn btn-info pull-right">Guardar</button>
              </div>
            </form>
          </div>
        </div>

          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection
