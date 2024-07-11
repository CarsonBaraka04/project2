<?php
require_once ("includes/db_connect.php");
include_once ("templates/heading.php");
include_once ("templates/nav.php");

$messageId=mysqli_real_escape_string($conn, $_GET["messageId"]);

$spot_msg = "SELECT * FROM `messages` WHERE messageId = '$messageId' LIMIT 1";
$spot_msg_res = $conn->query($spot_msg);
$spot_msg_row = $spot_msg_res->fetch_assoc();

if(isset($_POST["update_message"])){
    $fn = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $mail = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject_line"]);
    $message = mysqli_real_escape_string($conn, $_POST["client_message"]);
    $messageId = mysqli_real_escape_string($conn, $_POST["messageId"]);

    $update_message = "UPDATE messages SET sender_name='$fn', sender_email='$mail', subject_line='$subject', text_message='$message' WHERE messageId='$messageId' LIMIT 1";

    if ($conn->query($update_message) === TRUE) {
        header("Location: view_messages.php");
        exit();
    } else {
        echo "Error: " . $update_message . "<br>" . $conn->error;
    }
}
?>

<div class="banner">
    <h1>Update Message</h1> 
</div>

<div class="row">
    <div class="content">
    <h1>Update Message</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fullname" required value="<?php print $spot_msg_row["sender_name"];?>"><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email_address" required value="<?php print $spot_msg_row["sender_email"];?>"><br><br>

        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="<?php print $spot_msg_row["subject_line"];?>"><?php print $spot_msg_row["subject_line"];?></option>
            <option value="Email Support">Email Support</option>
            <option value="eLearning Support">eLearning Support</option>
            <option value="AMS Support">AMS Support</option>
        </select><br><br>

        <label for="sb">Message:</label><br>
        <textarea name="client_message" id="" cols="30" rows="5" required><?php print $spot_msg_row["text_message"];?></textarea><br><br>
       
        <input type="submit" name="update_message" value="Update Message">
        <input type="hidden" name="messageId" value="<?php print $spot_msg_row["messageId"];?>">
    </form>
                </div>
<?php include_once ("templates/side_bar.php"); ?>
        </div>
<?php include_once ("templates/footer.php"); ?>