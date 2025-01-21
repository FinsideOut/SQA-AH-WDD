<?php
include('includes/header.php');
include('includes/utils.php');
?>

<!-- CODE EXAMPLE -->
<div class="tile">
    <h2>Code Example</h2>
    <?php
    // Only display this if the session variable 'name' has been set
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
        echo <<<html
            <p>Hello, $name</p>
            <a href = "processes/logOut.php">Log Out</a>
        html;
    } else {
        // only display this if the GET variable 'name' has been set
        if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["name"])) {
            $name = $_GET['name'];
            echo "<p>$name has successfuly logged out</p>";
        }
        // display this if the session variable 'name' has not been set
        echo <<<html
            <form action="processes/example.php" method = "POST">
                <label for="nameInput">Enter Name</label>
                <input type="text" name="nameInput">
                <br>
                <input type="submit" value="Log In">
            </form>
        html;
    }
    ?>
</div>

<!-- TASK -->
<div class="tile">
    <h2>Task</h2>
    <p>In this task you will be writing code across many pages.</p>
    <p>Your goal is to create a secure log in system using session variables and a database.</p>
    <p>In each file you need to edit, there is comments to guide you.</p>
    <a href="pages/LogInForm.php">Click to go to task</a>
</div>




<?php
include('includes/footer.php');
?>