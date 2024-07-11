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

<?php
//Multidimensional arrays
    $user_details = [
        
        "Director" => array(
            "Fullname" => "Alex Okama",
            "address" => "Mada",
            "email" => "AOkama@gmail.com",
            "phone" => [
                "home" => "+2548458565",
                "work" => "+2548451265",
                "mobile" => "+2548458965"
                ]
            ),

        "Secretary" => array(
            "Fullname" => "Mercy Karimi",
            "address" => "Pavlov",
            "email" => "Mkarimi@gmail.com",
            "phone" => [
                "home" => "+254787654312",
                "work" => "+254712345678",
                "mobile" => "+254745649273"
                ]
            ),

        "Manager" => array(
            "Fullname" => "Felix Ouma",
            "address" => "Jaber",
            "email" => "FOuma@gmail.com",
            "phone" => [
                "home" => "+254740383637",
                "work" => "+25473836373840",
                "mobile" => "+254734467268" 
                ]
            )
    ]
?>  









