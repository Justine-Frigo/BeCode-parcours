<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>

    <pre>
<?php

$family = array("Michel", "Alicia", "Elisa", "Pierre");

echo "Family Members<br>";
print_r($family);

$recipes = array("Spaghetti Carbonara", "Chicken Curry", "Beef Stroganoff", "Vegetable Stir Fry");

echo "Favourite Recipes<br>";
print_r($recipes);

$films = array("Inception", "The Matrix", "Interstellar", "Constantine");

echo "My Favourite Film<br>";
echo $films[1];

echo "<br><br><hr><br>";

$me = array(
    'firstname' => 'Justine',
    'lastname' => 'Frigo',
    'age' => 28,
    'favourite_movies' => array('Lord of the Rings', 'Harry Potter', 'Hunger Games')
);

$me['hobbies'][] = "Coding";
$me['hobbies'][] = "Reading";
$me['hobbies'][] = "Video Games";
$me['hobbies'][] = "Taxidermy";

print_r($me);

$sister = array(
    'firstname' => 'Elisa',
    'lastname' => 'Frigo',
    'age' => 27,
    'favourite_movies' => array('Lord of the Rings', 'Harry Potter', 'Hunger Games')
);

$sister['hobbies'][] = "Hiking";
$sister['hobbies'][] = "Reading";
$sister['hobbies'][] = "Video Games";

print_r($sister);

$me['sister'] = $sister;

print_r($me);

echo "My sister has " . count($sister['hobbies']) . " hobbies.<br>";
echo "I have " . count($me['hobbies']) . " hobbies.<br>";
echo "We both have " . count($sister['hobbies']) + count($me['hobbies']) . " hobbies<br>";

echo "<br><br><hr><br>";

$me['lastname'] = "Durand";
print_r($me);

echo "<br><br><hr><br>";

$soulmate = [
    'age' => 27,
    'firstname' => 'Pierre',
    'lastname' => 'Mauriello',
    'fav_movies' => ['Lord of the Rings', 'Harry Potter', 'The Rite']
];

$soulmate['hobbies'][] = "Final Fantasy 14";
$soulmate['hobbies'][] = "World of Warcraft";
$soulmate['hobbies'][] = "Coding";

print_r($soulmate);

$intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$merge = array_merge($me['hobbies'], $soulmate['hobbies']);

print_r($intersection);
print_r($merge);

echo "<br><br><hr><br>";

$web_development = [
    'frontend' => [],
    'backend' => []
];

$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = "Ruby on Rails";
$web_development['frontend'][] = "CSS";
$web_development['backend'][] = "Flash";
$web_development['frontend'][] = "Javascript";
$web_development['frontend'][0] = "html";
array_splice($web_development['backend'], 1);

print_r($web_development);

?>
</pre>

</body>

</html>