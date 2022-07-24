<?php
include 'db.php';
if(isset($_POST['submit'])){
    $stock = $_POST['numm'];
    $dealerid = $_POST['d_id'];
    $bidd = $_GET['gid'];
    $did = $_GET['did'];
    $ins="UPDATE `tbl_stock` SET `stock`='$stock',`dealer_id`='$did' WHERE `Book_id`='$bidd'";
    $russ=mysqli_query($conn,$ins);
    header("location:dealstock.php");


}
?>