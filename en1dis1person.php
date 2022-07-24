<?php
include 'db.php';
$su_id=$_GET['a_id'];
$sts=$_GET['ss'];
$el=$_GET['ell'];
$ej=$GET['esl'];



if ($sts == 'BLOCKED') {
    mysqli_query($conn,"UPDATE `login` SET `Status`= 'ACCEPTED' WHERE Login_id ='$su_id'");//status 1 indicate unblock
    echo "<script>alert('successfully unblocked');</script>";
    header("location: veridel2.php?eg1=$el");
} else {
mysqli_query($conn,"UPDATE `login` SET `Status`= 'BLOCKED' WHERE Login_id ='$su_id'");//status 2 indicate block
echo "<script>alert('successfully blocked');</script>";
header("location: verifydelivery.php?eg2=$ej");
}

        
?>