<?php 
include 'db.php';
include_once 'sample.php'; 
  
  if(isset($_POST['submit']))
  {
    $catname = $_POST['catname'];
     if($catname==""){


     }

     else
     {

      $myqry6="SELECT Type_name  FROM `book-type`  where Type_name='$catname'";
    $myres6=mysqli_query($conn,$myqry6);
    $cou=mysqli_num_rows($myres6);
    if($cou>0)
    {
        echo "<script>alert('Category already exists') </script>"; 
    } else{
        
        
        $sql="INSERT INTO `book-type`(`Type_name`) VALUES ('$catname')";
        mysqli_query($conn,$sql);
        echo "<script>alert('Category added') </script>";
        // header("location: add_books.php");   
      }

     }
    
  }
 
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="adminlte.css?v=<?php echo time(); ?>">
<style>
  .addcat{
    position: absolute;
    margin: 10% 0 0 40%;
    background-color: white;
    box-shadow: 5px 5px 5px 5px;
    padding: 100px 125px 100px 125px ;
  }
  .submit{
    float:right;
    width: 100px;
    height: 25px;
    margin: 0 24px;
    padding: -10px 10px 15px 10px;
  } 
</style>
</head>

<body>
<div class="addcat">
<form method="POST" action="#">
  <h1>Add new Category</h1><br><br>
    <label>Category name:</label>
    <input type="text" name="catname" id="catname" pattern="[A-Z]*"><br><br>
    <input type="submit" name="submit" value="Add" class="submit" required>
</form>
</div> 
</body>

</script>
</html>

