<?php 
include 'db.php';
 include 'sidebar3.php' ;
  $uid = $_SESSION['UserID'];
  




$as=mysqli_query($conn,"SELECT * FROM `cart`");

    while($rr = mysqli_fetch_array($as)){
       $bid=$rr['Book_id'];
    }


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BARELL OF BOOKS</title>
  <link rel="stylesheet" type="text/css" href="adminlte.css?v=<?php echo time(); ?>">

  <?php include 'db.php'; ?>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include 'header.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">cart</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
                  <!-- /.card-header -->
                  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
      <!-- Main content -->
      <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <form method="post">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>BOOK ID</th>
                    <th>BOOK NAME</th>
                    <th>IMAGE</th>
                    <th>PRICE</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                  $rr=mysqli_query($conn,"SELECT * FROM `cart` join `books` on `cart`.Book_id=`books`.Book_id where `cart`.Login_id='$uid'");
                  while($er=mysqli_fetch_assoc($rr)){ ?>
                  <tr>
                  <td><?php echo $er['Book_id'];?></td>
                    <td><?php echo $er['Book_name'];?></td>
                    <td><img src="bookimages/<?php echo $er['Image'];?>"width="70" height="80"></td>
                    <td> ₹ <?php echo $er['Price'];?></td>
                   <td><a href="cart2.php?id=<?php echo $er['cart_id']; ?>">Remove</a></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <?php
                    //$cid = $rr['cart_id'];
                    $sqla="SELECT SUM(Price) AS summ FROM cart where Login_id='$uid' ";
                    $cres = mysqli_query($conn,$sqla);
                    $cres1=mysqli_fetch_array($cres);
                    $sum = $cres1['summ'];
                  ?>
                  <th>Total</th>
                  <th></th> 
                  <th></th>
                  
                  <th><?php echo "$sum" ?></th>
                  <th><button><a href="pay.php"> Place order</a></button></th>
                  <tfoot>
                  <tr>
                    
                  </tr>
                  </tfoot>
                  </table>
                  </form>
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
                    
                
      <!-- Main content -->
        
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2022 <a href="#">BARELL OF BOOKS</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.1.0
      </div>
    </footer>
  </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<?php include 'db.php'; ?>
</body>
</html>
