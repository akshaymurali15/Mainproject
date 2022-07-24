<?php 
include 'db.php';
$log_id=$_GET['log_id'];
$qty=$_GET['qty'];
$price=$_GET['sum'];


$insert="INSERT INTO `user-order`(`User_id`,`total_price`,`total_qty`,`Status`,`paysts`) 
VALUES ('$log_id','$price','$qty','Started','PAID')";
$res1=mysqli_query($conn,$insert);

$select_odrid="SELECT User_Order_id FROM `user-order` WHERE User_id='$log_id' ORDER BY User_Order_id DESC LIMIT 1";
$res3=mysqli_query($conn,$select_odrid);
$odrfetch=mysqli_fetch_array($res3);
$odr_id=$odrfetch['User_Order_id'];

$cart_select="SELECT `cart_id`, `Book_name`, `Book_id`, `quantity`, `Price`, `Login_id` FROM `cart` WHERE login_id='$log_id'";
$select_result=mysqli_query($conn,$cart_select);
while($cart_fetch=mysqli_fetch_array($select_result)){
    $book_name=$cart_fetch['Book_name'];
    $book_id=$cart_fetch['Book_id'];
$qtty=$cart_fetch['quantity'];
$plo_ins="INSERT INTO `place_order`(`User_Order_id`, `book_id`, `book_name`,`quantity`) 
VALUES ('$odr_id','$book_id','$book_name',$qtty)";
$res4=mysqli_query($conn,$plo_ins);

$updtt=mysqli_query($conn,"SELECT * FROM `tbl_stock` WHERE Book_id =$book_id");
$upp=mysqli_fetch_array($updtt);
$stkid=$upp['stock'];
$qtyy = $stkid-$qtty;
    $udt=mysqli_query($conn,"UPDATE `tbl_stock` SET `stock`='$qtyy' WHERE Book_id=$book_id");

}
$cart_delete="DELETE FROM cart WHERE login_id='$log_id'";
$delete_res=mysqli_query($conn,$cart_delete);
header("Location: paymentraz.php?qty=$qtty&&o_id=$odr_id&&l_id=$log_id&&pr=$price");

?>