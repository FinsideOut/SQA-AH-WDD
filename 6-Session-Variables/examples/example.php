<?php
session_start();
include('../includes/utils.php');
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['nameInput'])) {
    $name = sanitizeInput($_POST['nameInput']);
    $_SESSION['name'] = $name;
    header('Location: ../index.php');
    exit();
}
?>