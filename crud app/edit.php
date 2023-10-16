<?php

use LDAP\Result;

include "db_connection.php";

$id=$_GET['id'];

if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $emai=$_POST['email'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];


    $sql="UPDATE `crud` SET `name`='$name',`email`='$email',`address`='$address',`gender`='$salary' WHERE id=$id";

     $result=mysqli_query($conn,$sql);


     if($result){
        header("location:index.php?msg=new record created");
     }
     else{
        echo"failed :". mysqli_error($conn);
     }
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff73;" >curd</nav>

<div class="container">
    <div class="text center mb-4 ">
        <h3>edit user info</h3>
        <p class="textmuted">Edit data</p>
    </div>

    <?php

    $id=$_GET['id'];
    $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1" ;
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
    <div class="container d-flex justify-content-center ">
        <form action="" method="post" style="width: 50vw; min-width:300px;">
    
    <div class="row">
        <div class="col">
            <label class="form label">name</label>
             <input type="text"class="form-control" name="name" value="<?php echo $row['name'] ?>">
            <label class="form label">email</label>
             <input type="text"class="form-control" name="email"value="<?php echo $row['email'] ?>">
            <label class="form label">address</address></label>
             <input type="text"class="form-control" name="address"value="<?php echo $row['address'] ?>">
            <label class="form label">salary</address></label>
             <input type="text"class="form-control" name="salary"value="<?php echo $row['gender'] ?>">
           
        
        
        </div>
       
    </div>
           
            <button type="submit" class="btn btn-success"name="submit">UPDATE</button>
           </div>
    </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>