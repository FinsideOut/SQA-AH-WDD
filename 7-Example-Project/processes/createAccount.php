<?php
session_start();
include('../includes/utils.php');
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    $username = sanitizeInput($_POST['username']);
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']);

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $queryString = <<<SQL
            SELECT email FROM user
            WHERE email = "$email";
        SQL;
    $result = runQuery($queryString);

    if (!mysqli_num_rows($result) == 0) {
        header('Location:../pages/createAccountForm.php?exists=true');
        exit();
    } else {
        $queryString = <<<SQL
            INSERT INTO user(email, username, password)
            VALUES("$email", "$username", "$hashedPassword");
        SQL;
        runQuery($queryString);
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['highStreak'] = 0;
        $_SESSION['currentStreak'] = 0;
        $_SESSION['numGuesses'] = 0;
        $_SESSION['numCorrect'] = 0;
        header('Location:../index.php');
        exit();
    }
}
?>