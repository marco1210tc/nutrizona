@extends('layouts.admin')

@section('content')

  <div class="container">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="col-sm-6">
          <h1> Pedidos </h1>
        </div><!-- /.col -->
      </div><!-- /.col -->
    </div>

    <div class="d-flex align-items-center mb-4">
      <i class="fas fa-filter mr-2"></i>
      <select class="form-control mr-2" style="width: auto;">
        <option value="opcion1">Por validar</option>
        <option value="opcion2">En camino</option>
      </select>
      <input type="date" class="form-control" style="width: auto;">
    </div>

    <div class="table-responsive">
      <table class="table table-bordered text-center table-hover table-sm">
        <thead class="bg-primary">
          <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Detalle de orden </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>000-23-11-2024</td>
            <td>Juan Peréz</td>
            <td>Por validar</td>
            <td>10-12-2022</td>
            <td>10:04</td>
            <td > 
              <a href="#">
                <img style="object-fit: auto; width: 45px; border: 1px solid gray; box-shadow: 3px 3px 3px gray"
                  src={{asset('images/icons/orderView.png')}} alt="detalle de orden">
              </a>
            </td>
          </tr>
          <tr>
            <td>001-23-11-2024</td>
            <td>Alan Esparza</td>
            <td>En camino</td>
            <td>10-12-2022</td>
            <td>14:23</td>
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