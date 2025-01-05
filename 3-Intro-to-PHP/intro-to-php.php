<!-- heart emoji: &#10084;&#65039; -->
<!-- Star Emoji &#10024; -->
<!-- Question mark Emoji: &#10067; -->
<!-- Penicl Emoji: &#9999;&#65039; -->
<!-- Exclamation Mark Emoji: &#10071; -->
<!-- Sad face emoji: &#128546; -->
<!-- Computer emoji: &#x1F4BB; -->
<!-- eyes emoji: &#x1F440; -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../0-Introduction/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../0-Introduction/favicon_io/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../0-Introduction/favicon_io/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="apple-touch-icon" href="../0-Introduction/favicon_io/apple-touch-icon.png">

    <link rel="stylesheet" href="../0-Introduction/style.css">
    <link rel="stylesheet" href="../2-HTML-Tables/table-style.css">
    <link rel="stylesheet" href="style.css">
    <title>WDD Demos</title>
</head>

<body>
    <header>
        <div class="image-container no-print">
            <img src="../0-Introduction/img/logo.png" alt="">
        </div>
        <div class="main-nav">
            <h1 class="main-heading">Advanced Higher WDD</h1>
            <nav>
                <ul>
                    <li><a href="../1-Media-Queries/media-queries.html">Media Queries</a></li>
                    <li><a href="../2-HTML-Tables/html-tables.html">Tables</a></li>
                    <li><a href="../3-Intro-to-PHP/intro-to-php.php" class="current-page">PHP</a></li>
                    <li><a href="../4-HTML-Forms/html-forms.php">Forms</a></li>
                    <li><a href="../5-Connecting-a-Database/connecting-to-a-database.php">
                            Databases</a>
                    </li>
                    <li><a href="../6-Session-Variables/session-variables.php">Session Variables</a></li>
                    <li><a href="../7-Example-Project/example-project.php">Example Project</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- NOTES -->
        <div class="tile">
            <h2> &#9999;&#65039; What is PHP?</h2>
            <p>PHP stands for PHP Hypertext Preprocessor. Its a circular acronym. ¯\_(ツ)_/¯</p>


            <p>PHP is a server-side scripting language essential for handling tasks like managing databases,
                processing form submissions, and generating tailored content for users. Although PHP is now an older
                language, it still powers <b>80% of all web pages.</b>
            </p>
            <div class="image-container">
                <img src="img/php-logo.png" width="200px" alt="">
            </div>
            <p>If you are interested in a career in full stack
                or back end web development, PHP is <b>THE</b> best thing you can spend your time on <i>(after HTML, CSS
                    and JS, obviosuly).</i></p>
            <hr>
            <div class="tile-links">
                <a href="https://www.w3schools.com/php/" target="_blank">H3 Schools</a>
                <a href="https://www.youtube.com/watch?v=m52ljs78S24&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&ab_channel=DaniKrossing"
                    target="_blank">YouTube</a>
            </div>
        </div>
        <div class="tile">
            <h2>&#10071; Client Side Vs Server Side &#10071; </h2>
            <p><b>JavaScript</b> is a <b>client side</b> scripting language.</p>
            <p>This means that the code runs directly in the browser. You can view the Javascript of any page by
                inspecting it. For this reason JavaScript is <b>not secure</b> and should be used <b>only for user
                    experience</b>, or "front end" development. Javascript is great for adding animations or creating
                reusable modules with frameworks React JS or Next Js, but should never be used to handle sensitive user
                data or make secure connections (for example, to a database). </p>
            <div class="image-container">
                <img src="img/client-vs-server.webp" width="500px" alt="">
            </div>
            <p><b>PHP</b> is a <b>server side</b> scripting language.</p>
            <p>This means that the code is interpereted on the server, which then sends the resulting HTML to the
                browser to
                be rendered. The browser never sees the raw source code. This
                means PHP can be used to make secure connections to databases and handle sensitive user information.</p>
            <hr>
            <div class="tile-links">
                <a href="https://www.youtube.com/watch?v=XBu54nfzxAQ&ab_channel=SuperSimpleDev" target="_blank">Backend
                    Explained</a>
            </div>
        </div>

        <!-- CODE EXAMPLE 1 -->
        <div class="tile">
            <h2>&#x1F440; Code Examples</h2>
            <p>We can write php code between opening php tags.</p>

            <!--Pay attention to the syntax with the ? -->
            <?php
            echo '<p>The echo function allows us to display html snippets.</p>';
            ?>
            <!-- Arn't otters just ADORABLE <3 -->

            <?php
            echo '<p> We can even split ';
            echo 'echoes across multiple lines, if we need to.</p>';
            ?>
            <!-- "echo" is kind of like phps version of print() in python. -->
        </div>

        <!-- TASK 1 -->
        <div class="tile">
            <h2>&#10067; Task One</h2>
            <p>Write some php code below that uses echo to display the name of Mr Williamson's Favourite animal.</p>
            <h3>Your code here</h3>
            <!-- YOUR CODE STARTS -->

            <!-- YOUR CODE ENDS -->
        </div>

        <!-- CODE EXAMPLE 2 -->
        <div class="tile">
            <h2>&#x1F440; Using Variables</h2>

            <?php
            // use $ to define and access vars
            $thing = 'language';
            $otherThing = 'variables';

            // use . to concatenate strings
            $message = 'Like any other programming ' . $thing . ', we can use ' . $otherThing . ' in php.';
            // if you want to echo the variable using HTML, you need to escape the string
            echo '<p>' . $message . '</p>';
            ?>

            <!-- in this example, we make the php a child element of the parapgraph. -->
            <!-- notice how much neater the echo line is -->
            <p>
                <?php
                $a = 3;
                $b = 4;
                $c = $a * $b;
                echo $a . ' times ' . $b . ' is ' . $c . '...';
                ?>
            </p>
            <p>Use the link below to learn more about operators in PHP</p>
            <hr>
            <div class="tile-links">
                <a href="https://www.w3schools.com/php/php_operators.asp" target="_blank">PHP Operators</a>
            </div>
        </div>

        <!-- TASK 2 -->
        <div class="tile">
            <h2>&#10067; Task Two</h2>
            <p>Using php variables, write code to calculate s, when v = 0, t = 3.2 and a = 9.8</p>
            <p>The result should be echoed to the browser.</p>
            <div class="image-container">
                <img src="img/displacement.png" alt="" width="400px">
                <p>The equation for displacement.. I think?</p>
            </div>
            <h3>Your code here</h3>
            <!-- YOUR CODE STARTS -->

            <!-- YOUR CODE ENDS -->
        </div>

        <!-- CODE EXAMPLE 3 -->
        <div class="tile">
            <h2>&#x1F440; Selections</h2>

            <!-- Selections are pretty much the same as in python, but we need curly brackets -->
            <?php
            $age = 17;
            if ($age < 17) {
                $message = "I can't drive :(";
            } elseif ($age == 17) {
                $message = "I could learn to drive";
            } else {
                $message = "I can drive";
            }
            ?>

            <!-- Pay close attention to how we have split up the logic above from the display below.
                Once a variable is set up, you can access it anywhere below it in the file.
                This is a blessing and a curse.. we've used $message twice in this file.
                This could casue problems if youre not careful... -->
            <p>
                <?php
                echo 'I am ' . $age . ' years old and ' . $message;
                ?>
            </p>
        </div>

        <!-- CODE EXAMPLE 4 -->
        <div class="tile">
            <h2>&#x1F440; Fixed Loops</h2>
            <p>The syntax for fixed loops is a bit different, but you get used to it quick.</p>
            <div class="scrollable">
                <?php
                // for (start here; loop while this is true; increment in this value)
                // in this example.. (start at 0; loop while i <100; add 1 to i each loop)
                for ($i = 0; $i < 100; $i++) {
                    echo '<p>i is equal to ' . $i . '</p>';
                    echo '<br>';
                }

                // the scroll bar is added in the style.css file in this folder
                ?>
            </div>
        </div>

        <!-- TASKS 3, 4 and 5 -->
        <div class="tile">
            <h2>&#10067; Tasks 3, 4 and 5</h2>
            <!-- TASK 3 -->
            <h3>Task 3</h3>
            <p>Using php, echo all of the odd numbers between 500 and 600.</p>
            <p><i>Hint: fixed loop, selection and modulus...</i></p>

            <div class="scrollable">
                <!-- TASK 3 CODE STARTS HERE -->

                <!-- TASK 3 ENDS HERE -->
            </div>
            <hr>

            <!-- TASK 4 -->
            <h3>Task 4</h3>
            <p>Using HTML and nested loops in PHP, create a multiplication table.</p>
            <div class="image-container">
                <img src="img/no-bold.png" width="600px" alt="">
                <p>It should look like this ^</p>
            </div>
            <p><i>Make sure you use the "styled-table" class from the the previous exercises</i></p>
            <!-- TASK 4 CODE HERE -->

            <!-- TASK 4 ENDS HERE -->
            <hr>

            <!-- TASK 5 -->
            <h3>Task 5</h3>
            <p>Modify the code above, so that the top most row and left-most column have a light blue background.</p>
            <p><i>Hint: use an if statement in the loop to add class = "data-bold" class to the td</i></p>
            <div class="image-container">
                <img src="img/bold.png" width="600px" alt="">
                <p>It should look like this ^</p>
            </div>
            <!-- TASK 5 CODE HERE -->

            <!-- TASK 5 ENDS HERE -->
            <hr>
        </div>
    </main>

    <footer>
        <div class="row">
            <div class="image-container">
                <img src="../0-Introduction/img/logo.png" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="../1-Media-Queries/media-queries.html">1 - Media Queries</a></li>
                    <li><a href="../2-HTML-Tables/html-tables.html">2 - HTML Tables</a></li>
                    <li><a href="../3-Intro-to-PHP/intro-to-php.php" class="current-page">3 - Intro To PHP</a></li>
                    <li><a href="../4-HTML-Forms/html-forms.php">4 - HTML Forms</a></li>
                    <li><a href="../5-Connecting-a-Database/connecting-to-a-database.php">5 - Connecting To A
                            Database</a>
                    </li>
                    <li><a href="../6-Session-Variables/session-variables.php">6 - Session Variables</a></li>
                    <li><a href="../7-Example-Project/example-project.php">7 - Example Project</a></li>
                </ul>
            </nav>
        </div>

        <div class="author-details">
            <h2>Mr W's Advanced WDD Demos</h2>
            <a class="no-print" href=""> &#10071; A note for teachers &#10071;</a>
            <p>Made with &#10084;&#65039; by Mr Williamson, for <a href="https://linlithgowacademy.westlothian.org.uk/"
                    target="_blank">Linlithgow Academy</a></p>
            <p>Contect the author: <a href="mailto:wlfinlay.williamson@glow.sch.uk">wlfinlay.williamson@glow.sch.uk</a>
            </p>
        </div>

    </footer>

    <!-- navigation scripting -->
    <script src="../0-Introduction/script.js"></script>
</body>

</html>