<?php 
include 'db.php';
$idd=$_GET['id'];
$resltt= mysqli_query($conn,"SELECT `total_price`,`Order_date`,`Status`,`del_time` FROM `user-order` WHERE User_Order_id='$idd'");
$ress=mysqli_query($conn,"SELECT `plo_id`, `User_Order_id`, `book_id`, `book_name`,`quantity` FROM `place_order`WHERE User_Order_id='$idd'");
$syn=mysqli_query($conn,"SELECT `user-order`.*, dealer.Name AS dname, deliveryboy.* FROM `user-order` JOIN `dealer` ON dealer.Login_id =`user-order`.Dealer_id JOIN `deliveryboy` ON deliveryboy.Login_id = `user-order`.deliboy_id WHERE `user-order`.Status='Delivered' and User_Order_id='$idd'");
$synn=mysqli_query($conn,"SELECT * FROM `user-order` JOIN `dealer` ON dealer.Login_id=`user-order`.Dealer_id WHERE `user-order`.Status='Shipped' and User_Order_id='$idd'");
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
  <?php include 'sample.php'; ?>
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
                  $r=mysqli_fetch_array($resltt);
                  $status = $r['Status'];
                  ?>
                  <tr>
                  <th>Total</th>
                    <th>₹<?php echo $r['total_price'];?></th>
                  </tr>
                   <tr>
                    <th>ORDER TIME</th>
                    <th><?php echo $r['Order_date'];?></th>
                   </tr>
                   <tr>
                    <th>STATUS ORDER</th>
                    <th><?php echo $status ?></th>
                   </tr>
                   
                   <?php 
                   if($status=='Shipped'){
                   
                  $sq=mysqli_fetch_array($synn);?>
                  <tr>
                    <th>DEALER</th>
                    <th><?php echo $sq['Name'];?></th>
                   </tr>

                    
                  <?php }elseif($status=='Delivered'){
                    $s=mysqli_fetch_array($syn);
                    ?>
                    <tr>
                    <th>DEALER</th>
                    <th><?php echo $s['dname'];?></th>
                   </tr>
                   <tr>
                    <th>DELIVERY PERSON</th>
                    <th><?php echo $s['Name'];?></th>
                   </tr>
                  <?php } ?>

                  </tbody>
                  

                  
                  </table>
              </div>
              <!-- /.card-body -->
            </div>
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

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<!-- <script src="plugins/datatables/jquery.dataTables.min.js"></script> -->
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<!-- <script src="plugins/pdfmake/pdfmake.min.js"></script> -->
<!-- <script src="plugins/pdfmake/vfs_fonts.js"></script> -->
<!-- <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script> -->
<!-- <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script> -->
<!-- <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Page specific script -->
</body>
</html>
