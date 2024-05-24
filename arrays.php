<?php
    //Arrays

    //Indexed or numeric array

    $colors = ["Black", "Green", "Yellow"]; 
   print_r ($colors[1]);

    print_r($colors);//print_r used to  display array elements

?>
<br>

<?php
    $user = array("Alex", "Peter", "Anne");
    print $user[2];//print used to display elements of a string

?>

//Preserve
<pre>
    <?php print_r($user);?>
</pre>

//Associative arrays
<?php
    $user_data = [
        "Fullname" => "Alex Okama",
        "email" => "AOkama@gmail.com",
        "phone" => "+25478458965"
    ];
    print $user_data["email"];
?>

<pre>
    <?php print_r($user_data);?>
</pre>











