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
    <button><a href="index.php">Home</a></button>
    <h1>Add a New Recipe!</h1>
</header>
<form action="includes/instantrecipes.inc.php" method="POST">
    <div class="form-group">
        <label id="name-label" for="name" class="option">Recipe Name:</label>
        <input
            type="text"
            name="name"
            id="name"
            class="form-options"
            placeholder="Enter the recipe name"
        />
    </div>
    <div class="form-group">
        <label id="ingr-label" for="ingredients" class="option">Ingredients:</label>
        <input
            type="text"
            name="ingredients"
            id="ingredients"
            class="form-options"
            placeholder="Enter the recipe ingredients"
        />
    </div>
    <div class="form-group">
        <label id="cook-label" for="cooktime" class="option">Pressure cooking time (in minutes):</label>
        <input
            type="text"
            name="cooktime"
            id="cooktime"
            class="form-options"
            placeholder="Enter the number of minutes you set on your pressure cooker"
        />
    </div>
    <div class="form-group">
        <label id="release-label" for="releasetime" class="option">Release time (in minutes - indicate quick and/or natural release):</label>
        <input
            type="text"
            name="releasetime"
            id="releasetime"
            class="form-options"
            placeholder="Enter the quick and/or natural release time in minutes"
        />
    </div>
    <div class="form-group">
        <label id="quantity-label" for="quantity" class="option">Quantity produced:</label>
        <input
            type="text"
            name="quantity"
            id="quantity"
            class="form-options"
            placeholder="E.g. Enter amount of food produced in cups, lbs, etc."
        />
    </div>
    <div class="form-group">
        <input id="submit" type="submit" value="Submit" name="submit" class="submit-button">
    </div>
</form>
</body>
</html>