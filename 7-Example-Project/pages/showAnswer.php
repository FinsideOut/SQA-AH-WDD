<?php
include '../includes/header.php';
include '../includes/utils.php';
?>

<main class="gameArea">
    <?php
    $pokemonID = $_GET['pokemonID'];
    $name = fetchName($pokemonID);
    $imageUrl = fetchImage($pokemonID);

    if ($_GET['correct'] == true) {
        echo '<h2>Correct</h2>';
    } else {
        echo '<h2>Incorrect</h2>';
        echo "<h2>You Answered " . ucfirst($_GET['answer']) . "</h2>";
    }

    echo <<<html
        <h2>This pokemon is $name </h2>;
        <div class="imageContainer">
            <img src="../images/pokeball.png" class="guess-bg" alt="">
            <img src="{$imageUrl}" class="pokemonImage" alt="">
        </div>
        <a href = 'game.php'> Play again! </a>
    html;

    ?>
</main>

<?php
include '../includes/footer.php';
?>