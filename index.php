<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <form action="search.php" method="POST" id="search-form">
            <h2>Find a Recipe: </h2><input name="search" type="text" placeholder="Search..." id="searchbar">
            <button type="submit" name="submit-search" id="searchbutton">Search</button>
        </form>
            <h1>Instant Pot Recipes</h1>
            <button id="new-button"><a href="newrecipe.php">Submit New Recipe</a></button>
    </header>
    <section id="container">
    <?php
                include_once 'includes/dbh.inc.php';

                $sql = "SELECT * FROM instantrecipes ORDER BY id DESC";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL statement failed";
                } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div id="recipe-block">
                        <h3>'.$row["name"].'</h3>
                        <p><strong>Ingredients:</strong> '.$row["ingredients"].'</p>
                        <p><strong>Pressure cooking time:</strong> '.$row["cooktime"].'</p>
                        <p><strong>Release time:</strong> '.$row["releasetime"].'</p>
                        <p><strong>Quantity produced:</strong> '.$row["quantity"].'</p>
                        </div>';
                    }
                }
                ?>
    </section>
</body>
</html>