<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>

<?php 
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $pronoun){
    switch ($pronoun) {
        case 'He/She':
            echo $pronoun . " codes<br>";
            break;
        default:
            echo $pronoun . " code<br>";
    }
}

echo '<br><br><hr><br><br>';

$i = 1;
while ($i <= 120) {
    echo $i . ' ';
    $i++;
}

for ($i = 1; $i <= 120; $i++) {
    echo $i . ' ';
}

echo '<br><br><hr><br>';

$becode = [
    'Adrien B', 'Adrien C', 'Angel', 'Arnaud', 'Caroline', 'Dylan', 'Dorian', 'Dzheylyan', 'Giovanni', 'Iliess', 'Isabelle', 'Jordan', 'Julie', 'Justine', 'Ludovic', 'Lyne', 'Manu', 'Maryam', 'Nataliia', 'Nathanaël', 'Stacy', 'Tom', 'Youris', 'Zahra'
];
echo '<br>';

foreach ($becode as $student) {
    echo $student . '<br>';
}

echo '<br><br><hr><br>';

$countries = [
    'select' => 'Select a country',
    'BE' => 'Belgium',
    'FR' => 'France',
    'IT' => 'Italy',
    'ES' => 'Spain',
    'DE' => 'Germany',
    'UK' => 'United Kingdom',
    'NL' => ' Netherlands',
    'LU' => 'Luxemburg',
    'PT' => 'Portugal',
];

echo "<select>";
foreach ($countries as $key => $value) {
    echo "<option value =".$key.">".$value."</option>";
}
echo "</select>";


?>
    
</body>
</html>