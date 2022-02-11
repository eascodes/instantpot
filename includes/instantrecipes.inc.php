<?php
    include_once 'dbh.inc.php';

    $name = $_POST['name'];
    $ingredients = $_POST['ingredients'];
    $cooktime = $_POST['cooktime'];
    $releasetime = $_POST['releasetime'];
    $quantity = $_POST['quantity'];



    $sql = "INSERT INTO instantrecipes (name, ingredients, cooktime, releasetime, quantity) VALUES ('$name', '$ingredients', '$cooktime', '$releasetime', '$quantity');";
    mysqli_query($conn, $sql);

    header("Location: ../index.php?submit=success");