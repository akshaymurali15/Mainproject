<?php

include 'config.php';

if(isset($_POST['username'])){
    $dept = $_POST['username'];

    $query = "select * from department where Dept_name='$dept'";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);

        $count = $row['Dept_name'];

        if(mysqli_num_rows($result) > 0 ){
            $response = "<span style='color: white;'>Not Available.</span>";
        }

    }else{
      $response = "<span style='color: green;'>Available.</span>";
    }

    echo $response;
    die;
}
