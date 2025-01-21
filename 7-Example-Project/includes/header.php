<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="styles/style.css">

    <title>Document</title>
</head>

<body>
    <header>
        <h1>Guess That Pokemon!</h1>
        <?php
        if (isset($_SESSION['username'])) {
            echo <<<html
                       
                <nav>
                    <ul>
                        <li><a href="/SQA-AH-WDD/7-Example-Project/index.php">Home</a></li>
                        <li><a href="/SQA-AH-WDD/7-Example-Project/pages/game.php">Play!</a></li>
                        <li><a href="/SQA-AH-WDD/7-Example-Project/pages/scores.php">Scoreboard</a></li>
                        <li class = "right"><a href="/SQA-AH-WDD/7-Example-Project/processes/logOut.php">Log Out</a></li>
                    </ul>
                </nav>
                <div class = "user-details">
                    <h2>Hello, {$_SESSION['username']}</h2>
                    <p>Current Streak: {$_SESSION['currentStreak']}</p>
                    <p>Highest Streak: {$_SESSION['highStreak']}</p>
                    <p>Pokemon Guessed: {$_SESSION['numGuesses']}</p>
                    <p>Guessed Correctly: {$_SESSION['numCorrect']}</p>
                </div>

            html;
        } else {
            echo <<<html
               
                <nav>
                    <ul>
                        <li><a href="/SQA-AH-WDD/7-Example-Project/index.php">Home</a></li>
                        <li><a href="/SQA-AH-WDD/7-Example-Project/pages/game.php">Play!</a></li>
                        <li><a href="/SQA-AH-WDD/7-Example-Project/pages/scores.php">Scoreboard</a></li>
                        <li class = "right"><a href="/SQA-AH-WDD/7-Example-Project/pages/logInForm.php">Sign in</a></li>
                    </ul>
                <nav>
            html;
        }
        ?>
        </ul>
        </nav>
    </header>