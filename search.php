<?php
    include 'includes/dbh.inc.php';
?>

<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<h1>Search Page</h1>

<?php

if(isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM instantrecipes WHERE name LIKE '%$search%' OR ingredients LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if($queryResult > 0) {
        echo "There are ".$queryResult." results!";

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div id="recipe-block">
            <h3>'.$row["name"].'</h3>
            <p>'.$row["ingredients"].'</p>
            <p>'.$row["cooktime"].'</p>
            <p>'.$row["releasetime"].'</p>
            <p>'.$row["quantity"].'</p>
            </div>';
        }
    } else {echo "There are no results matching your search.";}
}

?>

<button><a href="index.php">Home</a></button>
