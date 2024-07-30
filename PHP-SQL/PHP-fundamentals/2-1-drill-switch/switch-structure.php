<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 echo "School sucks! (exercise)<br>";
?>
<br>
<form action="" method="get">
    <label for="grade">Please enter a grade:</label>
    <input type="number" name="grade" required><br>
    <input type="submit" name="submit" value="Grade">
</form>

<?php

if (isset($_GET['grade'])) {
    $grade = $_GET['grade'];

    switch ($grade) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo "<br>This work is really bad. What a dumb kid!";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            echo "<br>This is not sufficient. More studying required.";
            break;
        case 10:
            echo "<br>Barely enough!";
            break;
        case 11:
        case 12:
        case 13:
        case 14:
            echo "<br>Not bad!";
            break;
        case 15:
        case 16:
        case 17:
        case 18:
            echo "<br>Bravo, Bravissimo!";
            break;
        case 19:
        case 20:
            echo "<br>Too good to be true: confront the cheater!";
            break;
        default:
            echo "<br>Please enter a correct grade!";
            break;
    }
} ?>
</body>
</html>