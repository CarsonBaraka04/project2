<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
  <div class="container-fluid">
    <?php
      include 'templates/nav.php';
    ?>
   
      
  <div class="containerform">
  <form method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Sign Up</button>
    <a href="signin.php">Sign Up</a>

  </form>
  </div>
  
      
    
  </div>

</body>
</html>

<?php

  require_once("includes/db_connect.php");

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username =$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
  
  
    try{
  
      $sql = "INSERT INTO `elements`(`UserId`, `Name`, `username`, `Email`, `Password`) VALUES ('$userId','$name','$username','$email','$password')";
   
      $result= $conn->query($sql);
  
      if($result){
        header('Location: signin.php');
        exit(0);
      }
      else{
        echo "<script>alert('error, tyr again')</script>";
        header('Location: signup.php');
      }

    
    }catch(msqli_sql_exception $e){
      echo "<script>alert('error')</script>" .conn->error;
    }
  }
}
  
  

?>