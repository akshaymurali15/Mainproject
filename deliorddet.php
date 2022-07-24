<?php 
include 'db.php';
$idd=$_GET['id'];
$resltt= mysqli_query($conn,"SELECT `total_price`,`Order_date` FROM `user-order` WHERE User_Order_id='$idd'");
$ress=mysqli_query($conn,"SELECT `plo_id`, `User_Order_id`, `book_id`, `book_name`,`quantity` FROM `place_order`WHERE User_Order_id='$idd'");
$ur=mysqli_query($conn,"SELECT `Address`,`Mobile` FROM  `user`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="adminlte.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="adminlte.css?v=<?php echo time(); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include 'header.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'sidebar4.php'; ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ORDER DETAILS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>BOOK-NAME</th>
                    <th>QUANTITY</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php while($row=mysqli_fetch_assoc($ress)){ 
                    ?>
                  <tr>
                    <td><?php echo $row['book_name'];?></td>
                    <td><?php echo $row['quantity'];?></td>
                    </tr>
                  <?php } 
                  $r=mysqli_fetch_array($resltt)
                  ?>
                  <tr>
                  <th>Total</th>
                    <th>₹<?php echo $r['total_price'];?></th>
                  </tr>
                   <tr>
                    <th>ORDER TIME</th>
                    <th><?php echo $r['Order_date'];?></th>
                   </tr>
                   <?php 
                   $ss=mysqli_fetch_array($ur)
                   ?>
                   <tr>
                    <th>DELIVERY ADDRESS</th>
                    <th><?php echo $ss['Address'];?></th>
                   </tr>
                   <tr>
                    <th>CONTACT</th>
                    <th><?php echo $ss['Mobile'];?></th>
                   </tr>
                  </tbody>
                  
                  </table>
              </div>
              <!-- /.card-body -->
            </div>
            <td><a href="delvrdaction.php?id=<?php echo $idd;?>"><input type="submit" value="DELIVERED" style="margin-left:550px; margin-top:10px;"></a></td>

            <!-- <button style="margin-left:550px; margin-top:10px;">DELIVERED</button> -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b></b>
    </div>
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">BARELL OF BOOKS</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


<!-- ./wrapper -->

</body>
</html>
