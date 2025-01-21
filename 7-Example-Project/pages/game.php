<?php
include '../includes/header.php';
include '../includes/utils.php';
?>

<main class="game">

    <?php
    if (isset($_SESSION['username'])) {
        $pokemonID = rand(1, 151);
        $imageUrl = fetchImage($pokemonID);

        echo <<<HTML
            <section class="gameArea">
                <h2>Who's that Pokemon!?</h2>
                <form action="../processes/gameLogic.php" method="GET">

                    <div class="imageContainer">
                        <img src="../images/guess-bg.gif" class="guess-bg" alt="Background Image">
                        <img src="{$imageUrl}" class="pokemonImage silhouette" alt="Pokémon Image">
                    </div>
                    <input type="hidden" name="pokemonID" value="{$pokemonID}">
                    <input type="text" name="answer" required placeholder="Who's that Pokemon!?">
                    <br>
                    <input type="submit" value="Confirm Answers">
                </form>
            </section>
        HTML;
    } else {
        echo <<<HTML
            <h3>Sign In to play the game</h3>
            <br>
            <a href="loginForm.php">Sign in</a>
        HTML;
    }
    ?>
</main>

<?php
include '../includes/footer.php';
?>