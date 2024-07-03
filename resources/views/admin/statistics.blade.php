@extends('layouts.admin')

@section('content')

  <div class="container">

    <div class="content-header">
      <div class="col-sm-6">
        <h1> Estadisticas del negocio </h1>
      </div><!-- /.col -->
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Visitante a la web</h3>
                <a href="javascript:void(0);">Ver Reporte</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span class="text-bold text-lg">820</span>
                  <span>Visitantes</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                  <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 12.5%
                  </span>
                  <span class="text-muted">Desde la última semana</span>
                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="visitors-chart" height="200" width="436" style="display: block; width: 436px; height: 200px;" class="chartjs-render-monitor"></canvas>
              </div>

              <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                  <i class="fas fa-square text-primary"></i> Esta semana
                </span>

                <span>
                  <i class="fas fa-square text-gray"></i> Última semana
                </span>
              </div>
            </div>
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Productos</h3>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-sm">
                  <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-tool btn-sm">
                  <i class="fas fa-bars"></i>
                </a>
              </div>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                  <th>Producto</th>
                  <th>Precio</th>
                  <th>Ventas</th>
                  <th>Otros</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>
                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Some Product
                  </td>
                  <td>$13 PEN</td>
                  <td>
                    <small class="text-success mr-1">
                      <i class="fas fa-arrow-up"></i>
                      12%
                    </small>
                    12,000 Vendido
                  </td>
                  <td>
                    <a href="#" class="text-muted">
                      <i class="fas fa-search"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Another Product
                  </td>
                  <td>$29 PEN</td>
                  <td>
                    <small class="text-warning mr-1">
                      <i class="fas fa-arrow-down"></i>
                      0.5%
                    </small>
                    123,234 Vendido
                  </td>
                  <td>
                    <a href="#" class="text-muted">
                      <i class="fas fa-search"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Amazing Product
                  </td>
                  <td>$1,230 USD</td>
                  <td>
                    <small class="text-danger mr-1">
                      <i class="fas fa-arrow-down"></i>
                      3%
                    </small>
                    198 Vendido
                  </td>
                  <td>
                    <a href="#" class="text-muted">
                      <i class="fas fa-search"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Perfect Item
                    <span class="badge bg-danger">NEW</span>
                  </td>
                  <td>$199 USD</td>
                  <td>
                    <small class="text-success mr-1">
                      <i class="fas fa-arrow-up"></i>
                      63%
                    </small>
                    87 Sold
                  </td>
                  <td>
                    <a href="#" class="text-muted">
                      <i class="fas fa-search"></i>
                    </a>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Sales</h3>
                <a href="javascript:void(0);">Ver Reporte</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span class="text-bold text-lg">$18,230.00</span>
                  <span>Sales Over Time</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                  <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 33.1%
                  </span>
                  <span class="text-muted">Desde el último mes</span>
                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="sales-chart" height="200" style="display: block; width: 436px; height: 200px;" width="436" class="chartjs-render-monitor"></canvas>
              </div>

              <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                  <i class="fas fa-square text-primary"></i> Este año
                </span>

                <span>
                  <i class="fas fa-square text-gray"></i> Último año
                </span>
              </div>
            </div>
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Resumen de ventas</h3>
              <div class="card-tools">
                <a href="#" class="btn btn-sm btn-tool">
                  <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-sm btn-tool">
                  <i class="fas fa-bars"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                <p class="text-success text-xl">
                  <i class="ion ion-ios-refresh-empty"></i>
                </p>
                <p class="d-flex flex-column text-right">
                  <span class="font-weight-bold">
                    <i class="ion ion-android-arrow-up text-success"></i> 12%
                  </span>
                  <span class="text-muted">CONVERSION RATE</span>
                </p>
              </div>
              <!-- /.d-flex -->
              <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                <p class="text-warning text-xl">
                  <i class="ion ion-ios-cart-outline"></i>
                </p>
                <p class="d-flex flex-column text-right">
                  <span class="font-weight-bold">
                    <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                  </span>
                  <span class="text-muted">SALES RATE</span>
                </p>
              </div>
              <!-- /.d-flex -->
              <div class="d-flex justify-content-between align-items-center mb-0">
                <p class="text-danger text-xl">
                  <i class="ion ion-ios-people-outline"></i>
                </p>
                <p class="d-flex flex-column text-right">
                  <span class="font-weight-bold">
                    <i class="ion ion-android-arrow-down text-danger"></i> 1%
                  </span>
                  <span class="text-muted">REGISTRATION RATE</span>
                </p>
              </div>
              <!-- /.d-flex -->
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
@endsection