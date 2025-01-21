<?php
include 'includes/header.php';
include 'includes/utils.php';
?>

<main>
    <?php
    if (isset($_SESSION['username'])) {
        echo '<h2>Hello, ' . $_SESSION['username'] . '</h2>';
    } else {
        echo <<<html
            <a href = 'pages/logInForm.php'>Sign In</a>
        html;
    }
    ?>
    <p>"Who's That Pokémon?" is an interactive guessing game inspired by the classic segment from the Pokémon TV series.
        Players are presented with a silhouette of a Pokémon and must guess its name based on the shape. As they
        progress, the game becomes more challenging, testing their knowledge of Pokémon from various generations. To
        play the game, you’ll need to sign in with your account. This ensures your progress is saved, and you can
        compete with friends for high scores. Signing in also unlocks additional features, like tracking your best
        streaks and accessing exclusive hints. Dive in and see how many Pokémon you can recognize!</p>

</main>

<?php
include 'includes/footer.php';
?>