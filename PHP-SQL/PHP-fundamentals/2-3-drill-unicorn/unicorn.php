<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <label for="choice">Are you a Human, a Cat or a Unicorn?</label><br>
    <input type="radio" name="choice" value="human" required><label for="human">Human</label>
    <input type="radio" name="choice" value="cat" required><label for="cat">Cat</label>
    <input type="radio" name="choice" value="unicorn" required><label for="unicorn">Unicorn</label><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$human = '<img src="https://media.giphy.com/media/PZSKakN081R83ah0IH/giphy.gif?cid=790b76118btkvh3k2lao1s64sg9obbs4rqe0u39x2be9uc81&ep=v1_gifs_search&rid=giphy.gif&ct=g">';
$cat = '<img src="https://media.giphy.com/media/vFKqnCdLPNOKc/giphy.gif?cid=790b7611j7wt4wbcpvq99pkc59qzmbcmu7lexqdic99unxtq&ep=v1_gifs_search&rid=giphy.gif&ct=g">';
$unicorn = '<img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMmRrbmZ5ZWkyaWdkaDFqcWt5ZG95dmk1aG5uZW11azdpcDRmeHFieiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/j0kQJxo5mzGYb4EvWK/giphy.gif">';
if (isset($_POST['choice'])) {
    $choice = ($_POST['choice'] == "cat") ? $cat : (($_POST['choice'] == "unicorn") ? $unicorn : $human);
    echo $choice;
}
?>
    
</body>
</html>