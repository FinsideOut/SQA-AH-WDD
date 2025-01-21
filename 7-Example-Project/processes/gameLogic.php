<?php
session_start();
include('../includes/utils.php');
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    // get form response
    $answer = $_GET['answer'];
    $pokemonID = $_GET['pokemonID'];
    $name = fetchName($pokemonID);

    if (strtolower($answer) == strtolower($name)) {
        $correct = true;
        $_SESSION['numGuesses'] += 1;
        $_SESSION['numCorrect'] += 1;
        $_SESSION['currentStreak'] += 1;
        if ($_SESSION['currentStreak'] > $_SESSION['highStreak']) {
            $_SESSION['highStreak'] = $_SESSION['currentStreak'];
        }
        // UPDATE DATABASE
        $queryString = <<<SQL
                UPDATE user
                SET streak = {$_SESSION['highStreak']},
                numGuesses = {$_SESSION['numGuesses']},
                numCorrect = {$_SESSION['numCorrect']}
                WHERE email = '{$_SESSION["email"]}';
            SQL;
        runQuery($queryString);
    } else {
        $correct = false;
        $_SESSION['numGuesses'] += 1;
        $_SESSION['currentStreak'] = 0;
        // UPDATE DATABASE
        $queryString = <<<SQL
                UPDATE user
                SET numGuesses = {$_SESSION['numGuesses']}
                WHERE email = '{$_SESSION["email"]}';
            SQL;
        runQuery($queryString);
    }
    header("Location: ../pages/showAnswer.php?answer={$answer}&pokemonID={$pokemonID}&correct={$correct}");
    exit;
}
?>