<?php
include '../includes/header.php';
include '../includes/utils.php';
?>

<main>
    <h2>Create an account to access the game.</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['exists'])) {
        echo '<h2>This email is already in use</h2>';
    }
    ?>

    <form action="../processes/createAccount.php" method="POST" class="account">
        <label for="username">Username</label>
        <input type="text" name="username" required id="">
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" required id="">
        <br>

        <label for="password">Password</label>
        <input type="password" name="password" required id="">
        <br>

        <input type="submit" value="Create Account">
    </form>
    <h3>Already have an account?</h3>
    <a href="loginForm.php">Sign in</a>
</main>

<?php
include '../includes/footer.php';
?>