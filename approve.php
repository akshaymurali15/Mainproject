<?php
include 'db.php';
$aa_id=$_GET['a_id'];
$ss=$_GET['ss'];
if($ss == 1){
    $ap =  mysqli_query($conn,"UPDATE `login` SET `Status`='ACCEPTED' WHERE Login_id='$aa_id'");

   
} 
else{
    $ap2 = mysqli_query($conn,"UPDATE `login` SET `Status`='REJECTED' WHERE Login_id='$aa_id'");

} 
header("Location:Requests.php");

?>