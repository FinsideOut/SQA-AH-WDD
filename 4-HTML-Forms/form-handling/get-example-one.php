<?php
include '../includes/header.php';
?>

<!-- to use get we just change the super global variable -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $color = $_GET['color'];
}
?>

<div class="tile">
    <h2>Thanks for your response.</h2>
    <p>Your favourite colour is <?php echo $color ?></p>
</div>

<?php
include '../includes/footer.php';
?>