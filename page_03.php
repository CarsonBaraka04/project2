<?php
session_start();

if(isset($_SESSION["fname"]))
{
    print'Yes the session is alive';
    print'<br><a href="page_04.php">Destroy the session</a>';
}else{
    print'No the session was destroyed';
}
print $fname;

?>
<br>
<a href="page_02.php">Go to page 02</a>