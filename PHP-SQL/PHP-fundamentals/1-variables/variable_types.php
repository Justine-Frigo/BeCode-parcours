<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>

<body>

  <?php
  $name = "Justine";
  $age = "28";
  $eyes = "brown";
  $family = array(
    0 => "Michel",
    1 => "Alicia",
    2 => "Elisa",
    3 => "Franca",
    4 => "Silvio",
    5 => "Pierre",
  );
  ?>

  <p>Hi! My name is <?php echo $name ?></p>
  <p>I am <?php echo $age ?> years old.</p>
  <p>My eyes are <?php echo $eyes ?>.</p>
  <p>The first person in my family is <?php echo $family[0] ?>.</p>

</body>

</html>