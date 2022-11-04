<?php
include "connect.php";
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $password=$_POST['password'];

    $sql="insert into crud(name,password) values('$name','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        
        header("location:display.php");
    }
    else{
        die(mysqli_error($conn));
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>CRUD</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password" autocomplete="off">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </body>
</html>