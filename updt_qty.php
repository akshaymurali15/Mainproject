<?php
include 'db.php';
if(isset($_POST['submit'])){
    $b_id=$_POST['book_id'];
    $cus_id=$_POST['cust_id'];
    $qty=$_POST['qty'];
    $update_query="UPDATE cart SET quantity='$qty' WHERE Book_id='$b_id' AND Login_id='$cus_id'";
    $result=mysqli_query($conn,$update_query);
    header('location:cart.php');
}
?>