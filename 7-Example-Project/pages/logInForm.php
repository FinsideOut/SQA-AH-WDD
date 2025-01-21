<?php
include '../includes/header.php';
include '../includes/utils.php';
?>

<main>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "GET" && (isset($_GET['exists']) || isset($_GET['password']))) {
        // Check if the 'exists' parameter is set and false
        if (isset($_GET['exists']) && $_GET['exists'] == 'false') {
            echo '<h2>No user with those details</h2>';
        }
        // Check if the 'password' parameter is set and false
        elseif (isset($_GET['password']) && $_GET['password'] == 'false') {
            echo '<h2>Incorrect password</h2>';
        }
    }
    ?>

    <form action="../processes/logIn.php" method="POST" class="account">
        <label for="identifier">Username or Email</label>
        <input type="text" name="identifier" required id="">
        <br>

        <label for="password">Password</label>
        <input type="password" name="password" required id="">
        <br>

        <input type="submit" value="Sign In">
    </form>

    <h3>Don't have an account?</h3>
    <a href="createAccountForm.php">Sign up</a>
</main>

<?php
include '../includes/footer.php';
?>