<?php
// DATABSE FUNCTIONS
function runQuery($query)
{
    // Create a database connection
    $dbhost = 'localhost';
    $dbuser = 'testUser';
    $dbpass = '1234';
    $dbname = 'guessing_game';
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

// POKEMON API CALLS
function fetchName($id)
{
    $url = "https://pokeapi.co/api/v2/pokemon/{$id}";
    $response = file_get_contents($url);
    if ($response === FALSE) {
        return null;
    }
    $data = json_decode($response, true);
    if (isset($data['name'])) {
        return $data['name'];
    } else {
        return null;
    }
}
function fetchImage($id)
{
    $url = "https://pokeapi.co/api/v2/pokemon/{$id}";
    $response = file_get_contents($url);
    if ($response === FALSE) {
        return null;
    }
    $data = json_decode($response, true);
    if (isset($data['sprites']['other']['official-artwork']['front_default'])) {
        return $data['sprites']['other']['official-artwork']['front_default'];
    } else {
        return null;
    }
}


// // UNUSED FUNCTIONS
// function displayImage($imageUrl, $silhouette)
// {
//     $classList = "pokemonImage";
//     if ($silhouette) {
//         $classList .= " silhouette";
//         $background = "../images/guess-bg.gif";
//     } else {
//         $background = "../images/pokeball.png";
//     }

//     $image = <<<html
//         <div class = "imageContainer">
//             <img src = "$background" class = "guess-bg" alt = "Oops, image not found">
//             <img src = "$imageUrl" class = "$classList" alt = "Oops, image not found">
//         </div>
//     html;

//     echo $image;
// }
// function getData($id, $field)
// {
//     $queryString = <<<SQL
//        SELECT $field FROM Pokemon
//        WHERE pokemonID = $id; 
//     SQL;
//     $result = runQuery($queryString);
//     $row = mysqli_fetch_assoc($result);
//     $data = $row[$field];
//     return $data;
// }

?>