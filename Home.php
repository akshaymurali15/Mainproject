<?php
include 'db.php';
session_start();
$uid = $_SESSION['UserID'];
if($_SESSION['UserID']==""){
    header('location:LOGIN.php');
}
$sql = mysqli_query($conn,"SELECT * from `login` where `Login_id`='$uid'");


?>



<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="Home.css">

    </head>
    <body>
        
        <div class="dropdwn">
            <nav>
                
                <img class="logo" src="122.jpg"> 
                
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">CATEGORIES</a>
                    <ul>
                        <li><a href="#">PHILOSOPHY</a></li>
                        <li><a href="#">CRIME</a></li>
                        <li><a href="#">KIDS</a></li>
                        <li><a href="#">MYSTERY</a></li>
                        <li><a href="#">DRAMA</a></li>
                        <li><a href="#">SCIENCE</a></li>

                    </ul>
                    </li>

                    <li><a href="#">AUTHOR</a>
                    <ul>
                        <li><a href="#">J.ROWLING</a></li>
                        <li><a href="#">JIN YOUNG</a></li>
                        <li><a href="#">C.BHAGAT</a></li>
                        <li><a href="#">R.BOND</a></li>
                        <li><a href="#">LEO.TOLS</a></li>
                        <li><a href="#">JAMES.JOY</a></li>
                    </ul>
                    </li>
                    <li><a href="#">CART</a></li>
                    <li><a href="#"><?php while($ro=mysqli_fetch_array($sql)){
    $name = $ro['username'];
    echo $name;
} ?></a>
                        <ul>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                </li>
                </ul>
            </nav>
        </div>
