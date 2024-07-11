
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    

</html>
<?php require_once ("templates/nav.php"); ?>
<style media="screen">
    label{
        display:block;
        content:center;
    }
</style>
        <div class="banner">
            <h1>Sign In to TEMA library</h1> 
        </div>
        <div class="containerform">
  <form method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="username" class="form-label">Username</label>
      <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <button type="submit"  name="submit" class="btn btn-primary">Sign in</button>
    <a href="signin.php">Sign Up</a>

  </form>
  </div>
<?php //include_once ("templates/side_bar.php"); ?>
</body>

<?php include_once ("templates/footer.php"); ?>
</html>
<?php
    include 'includes/db_connect.php';


    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $username =$_POST['username'];
    
    
    
    try{    
    
      $sql = "SELECT  `Name`, `username`   FROM `elements` WHERE `Name` = '$name' AND `username` = '$username' ";
    
      $result = $conn->query($sql);
    
      $row = mysqli_num_rows($result);
    
      if($row){
        header("Location: index.php");
        exit(0);
      }
      else{
        echo "<script>alert('error, tyr again')</script>";
        header("Location: signup.php");
      }
    
    }catch(msqli_sql_exception $e){
      echo "<script>alert('error')</script>" .conn->error;
    }
        
    }

    
    }    

?>

