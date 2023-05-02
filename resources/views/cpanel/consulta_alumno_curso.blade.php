@extends('cpanel.index')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
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
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Consulta de Alumno</h3>
          

            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6"></div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                <table id="example" class="display table table-bordered table-hover dataTabl" style="width:100%">
                <thead>
                  <tr role="row">
                      <th>Código</th>
                      <th>Nombres</th>                      
                      <th>Email</th>
                      <th>Curso</th>
                      <th>Fecha Pedido</th>
                      <th>Orden Pedido</th>
                  </tr>
              </thead>
              <tbody>
              <?php
                  foreach ($data as $pedidos => $pedido) {
              ?>                
                  <tr>
                      <td>{{ $pedido->idPedido}}</td>
                      <td>{{ $pedido->nombreAlumno}}</td>
                      <td>{{ $pedido->emailPedido}}</td>
                      <td>{{ $pedido->cursoPedido}}</td>
                      <td>{{ $pedido->fechaPedido}}</td>   
                      <td>{{ $pedido->fechaOrdenPedido }}</td>
                      <!--td><button type="button" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></button></td-->                                             
                  </tr>
                  <?php }?>           
              </tbody>

    </table>
          
          </div>
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
@push('scripts')
<script type="text/javascript">
  $(document).ready(function () {
      $('#example').DataTable();
    });
</script>
@endpush