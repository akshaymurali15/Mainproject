<?php
include 'db.php';
if(isset($_POST['submit'])){
    $stock = $_POST['numm'];
    $bidd = $_GET['gid'];
    $ins= "UPDATE `tbl_stock` SET `stock`='$stock' WHERE `Book_id`='$bidd'";
    $russ=mysqli_query($conn,$ins);
    header("location:dealstock.php");


}
?>