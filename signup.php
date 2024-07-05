<?php
require_once ("includes/db_connect.php");
include_once ("templates/heading.php");
include_once ("templates/nav.php");

if(isset($_POST["signup"])){
    $fn = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $mail = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $pass = mysqli_real_escape_string($conn, $_POST["passphrase"]);
    $genderId = mysqli_real_escape_string($conn, $_POST["genderId"]);
    $roleId = mysqli_real_escape_string($conn, $_POST["roleId"]);

// verify that the fullname contains only letters, space, and a signle quotion

// verify that the email has the correct format

if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    $_SESSION["wrong_email_format"] = "wrong email format";
    $_SESSION["error"] = "";
}

// verify that the email domain is authorized (strathmore.edu, gmail.com, yahoo.com, etc)

// verify that the email address does not exist already in the database

// verify that the username does not exist already in the database

// verify that the password is identical to the repeat password

// verify that the password length is between 4 and 8 characters

    if(!isset($_SESSION["error"])){
        $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, text_message) VALUES ('$fn', '$mail', '$subject', '$message')";

        if ($conn->query($insert_message) === TRUE) {
            header("Location: view_messages.php");
            exit();
        } else {
            echo "Error: " . $insert_message . "<br>" . $conn->error;
        }
    }
}
?>

<div class="banner">
    <h1>Sign Up</h1> 
</div>

<div class="row">
    <div class="content">
    <h1>Sign Up</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fullname" maxlength="50" required autofocus><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email_address" maxlength="50" required><br>
            <?php if(isset($_SESSION["wrong_email_format"])) { print '<span class="error_form">'.$_SESSION["wrong_email_format"].'</span>'; unset($_SESSION["wrong_email_format"]); } ?><br>

        <label for="un">Username:</label><br>
        <input type="text" id="un" placeholder="Username" name="username" maxlength="50" required><br><br>

        <label for="pass">Password:</label><br>
        <input type="password" id="pass" placeholder="Password" name="passphrase" required><br><br>

        <label for="gen">Gender:</label><br>
        <select name="genderId" id="gen" required>
            <option value="">--Select Gender--</option>

            <?php
                $sel_gen = "SELECT * FROM genders ORDER BY gender ASC";
                $sel_gen_res = $conn->query($sel_gen);
                while($sel_gen_row = $sel_gen_res->fetch_assoc()){
            ?>
                <option value="<?php print $sel_gen_row["genderId"]; ?>"><?php print $sel_gen_row["gender"]; ?></option>
            <?php
            }
            ?>
        </select><br><br>

        <label for="rol">Roles:</label><br>
        <select name="roleId" id="rol" required>
            <option value="">--Select Role--</option>

            <?php
                $sel_rol = "SELECT * FROM roles ORDER BY role ASC";
                $sel_rol_res = $conn->query($sel_rol);
                while($sel_rol_row = $sel_rol_res->fetch_assoc()){
            ?>
                <option value="<?php print $sel_rol_row["roleId"]; ?>"><?php print $sel_rol_row["role"]; ?></option>
            <?php
            }
            ?>
        </select><br><br>
       
        <input type="submit" name="signup" value="Sign Up">
    </form>
                </div>
<?php include_once ("templates/side_bar.php"); ?>
        </div>
<?php include_once ("templates/footer.php"); ?>