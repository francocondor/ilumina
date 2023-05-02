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
