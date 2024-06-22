<?php include_once("templates/heading.php"); ?>
<?php include_once ("templates/nav.php"); ?>    

<div class="banner">
    <h1>Banner</h1> 
</div>

<div class="row">

    <div class="content">
    <h1>Forms</h1>
    <form action="" method="post" class="contacts_form">

        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fn"><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="em"><br><br>
        

            <br>
            <textarea name="" id="" cols="30" rows="5"></textarea>

            <!-- <br><br>
            <select name="" id="">
                <option value="">--Select Gender--</option>
                <option value="">Female</option>
                <option value="">Male</option>
                <option value="">Rather not say</option>
            </select> -->

            <br><br>

            <input type="submit" value="Send Message">

                </div>
<?php include_once("templates/side_bar.php"); ?>
        </div>
<?php include_once("templates/footer.php"); ?>