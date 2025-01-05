<?php include 'includes/header.php' ?>

<!-- NOTES -->
<div class="tile">
    <h2>&#9999;&#65039; Prior Knowledge</h2>
    <p>In Higher you looked at HTML forms, but only went as far as styling them. It is assumed that you have a firm grip
        of:</p>
    <ul>
        <li>
            <p>Lables</p>
        </li>
        <li>
            <p>Inputs (text, number, radio, checkboxes)</p>
        </li>
        <li>
            <p>Selects (dropdowns)</p>
        </li>
        <li>
            <p>Text Areas</p>
        </li>
        <li>
            <p>Submit Buttons</p>
        </li>
    </ul>
    <p>As well as relevent client side validation for each element.</p>

    <!-- CODE EXAMPLE -->
    <h2>&#x1F440; Example Form</h2>
    <p>Take a look at this example form to remind yourself of these elements.</p>
    <form>
        <label for="foreName">Enter First Name</label>
        <input type="text" name="foreName" maxlength="25" required>
        <br>

        <label for="surName">Enter Last Name</label>
        <input type="text" name="surName" maxlength="40" required>
        <br>

        <label for="luckyNumber">Enter your lucky number</label>
        <input type="number" name="luckyNumber" min="0" max="999">
        <br>

        <!-- Radio buttons -->
        <fieldset>
            <legend>Favourite programming language </legend>
            <input type="radio" id="python" name="language" value="Python" required>
            <label for="python">Python</label><br>
            <input type="radio" id="java" name="language" value="Java">
            <label for="java">Java</label><br>
            <input type="radio" id="javascript" name="language" value="JavaScript">
            <label for="javascript">JavaScript</label>
        </fieldset>
        <br>

        <!-- Checkboxes -->
        <fieldset>
            <legend>Select your hobbies</legend>
            <input type="checkbox" id="coding" name="hobbies[]" value="Coding">
            <label for="coding">Coding</label><br>
            <input type="checkbox" id="gaming" name="hobbies[]" value="Gaming">
            <label for="gaming">Gaming</label><br>
            <input type="checkbox" id="sports" name="hobbies[]" value="Sports">
            <label for="sports">Sports</label>
        </fieldset>
        <br>

        <!-- Dropdown menu -->
        <label for="year">Year of Study</label>
        <select id="year" name="year" required>
            <option value="S4">S4</option>
            <option value="S5">S5</option>
            <option value="S6" selected>S6</option>
        </select>
        <br>

        <!-- Textarea -->
        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Write your comments here..."></textarea>
        <br>
        <input type="submit">
    </form>
    <hr>
    <div class="tile-links">
        <a href="https://www.w3schools.com/hTml/html_forms.asp" target="_blank">H3 Schools</a>
        <a href="https://www.youtube.com/watch?v=2O8pkybH6po&ab_channel=BroCode" target="_blank">YouTube</a>
    </div>
    <br>
</div>

<!-- IMPORTANT -->
<div class="tile">
    <h2>&#10071; Where is the header and footer?</h2>
    <p>While looking through the HTML for this page, you may have noticed that the header and footer have been replaced
        with single lines of php.</p>
    <div class="image-container">
        <img src="img/footer.png" alt="">
    </div>
    <p>Includes are a handy way of splitting up large projects. They allow you to make reusable components so that you
        are not copy pasting code all of the time. For your project, it's a good idea to set up a folder called
        "includes" where you can keep reusable components.</p>
    <div class="image-container">
        <img src="img/Includes.png" alt="">
    </div>
</div>

<!-- NOTES -->
<div class="tile">
    <h2>&#9999;&#65039; The POST method</h2>
    <p>POST is a method of sending data from a form to a specific destination for processing.</p>

    <p>POST is <b>secure</b>, meaning
        that you can use it to transfer sensitive information like usernames or passwords. In general, POST should be
        used when you want to <i>send</i> data somewhere.</p>
    <hr>
    <div class="tile-links"><a href="https://www.youtube.com/watch?v=6AzAYU8AOhQ&t=183s&ab_channel=BroCode"
            target="_blank">Youtube</a>
        <a href="https://www.w3schools.com/php/php_superglobals_post.asp" target="_blank">W3 Schools</a>
    </div>


    <!-- CODE EXAMPLE 1 -->
    <h2>&#x1F440; POST Example</h2>
    <p>In this example we send the data from the form to a seperate php file.</p>
    <!-- the action attribute determines where the data is sent -->
    <form action="form-handling/post-example.php" method="POST">
        <label for="userName">Enter your username</label>
        <input type="text" name="userName">
        <br>

        <label for="password">Enter your password</label>
        <input type="password" name="password">
        <br>
        <input type="submit">
    </form>
</div>

