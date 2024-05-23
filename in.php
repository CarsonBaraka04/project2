<?php

echo"This is my first php code";//Displaying a sentence in the string

print"<br>";//Using <br> to break line

print"Today is <span style='color: #ff4856;text-transform:uppercase;'> Thursday";

print 1999;//This is an integer or a digit

print"<br>";//Using <br> to break line

print "5475";//This is a string

print"<br>";//Using <br> to break line

print date('1');//Display current day of the week

print"<br>";//Using <br> to break line

print date('d/m/Y', strtotime('+5 months'));

print"<br>";//Using <br> to break line

date_default_timezone_set("Africa/Nairobi");

print date('1, F jS Y H:i:s');

?>