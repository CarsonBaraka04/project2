<?php
require 'includes/db_connect.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $gender = $_POST["age"];
    $gender = "";
    foreach($gender as $row){
        $gender .= $row . ",";
    }

    $query = "INSERT INTO element VALUES('', '$name', '$gender', '$email', '$password')";
    mysqli_query($conn, $query);
    echo "<script> alert('Data Inserted Succecfully'); </script>";
    
}
?>

<?php include_once ("templates/heading.php"); ?>
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
        <div class="row">
            
                <form action="" action="" method="" autocomplete="off">
                    <label for="Name">Name</label>
                    <input type="text" name="name" required value="">
                    <br><br>

                    <select name="Gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Rather not say">Rather not say</option>
                    </select><br><br>

                    <label for="Email">Email</label>
                    <input type="email" name="email" required value="">
                    <br><br>

                    <label for="Password">Password</label>
                    <input type="password" name="password" required value="">
                    <br><br>

                    <label for="">Languages</label>
                        <input type="checkbox" name="languages[]" value="English">English
                        <input type="checkbox" name="languages[]" value="Swahili">Swahili
                        <input type="checkbox" name="languages[]" value="Spanish">Spanish
                    <br><br>
                    <button type="submit" name="submit">Submit</button>
                </form>
        </div><br><br>
<?php //include_once ("templates/side_bar.php"); ?>

<?php include_once ("templates/footer.php"); ?>