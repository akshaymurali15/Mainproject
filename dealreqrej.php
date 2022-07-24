<?php
include 'db.php';
$aa_id=$_GET['s_id'];
$ss=$_GET['ss'];

if($ss == 0){
    $ap =  $ap2 = mysqli_query($conn,"UPDATE `user-order` SET `Status`='ADMINREJECT' WHERE Login_id='$aa_id'");
   
}  
header("Location:verirej.php");

?>