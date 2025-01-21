<?php
include('../includes/header.php');
include('../includes/utils.php');
?>


<!-- TASK -->
<div class="tile">
    <h2>Create Account</h2>
    <!-- remember to change the action to the correct process -->
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username">
        <br>

        <label for="email">Email</label>
        <input type="text" name="email">
        <br>

        <label for="password">Password</label>
        <input type="text" name="password">
        <br>

        <input type="submit" value="Create Account">

    </form>
    <h3>Already have an account?</h3>
    <a href="logInForm.php">Create an Account</a>
</div>




<?php
include('../includes/footer.php');
?>