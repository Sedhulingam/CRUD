<?php
 include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>CRUD</title>
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Create</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SI.No</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from crud";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $name=$row['name'];
            $password=$row['password'];
            echo '<tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$password.'</td>
            <td>
                <button class="btn btn-primary "><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
          
            </tr>';
        }
        
    }
    ?>
    </tbody>
   </table>
</div>    
</body>
</html>