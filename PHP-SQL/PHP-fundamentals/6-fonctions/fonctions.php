<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
</head>
<body>
    
<?php 

$sentence = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

function shuffle_letters($message)
{
    $exploded_array = explode (' ', $message);
    $array = [];
    foreach ($exploded_array as $words) {
        if (strlen($words) < 3) {
            $array[] = $words;
        } else {
            $array[] = substr($words, 0, 1) . str_shuffle(substr($words, 1, -1)) . substr($words, -1);
        }


        
    }
    return join(' ', $array);
}

echo shuffle_letters($sentence);

echo '<br><br><hr><br>';

function capitalize($name)
{
    echo ucfirst($name);
}
$word_to_capitalize = "emile<br>";
capitalize($word_to_capitalize);

echo date('Y');
echo '<br>';

date_default_timezone_set('Europe/Paris');
echo date('d/m/Y H:i:s');

echo '<br><br><hr><br>';

function sum($a, $b) {
    if (is_numeric($a) and is_numeric($b)) {
        echo $a + $b;
    } else {
        echo "Error: argument is not a number.";
    }
}

$a = rand(0, 100);
$b = rand(0, 100);

sum($a, $b);

echo '<br><br><hr><br>';

function create_acronym($string) {
    $words = explode(' ', $string);
    $acronym = '';


    foreach ($words as $word) {
        $acronym .= strtoupper($word[0]);
    }

    return $acronym;
}

$phrase = "In code we trust!";
echo create_acronym($phrase);

echo '<br>';


function replace_AE($string) {
   
    $result = str_replace(['ae', 'AE'], 'æ', $string);

    return $result;
}


$words = ["caecotrophie<br>", "chaenichthys<br>", "microsphaera<br>", "sphaerotheca<br>"];
foreach ($words as $word) {
    echo replace_AE($word);
   
}

echo '<br>';


function replace_AE_back($string) {
    $result = str_replace('æ', 'ae', $string);

    return $result;
}


$words = ["cæcotrophie<br>", "chænichthys<br>", "microsphæra<br>", "sphærotheca<br>"];
foreach ($words as $word) {
    echo replace_AE_back($word);
}

echo '<br><br><hr><br>';

function feedback($message, $cssClass = 'info') {
    switch ($cssClass) {
        case 'error':
            $prefix = 'Error: ';
            break;
        case 'warning':
            $prefix = 'Warning: ';
            break;
        case 'info':
        default:
            $prefix = 'Notice: ';
            break;
    }

    $html = '<div class="' . htmlspecialchars($cssClass) . '">' . $prefix . htmlspecialchars($message) . '</div>';

    return $html;
}

echo feedback("Incorrect email address", "error");

echo feedback("This is an informational message", "info");

echo feedback("This is a warning message", "warning");

echo feedback("This message has no specified class");

echo '<br><br><hr><br>';

function generate_random_string($minLength, $maxLength) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $length = rand($minLength, $maxLength);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}

$shortString = generate_random_string(1, 5);
$longString = generate_random_string(7, 15);

?>

<h1>Generate a new word</h1>
<p>Short word: <?php echo htmlspecialchars($shortString); ?></p>
    <p>Long word: <?php echo htmlspecialchars($longString); ?></p>
    <form method="post">
        <button type="submit">Generate</button>
    </form>

    <br><br><hr><br>

<?php 

function deCapitalize($string) {
    return strtolower($string);
}

$originalString = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
$deCapitalizedString = deCapitalize($originalString);

echo $deCapitalizedString;

echo '<br><br><hr><br>';


function calculate_cone_volume($ray, $height) {
    return $ray * $ray * 3.14 * $height * (1/3);
}


$volume1 = calculate_cone_volume(5, 2);
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume1 . ' cm<sup>3</sup><br />';


$volume2 = calculate_cone_volume(3, 4);
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume2 . ' cm<sup>3</sup><br />';


?>


</body>
</html>