<?php
include 'db.php';
$aa_id=$_GET['a_id'];
$ss=$_GET['ss'];
$itt=$_GET['id'];
if($ss == 1){
    $ap =  mysqli_query($conn,"UPDATE `user-order` SET `Dealer_id`='$aa_id' WHERE User_Order_id='$itt'");

   
} 
// else{
//     $ap2 = mysqli_query($conn,"UPDATE `login` SET `Status`='REJECTED' WHERE Login_id='$aa_id'");

// } 
header("Location:dealuseorders.php");

?>