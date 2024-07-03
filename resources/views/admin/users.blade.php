@extends('layouts.admin')

@section('content')

  <div class="content-header">
    <div class="col-sm-6">
      <h1> Lista de usuarios del sistema </h1>
    </div><!-- /.col -->
  </div>
  
  <div class="container">

    <div class="table-responsive">

    {{-- @if ($users) --}}
      <table class="table table-bordered text-center table-hover table-sm"> {{--table-striped--}}
        <thead>
          <tr class="bg-primary text-white"> 
            <th> Id </th>
            <th> Nombre </th>
            <th> Correo </th>
            <th> Acción </th>
          </tr>
        </thead>
        <tbody>
          {{-- <tr>
            @foreach ($users as $user)
            <td> {{Auth::user()->id}} </td>
            <td> {{Auth::user()->name}} </td>
            <td> {{Auth::user()->email}} </td>
            @endforeach
          </tr> --}}
          <tr>
            <td> 1 </td>
            <td> Juan Vásquez </td>
            <td> jvasques@gmail.com</td>
            <td> Eliminar | Agregar </td>
          </tr>
          <tr>
            <td> 2 </td>
            <td> Luis Gamarra </td>
            <td> luis24@gmail.com </td>
            <td> Eliminar | Agregar </td>
          </tr>
          <tr>
            <td> 3 </td>
            <td> Rosa Ávila </td>
            <td> rosavi@outlook.com</td>
            <td> Eliminar | Agregar </td>
          </tr>
          <tr>
            <td> 4 </td>
            <td> Miguel Torres </td>
            <td> mtorres@gmail.com </td>
            <td> Eliminar | Agregar </td>

          </tr>
        </tbody>
      </table>
    {{-- @else
      <h2> No existen usuarios añadidos </h2>
    @endif --}}
    </div>
  </div>


@endsection