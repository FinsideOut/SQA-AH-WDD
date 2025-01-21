<?php
include('../includes/header.php');
include('../includes/utils.php');
?>


<!-- TASK -->
<div class="tile">
    <h2>Confirmation</h2>
    <p>Here you will display different things, depending on how this page was accessed...</p>
    <?php
    // if GET var "exists" or "password" are set:
    //      display "user already exists" if GET variable "exists" == true
    //      display "user doesn't exist" if GET variable "exists" == false
    //      display "wrong password" if GET variable "password" == false
    // if session var "username" is set:
    //      display "Hello" + username
    //      display hyperlink to logOutProcess.php
    
    ?>
    <a href="../session-variables.php">Home</a>
</div>




<?php
include('../includes/footer.php');
?>