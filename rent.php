<?php 
include 'db.php';
$q=$_GET['qty'];
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="adminlte.css?v=<?php echo time(); ?>">
    <style>
        .loginPopup {
            text-align: center;
            width: 100%;
            width: 100%;

        }

        .formPopup {
            position: fixed;
            left: 30%;
            top: 10%;
            background-color: white;
            border-collapse: collapse;
            border-color: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            margin: auto;
            padding: 50px 30px 50px 30px;
        }

        .labels {
            text-transform: uppercase;
            float: left;
            text-align: left;
        }

        .inputs {
            width: 300px;
            float: right;
            margin-right: 20px;
            margin-left: 20px;
        }

        .cnbtn {
            float: left;
            background-color: red;
            padding: 3px 7px 3px 7px;
            border-radius: 10px;
            border: none;
            font-weight: bold;

        }

        .chbtn {
            float: right;
            margin-right: 20px;
            background-color: lawngreen;
            padding: 3px 7px 3px 7px;
            border-radius: 10px;
            border: none;
            font-weight: bold;
        }
    </style>

</head>

<body>

<?php 
include_once 'sidebar3.php'; 
$uid=$_SESSION['UserID'];
$csql="SELECT User_Order_id,total_price FROM `user-order` WHERE User_id='$uid' ORDER BY User_Order_id DESC LIMIT 1";
$psl = mysqli_query($conn,$csql);
$psql = mysqli_fetch_array($psl);
$sum=$psql["total_price"];
$usnme = "SELECT Name,Mobile,Address FROM user WHERE Login_id='$uid'";
$rlt = mysqli_query($conn,$usnme);
$fassoc = mysqli_fetch_array($rlt);
$id= $psql['User_Order_id'];
?>
    <form method="post" enctype="multipart/form-data">
        <td>
            <button class="btn2" onclick="openForm()"><a>Place Order</a></button>
        </td>
        <div class="loginPopup">
            <div class="formPopup" id="popupForm">

                <h2>Place order</h2><br><br>

                <label class="labels">BOOK NAME</label>
                <input type="text" id="psw" placeholder="total price" name="psw" value="₹<?php echo "$sum" ?>" required autocomplete="off" class="inputs" readonly><br><br>

                <label class="labels">ORIGINAL PRICE</label>
                <input type="text" id="products" placeholder="Your Name" name="email" value="<?php echo $fassoc['Name']; ?>" required autocomplete="off" class="inputs"><br><br>

                <label class="labels">RENT PRICE</label>
                <input type="text" id="products" placeholder="Mobile" name="email" value="<?php echo $fassoc['Mobile']; ?>" required autocomplete="off" class="inputs"><br><br>

                <label class="labels">Delivery Address</label>
                <input type="text" placeholder="Enter your address" cols="25" rows="2" name="address" value="<?php echo $fassoc['Address']; ?>" required autocomplete="off" class="inputs"></textarea><br><br><br>

                <label class="labels">Payment Method</label>
                <select name="paymentMethod" id="payment" class="inputs">
                    <option value="upi">UPI</option>
                    <option value="card">Card</option>
                    <option value="cod">COD</option>
                </select><br><br>
                <!-- <div class="obtns">
                    <button type="submit" class="cnbtn" name="canc" >Cancel</button>
                    <a href="https://rzp.io/l/MQPJBZhM" class="chbtn">Check out</a><br>
                </div> -->
            </div>
        </div>
    </form>
</body>

</html>
<?php 
if(isset($_POST['canc'])){
    $up=mysqli_query($conn,"SELECT book_id FROM `place_order` WHERE User_Order_id=$id");
    $upd=mysqli_fetch_array($up);
    $bookid=$upd['book_id'];
    $stc=mysqli_query($conn,"SELECT * FROM `tbl_stock` WHERE Book_id =$bookid");
    $upp=mysqli_fetch_array($stc);
    $stkid=$upp['stock'];
    $qty = $stkid+$q;
    $udt=mysqli_query($conn,"UPDATE `tbl_stock` SET `stock`='$qty' WHERE Book_id=$bookid");
    echo "<script>location='cart.php'</script>";
    // header("location:cart.php");

}
?>