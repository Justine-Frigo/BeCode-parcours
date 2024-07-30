<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="get" action="">
<label>What is your gender?</label>
<input type="radio" name="gender" id="female" value="female"/>
<label for="female">F</label>
<input type="radio" name="gender" id="male" value="male"/>
<label for="male">M</label>
<input type="submit" value="Submit">
</form>

<?php


$gender = isset($_GET['gender']) ? $_GET['gender'] : null;

$hello = ($gender == "female") ? "Hello Miss" : "Hello Sir";
echo $hello;
?>
</body>
</html>