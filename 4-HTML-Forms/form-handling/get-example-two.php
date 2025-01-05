<?php
include '../includes/header.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $letter = strtoupper($_GET['letter']);
    $names = [
        "Alice",
        "Bob",
        "Charlie",
        "David",
        "Eva",
        "Frank",
        "Grace",
        "Hannah",
        "Ivy",
        "Jack",
        "Katherine",
        "Liam",
        "Mason",
        "Nina",
        "Oscar",
        "Paul",
        "Quincy",
        "Rita",
        "Sam",
        "Tina",
        "Uma",
        "Victor",
        "Wendy",
        "Xander",
        "Yara",
        "Zane"
    ];
}
?>

<div class="tile">
    <h2>Names that begin with <?php echo $letter ?> are:</h2>
    <?php
    for ($i = 0; $i < count($names); $i++) {
        if ($names[$i][0] === $letter) {
            echo '<p>' . $names[$i] . '</p>';
        }
    }
    ?>
</div>


<?php
include '../includes/footer.php';
?>