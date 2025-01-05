<?php
include '../includes/header.php';
?>

<?php
// the selection ensures that the form has been submitted (in case the user tries to this url without submitting the form)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // variables with an underscore are "super global variables", which can be accessed anywhere
    // the $_POST[] parameters must mach the input name defined in the HTML
    $userName = $_POST['userName'];
    $password = $_POST['password'];
}
?>

<!-- here we render the data in HTML -->
<div class="tile">
    <h2>Hi, <?php echo $userName ?></h2>
    <p>Your password is safe with us.</p>
    <p>jk its <?php echo $password ?></p>
</div>

<?php
include '../includes/footer.php';
?>