<!-- TASK 1 -->
<div class="tile">
    <h2>&#10067; Task One</h2>
    <p>Create a multiple choice question below. Only one answer should be allowed.</p>
    <p>The question and answers can be whatever you want.</p>
    <p>When the user submits their answer, they should be taken to a page that tells them whether they were right or
        wrong.</p>
    <h3>Your code goes here</h3>
    <!-- START YOUR CODE HERE -->

    <!-- END YOUR CODE HERE -->
</div>

<!-- NOTES -->
<div class="tile">
    <h2>&#9999;&#65039; The GET method</h2>
    <p>GET is more commonly used for <i>retrieving</i> information from a specific destination. </p>
    <p>This is because the data from the form is appended to the URL. The GET method should <b>not</b> be used for
        sensitive information, as it is <b>NOT SECURE</b>.</p>
    <p>Using the URL to transfer data means that:</p>
    <ul>
        <li>
            <p>The results can be bookmarked <i>with</i> the data included</p>
        </li>
        <li>
            <p>There is a strict character limit on data</p>
        </li>
        <li>
            <p>The data is <b>NOT SECURE</b></p>
        </li>
    </ul>
    <hr>
    <div class="tile-links"><a href="https://www.youtube.com/watch?v=6AzAYU8AOhQ&t=183s&ab_channel=BroCode"
            target="_blank">Youtube</a>
        <a href="https://www.w3schools.com/php/php_superglobals_post.asp" target="_blank">W3 Schools</a>
    </div>
    <br>
    <!-- CODE EXAMPLE 2 -->
    <h2>&#x1F440; GET Example 1</h2>
    <p>This is very similar to the example above, but is an unnusual use case for GET.</p>
    <p>Remember that GET is usually for <i>retrieving</i> data, not sending it.</p>
    <p>Pay close attention to the URL when you go to the new page.</p>
    <!-- Notice that we have changed the method and the action -->
    <form action="form-handling/get-example-one.php" method="GET">
        <label for="color">Enter your fav colour</label>
        <input type="text" name="color">
        <br>
        <input type="submit">
    </form>
    <br>

    <!-- CODE EXAMPLE 3 -->
    <h2>&#x1F440; GET Example 2</h2>
    <p>In this example the user enters a single letter. The form will retrieve all names that start with that
        letter from a list. This is a more usual use case for GET. </p>
    <form action="form-handling/get-example-two.php" method="GET">
        <label for="letter">Enter a letter</label>
        <input type="text" name="letter" maxlength=1>
        <br>
        <input type="submit">
    </form>
</div>

<div class="tile">
    <h2>&#10067;Task Two</h2>
    <p>Create a search filter for a fictional shoe shop.</p>
    <div class="image-container">
        <img src="img/filter.png" alt="" width="700px">
        <p>Example of a shop filter that uses GET.</p>
    </div>
    <p> The shop sells shoes, and stores the following data about their
        products:</p>
    <ul>
        <li>
            <p>Colour</p>
        </li>
        <li>
            <p>Price</p>
        </li>
        <li>
            <p>Size</p>
        </li>
    </ul>
    <p>These data are stored in parallel arrays in the "task-2.php" file.</p>
    <p>You must:</p>
    <ol>
        <li>
            <p>Create a form using appropriate inputs</p>
        </li>
        <li>
            <p>Write the logic in PHP to display only the shoes the user has filtered for</p>
        </li>
    </ol>
    <h3>Your code goes here</h3>
    <!-- START TASK 2 HERE -->

    <!-- END TASK 2 HERE -->
</div>

<div class="tile">
    <h2>&#10067;Task Three</h2>
    <p>Using fixed loops and parallel arrays <i>and</i> a 2D array, create a multiple choice quiz that has 5 questions.
    </p>
    <p>The user will answer all 5 questions before submitting.</p>
    <p>Once submitted, the user will be shown their score, and their percentage.</p>
    <h3>Your code goes here</h3>
    <!-- START Task 3 here -->

    <!-- END task 3 here -->
</div>

<div class="tile">
    <h2>&#9999;&#65039; Data Sanitization</h2>
    <p>In the next lesson we will be using forms to interact with a database. We <b>must</b> ensure our inputs are safe
        before allowing them any where near our database.</p>
    <p>We do this by removing special characters (which could be used to inject malicious code into our database)</p>

    <h2>&#x1F440; Form with Data Sanitization</h2>
    <form method="POST" action="form-handling/sanitization-example.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <input type="submit">
    </form>
    <hr>
    <div class="tile-links">
        <a href="https://www.w3schools.com/php/func_string_htmlspecialchars.asp" target="_blank">W3 Schools</a>
        <a href="https://www.youtube.com/watch?v=HblQ-B0NXik&ab_channel=BroCode" target="_blank">Youtube
            (alternative method)</a>
    </div>

</div>

<div class="tile">
    <h2>&#10067;Task 4</h2>
    <p>Using the function in the example above, ensure that the inputs for tasks 1, 2 and 3 are safe.</p>
</div>

<?php include 'includes/footer.php' ?>