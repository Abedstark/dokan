<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sell</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>



<?php 
include 'navbar.php';

include 'sidebar.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Abed & Brothers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sell</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row d-flex justify-content-between">
          
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Sell Page</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form>
                        <div class="card-body">
                          <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Customer name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Customer name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Phone number</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="customer number">
                          </div> -->

                          <!-- company name -->
                          <div class="form-group">
                                <label>Company</label>
                                <select class="form-control">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                              </div>

                              <!-- product name -->
                              <div class="form-group">
                                <label>Product</label>
                                <select class="form-control">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                              </div>

                              <div class="form-group">
                            <label for="exampleInputPassword1">Quantity</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Original price</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" value="200" disabled>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Sell Price</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" value="200">
                          </div>

                        
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer text-center">
                          <button type="submit" class="btn btn-primary">
                          <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-3">
                    <div class="card card-success">
                      <div class="card-header">
                        <h3 class="card-title">Osaka</h3>

                        <div class="card-tools">
                          
                          <button type="button" class="btn btn-tool" data-card-widget="maximize">
                            <i class="fas fa-expand"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        200 taka
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

        
                
                <!-- /.row -->
        </div><!--/. container-fluid -->
        <div class="row">
          <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Customer Info</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Customer name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Customer name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone number</label>
                      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="customer number">
                    </div>

                    <!-- company name -->
                 
                  
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">
                    Final submit
                    </button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
          </div>
          <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Serial No.</th>
                      <th>Product Name</th>
                      <th>price</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                 
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
                        
        </div>


    </section>
    <!-- /.content -->
  </div>


        
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->
<?php

include 'footer.php';

?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
