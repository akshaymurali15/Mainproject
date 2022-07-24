<?php 
include 'db.php';
include 'sidebar2.php'; 
  $uid = $_SESSION['UserID'];

  
$bo_id=$_GET['b_id'];
$result=mysqli_query($conn,"SELECT books.*,tbl_stock.stock FROM books,tbl_stock WHERE tbl_stock.Book_id='$bo_id' AND books.Book_id='$bo_id'");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BARELL OF BOOKS</title>
  <link rel="stylesheet" type="text/css" href="adminlte.css?v=<?php echo time(); ?>">

  <?php include 'db.php'; ?>
  <style>
    .nums{
      margin:20px 0 -10px 20px;

    }
    .nums input{
      width: 120px;
      border-color:blue ;
    }
  </style>
</head>
<!--

-->
<?php 
if(isset($_POST['cart'])){
$name = $_POST['bname'];
$boid = intval($_POST['b_id']);
$pri = $_POST['bprice'];
$qty = $_POST['qty'];
$qp = ("SELECT `Book_id` FROM cart Where Book_id='$boid'");
$res = mysqli_query($conn,$qp);
$num = mysqli_num_rows($res);
if($num == 0){
  $qw = mysqli_query($conn,"INSERT INTO `cart`(`Book_name`, `Book_id`,`quantity`, `Price`,`Login_id`) VALUES ('$name','$boid','$qty','$pri','$uid')");
}else{
  $fetchquery = mysqli_query($conn,"UPDATE cart SET quantity = '$qty' Where Book_id='$boid'");
}

header("location:cart.php");
}
?>
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
            <h1 class="m-0">BOOK DETAILS</h1>
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
             <div class="card-body">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                <div id="accordion">
                 <div class="card card-info">
                   <form method="post">
                    <div class="card-header">
                      
                      <h4 class="card-title w-100">
                      <?php while($row=mysqli_fetch_assoc($result)){ ?>
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                        <h3><?php echo $row['Book_name'];?> <br>
                        ₹<?php echo $row['Price'];?> </h3>
                        <h4><?php echo $row['stock'];?> Books In stock</h4>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                      <div class="card-body">
                      <img src="bookimages/<?php echo $row['Image'];?>" alt="<?php echo $row['Image'];?>" width="250" height="350" style="margin-left:400px;"><br>
                          <h5><b>Author: </b> <?php echo $row['Author_name']; ?> <br>
                          <b>Story Line:</b><div style="margin:-23px 0 0 100px;"><?php echo $row['description'];?></div></h5>
                        <!-- <a href="book.php?b_id=<?php echo $row['Book_id'];?>"> -->
                        <div class="nums">
                          <input type="number" class="" name="qty" min=1 max=5 required value="1">
                        </div>
                        <input type="submit" class="btn btn-primary" name="cart" style="margin-left:20px; margin-top:30px;" value="ADD TO CART">
                        
                        <input type="hidden" name="bname" value="<?php echo $row['Book_name'];?> ">
                        <input type="hidden" name="b_id" value="<?php echo $row['Book_id'];?>">
                        <input type="hidden" name="bprice" value="<?php echo $row['Price'];?>">
                        
                      </div>
                      <?php } ?>
                      
                    </div>
                   </form>
                  </div>
</div></div>
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
        <b></b> 
    </footer>
  </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<?php include 'db.php'; ?>
</body>
</html>
