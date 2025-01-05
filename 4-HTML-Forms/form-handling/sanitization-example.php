<?php include '../includes/header.php'; ?>

<?php
// A function to sanitize form data
function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}
?>

<div class="tile">
    <h2>Sanitized name:</h2>
    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = sanitizeInput($_POST["name"]);
            echo "Name: " . $name;
        }
        ?>
    </p>
</div>


<?php include '../includes/footer.php'; ?>