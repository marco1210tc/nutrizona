@extends('layouts.admin')

@section('content')

  <div class="container">

    <div class="content-header">
      <div class="col-sm-6">
        <h1> Historial de ventas </h1>
      </div><!-- /.col -->
    </div>
    
    <div class="table-responsive">
      <table class="table table-bordered text-center table-hover table-sm">
        <thead class="bg-primary">
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo Electrónico</th>
            <th>Teléfono</th>
            <th>Fecha</th>
            <th>Detalle de orden </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Juan</td>
            <td>Pérez</td>
            <td>juan.perez@example.com</td>
            <td>+34 123 456 789</td>
            <td>10-12-2022</td>
            <td > 
              <a href="#">
                <img style="object-fit: auto; width: 45px; border: 1px solid gray; box-shadow: 3px 3px 3px gray"
                  src={{asset('images/icons/orderView.png')}} alt="detalle de orden">
              </a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>María</td>
            <td>Gómez</td>
            <td>maria.gomez@example.com</td>
            <td>+34 987 654 321</td>
            <td>10-12-2022</td>
            <td> 
              <a href="#">
                <img style="object-fit: auto; width: 45px; border: 1px solid gray; box-shadow: 3px 3px 3px gray"
                  src={{asset('images/icons/orderView.png')}} alt="detalle de orden">
              </a>
            </td>
            
          </tr>
          <!-- más filas -->
        </tbody>
      </table>
    </div>
  </div>
@endsection