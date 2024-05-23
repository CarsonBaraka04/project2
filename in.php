<?php

echo"This is my first php code";//Displaying a sentence in the string

print"<br>";//Using <br> to break line

print"Today is <span style='color: #ff4856;text-transform:uppercase;'> Thursday";

print 1999;//This is an integer or a digit

print"<br>";//Using <br> to break line

print "5475";//This is a string

print"<br>";//Using <br> to break line

print date('l');//Display current day of the week

print"<br>";//Using <br> to break line

print date('d/m/Y', strtotime('+5 months'));

print"<br>";//Using <br> to break line

date_default_timezone_set("Africa/Nairobi");

print date('l, F jS Y H:i:s');



//Creating (Declaring) a variable

$fname = "Alex";//Declaration of a variable or a string or group of words

$yob = 1999;//Declaration of digit or an integer

print"<br>";//Using <br> to break line

print $fname;

print"<br>";//Using <br> to break line

$user_dob = "1999-05-26";

echo $fname . " was born in " . $yob;

print"<br>";//Using <br> to break line

echo $fname . " was actually born on " . date('l, F jS Y H:i:s');

echo $yob;

print"<br>";//Using <br> to break line

$current_year = date('Y');

echo $current_year;

print"<br>";//Using <br> to break line

$age = $current_year - $yob;//Using subtraction to find the actual age

print $fname . " is " . $age . " years old.";

print"<br>";//Using <br> to break line

print "45 + 96";

print"<br>";//Using <br> to break line

print 45 + 96;

$birthday = new DateTime($user_dob);
$today = new DateTime('today');

$interval = $birthday->diff($today);

echo '<pre>';
print_r($interval);
echo'</pre>';

print"<br>";//Using <br> to break line

print $fname . " is, actually, " . $interval->y . " years " . $interval->m . " months, and " . $interval->d . "days old.";

print"<br>";//Using <br> to break line

$adult_age = 18;
if($interval->y > $adult_age){
    print $fname . " is na adult";//event in block to be executed if the condition is true
}else{
    print $fname . " is not an adult";//event in the block to be executed if the condition is false
}



//Variable Characteristics

$last_name = "Okama";

echo "My last name is $last_name";

print"<br>";//Using <br> to break line

echo 'My last name is ' . $last_name;

print"<br>";//Using <br> to break line

echo "Today is " . date('l');

print"<br>";//Using <br> to break line


//Other ways to declare variables
$call['lname'] = "Okama";
print $call['lname'];

print"<br>";//Using <br> to break line

define('LNAME', 'Okama');
echo LNAME;


?>




