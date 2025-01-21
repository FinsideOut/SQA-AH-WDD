<?php
session_start();
$name = $_SESSION['name'];
session_unset();
session_destroy();
header("Location: ../index.php?name=$name");
exit;
?>