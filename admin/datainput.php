<?php

include "../db.php";

$sql = "SELECT * FROM brand ";
$result = $conn->query($sql);

$brands = array();

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {

    array_push($brands,$row);

  }
} 
$sqla = "SELECT * FROM inventory INNER JOIN brand WHERE inventory.brand=brand.id";
$resulta = $conn->query($sqla);

$products = array();

if ($resulta->num_rows > 0) {
  // output data of each row
  
  while($row = $resulta->fetch_assoc()) {

    array_push($products,$row);

  }
} 


// var_dump($brands[0]['product_name']);

// die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Input</title>

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
        <div class="row">
          <div class="col-md-12">
              <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-edit"></i>
                      Data Input
                    </h3>
                  </div>
                  <div class="card-body">
                    
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Add Brand</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Add Product</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Update Brand</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Update Product</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                          <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                              <div class="col-md-12">
                                  <!-- general form elements -->
                                  <div class="card card-primary">
                                    
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="brandadd.php" method="POST">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Brand Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter brand name" name="brandname" required>
                                          </div>
                                        
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                          <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                  </div>
                                  <!-- /.card -->

                            
                            

                              </div>
                          </div>
                          <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                              <div class="col-md-12">
                                  <!-- general form elements -->
                                  <div class="card card-primary">
                                  
                                  
                                    <!-- form start -->
                                      <form action="addproduct.php" method="POST" >
                                        <div class="card-body">
                                          <div class="form-group" data-select2-id="29">
                                              <label>Brand Name</label>
                                              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="brandid">
                                                    <?php 

                                                      for($i=0;$i<count($brands);$i++){

                                                    ?>
                                                    
                                                      <option data-select2-id="3" value=" <?php  echo $brands[$i]['id']; ?>"> 
                                                          <?php  
                                                              echo $brands[$i]['brand_name']; 
                                                          ?>
                                                      </option>
                                                      


                                                    <?php
                                                      }
                                                    ?>
                                              </select>
                                              <!-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-4sdl-container"><span class="select2-selection__rendered" id="select2-4sdl-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" name="productname">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Model</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Model" name="model">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Deal Price</label>
                                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Deal Price" name="dealprice">
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Sell Price</label>
                                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Sell Price" name="sellprice">
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Quantity</label>
                                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantity" name="quantity">
                                          </div>
                                        </div>

                                        <div class="card-footer">
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                      </form>
                                  </div>
                                  <!-- /.card -->

                              

                              </div>                  
                          </div>
                          <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                          
                              <div class="col-md-12">
                                      <!-- general form elements -->
                                      <div class="card card-primary">
                                        
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form action="brandupdate.php" method="POST">
                                            <div class="card-body">
                                            <div class="form-group" data-select2-id="29">
                                              <label>Brand Name</label>
                                              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="brandid">
                                                    <?php 

                                                      for($i=0;$i<count($brands);$i++){

                                                    ?>
                                                    
                                                      <option data-select2-id="3" value=" <?php  echo $brands[$i]['id']; ?>"> 
                                                          <?php  
                                                              echo $brands[$i]['brand_name']; 
                                                          ?>
                                                      </option>
                                                      


                                                    <?php
                                                      }
                                                    ?>
                                              </select>
                                              <!-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-4sdl-container"><span class="select2-selection__rendered" id="select2-4sdl-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                          </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Update Brand Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter brand name" name="newbrandname" required>
                                              </div>
                                            
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                              <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </form>
                                      </div>
                                      <!-- /.card -->

                                
                                

                                  </div>                   

                              </div>
                          <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                          
                                <div class="col-12">
                                        <div class="card">
                                          <div class="card-header">
                                            <h3 class="card-title">Responsive Hover Table</h3>

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
                                          <div class="card-body table-responsive p-0">
                                            <table class="table table-hover text-nowrap">
                                              <thead>
                                                <tr>
                                                  <th>Product Name</th>
                                                  <th>Model</th>
                                                  <th>Deal Price</th>
                                                  <th> Brand</th>
                                                  <th>Sell Price</th>
                                                  <th>Quantity</th>
                                                  <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               <?php 

                                                  for($i=0;$i<count($products);$i++){


                                                ?>
                                                <tr>
                                                  <td class="productname"><?php echo $products[$i]['product_name']; ?></td>
                                                  <td class="model"><?php echo $products[$i]['model']; ?></td>
                                                  <td class="dealprice"><?php echo $products[$i]['deal_price']; ?></td>
                                                  <td class="brandname"><?php echo $products[$i]['brand_name']; ?></td>
                                                  <td class="sellprice"><?php echo $products[$i]['sell_price']; ?></td>
                                                  <td class="quantity"><?php echo $products[$i]['quantity']; ?></td>
                                                  <td>
                                                    <button class="vip">Update</button>
                                                  </td>

                                                </tr>
                                                <?php 

                                                  }
                                                  ?>
                                              </tbody>
                                            </table>
                                          </div>
                                          <!-- /.card-body -->
                                        </div>
                                  <!-- /.card -->
                                </div> 

                          </div>
                    </div>
                    
                  </div>
                <!-- /.card -->
              </div>
          </div>
          <div class="col-md-12">
                                  <!-- general form elements -->
                                  <div class="card card-primary">
                                  
                                  
                                    <!-- form start -->
                                      <form action="addproduct.php" method="POST">
                                        <div class="card-body">
                                          <div class="form-group" data-select2-id="29">
                                              <label>Brand Name</label>
                                              <select class="form-control select2 select2-hidden-accessible brand_select"  style="width: 100%;" name="brandid">
                                              <?php 

                                                    for($i=0;$i<count($brands);$i++){

                                                    ?>

                                                    <option data-select2-id="3" value=" <?php  echo $brands[$i]['id']; ?>"> 
                                                        <?php  
                                                            echo $brands[$i]['brand_name']; 
                                                        ?>
                                                    </option>



                                                    <?php
                                                    }
                                                    ?>
                                               </select>
                                              <!-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-4sdl-container"><span class="select2-selection__rendered" id="select2-4sdl-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <input type="text" class="form-control pr_name" id="exampleInputEmail1" placeholder="Enter Product Name" name="productname">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Model</label>
                                            <input type="text" class="form-control mod" id="exampleInputPassword1" placeholder="Model" name="model">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Deal Price</label>
                                            <input type="number" class="form-control dlprice" id="exampleInputPassword1" placeholder="Deal Price" name="dealprice">
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Sell Price</label>
                                            <input type="number" class="form-control slprice" id="exampleInputPassword1" placeholder="Sell Price" name="sellprice">
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Quantity</label>
                                            <input type="number" class="form-control qntity" id="exampleInputPassword1" placeholder="Quantity" name="quantity">
                                          </div>
                                        </div>

                                        <div class="card-footer">
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                      </form>
                                  </div>
                                  <!-- /.card -->

                              

                              </div>
        
        </div>
        <!-- /.row -->

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
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
<script src="productgenarator.js"></script>
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
