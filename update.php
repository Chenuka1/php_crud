<?php

require 'connect.php';
$id=$_GET['updateid'];

$sql="select * from `crud` where id=$id;";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST["submit"])){
    $id1=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    //This sql is used to update the records

    $sql="update `crud` set id='$id1',name='$name', mobile='$mobile',password='$password' where id=$id;";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:display.php");
    }
    else{
        die(mysqli_error($con));

    }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <div class="container my-5">
        <form method="POST">
          <div class="mb-3">
            <label >name</label>
            <input type="text" class="form-control" 
            placeholder="Enter your name"
            name="name">
    
           </div>
           <div class="mb-3">
            <label >Email</label>
            <input type="email" class="form-control" 
            placeholder="Enter your email"
            name="email">
    
           </div>
           <div class="mb-3">
            <label >mobile</label>
            <input type="text" class="form-control" 
            placeholder="Enter your mobile number"
            name="mobile">
    
           </div>
           <div class="mb-3">
            <label >Password</label>
            <input type="password" class="form-control" 
            placeholder="Enter your password"
            name="password">
    
           </div>
  
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    
</html>