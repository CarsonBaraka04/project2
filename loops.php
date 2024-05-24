<h1>loops</h1>
<?php
//While-loop

$in = 0;
while($in < 10){
    print $in . "<br>";
    $in++;
}
?>

<h4>do-while-loop</h4>
<?php

//do-while loop
    $s = 5;
    do{
        print $s . "<br>";
        $s++;
    }while($s < 15);

?>


<h4>For loop</h4>
<?php

    //for loop
    for($f=45; $f<55; $f++){
        print $f . "<br>";
    }

?>


<h4>Foreach</h4>
<?php

//Foreach
$months = ["January", "February", "March", "April", "May","June", "July", "August", "September", "October", "November", "December"];

foreach($months AS $month){
    print $month . "<br>";
}

?>




