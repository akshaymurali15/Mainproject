<?php
include 'db.php';
$su_id=$_GET['a_id'];
$liid= $_GET['lid'];
$sts=$_GET['sss'];
$det = mysqli_query($conn,"INSERT INTO `wishlist`(`Book_id`, `Login_id`, `Status`) VALUES ('$su_id','$liid'");

if ($sts == '0') {
    mysqli_query($conn,"UPDATE `wishlist` SET `Status`= '1' WHERE Book_id ='$su_id'");//status 1 indicate unblock
    echo "<script>alert('successfully ');</script>";
    header("location: user_wishlist.php");
    
} else {
mysqli_query($conn,"UPDATE `wishlist` SET `Status`= '0' WHERE Book_id ='$su_id'");//status 2 indicate block
echo "<script>alert('successfully blocked');</script>";
header("location: user_wishlist.php");
}


    
    header("location: user_book_detail.php");



       
?>