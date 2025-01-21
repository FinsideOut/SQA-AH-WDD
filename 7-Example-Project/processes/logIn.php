<?php
session_start();
include('../includes/utils.php');
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['identifier'], $_POST['password'])) {
    $identifier = sanitizeInput($_POST['identifier']);
    $password = sanitizeInput($_POST['password']);
    $queryString = <<<SQL
            SELECT * FROM user
            WHERE username = "$identifier" 
            OR email = "$identifier";
        SQL;
    $result = runQuery($queryString);

    if (mysqli_num_rows($result) == 0) {
        header('Location:../pages/LogInForm.php?exists=false');
    } else {
        $row = mysqli_fetch_assoc($result);
        if (!password_verify($password, $row['password'])) {
            header('Location:../pages/LogInForm.php?password=false');
        } else {
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['highStreak'] = $row['streak'];
            $_SESSION['currentStreak'] = 0;
            $_SESSION['numGuesses'] = $row['numGuesses'];
            $_SESSION['numCorrect'] = $row['numCorrect'];
            header('Location:../index.php');
            exit();
        }

    }
}
?>