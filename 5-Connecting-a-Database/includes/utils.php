<?php

function runQuery($query)
{
  // Create a database connection
  $dbhost = 'localhost';
  $dbuser = 'AshKetchum';
  $dbpass = '1234';
  $dbname = 'MyPokedex';
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // check for successful connection
  if (!$connection) {
    die('Connection failed ' . mysqli_connect_error());
  }

  // Execute Query
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Connection failed ' . mysqli_connect_error());
  }

  //   Return Data
  mysqli_close($connection);
  return $result;
}

function sanitizeInput($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
  return $data;
}
?>