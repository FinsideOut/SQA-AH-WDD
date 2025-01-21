<?php
include('../includes/header.php');
include('../includes/utils.php');
?>


<!-- TASK -->
<div class="tile">
    <h2>Log In</h2>
    <!-- remember to change the action to the correct process -->
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username">
        <br>

        <label for="password">Password</label>
        <input type="text" name="password">
        <br>

        <input type="submit" value="Log In">

    </form>
    <h3>Don't have an account?</h3>
    <a href="createAccountForm.php">Create an Account</a>
</div>




<?php
include('../includes/footer.php');
?>