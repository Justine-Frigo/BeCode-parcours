<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drill</title>
</head>

<body>
    <?php
    /**
     * Series of exercises on PHP conditional structures.
     */

    echo "1.1 Clean your room Exercise<br>";

    $room_is_filthy = true;

    if ($room_is_filthy = true) {
        echo "<br>Yuk, Room is dirty : let's clean it up !<br>";
        // cleanup_room();
        echo "<br>Room is now clean!<br>";
        $room_is_filthy = false;
    } else {
        echo "<br>Nothing to do, room is neat.<br>";
    }


    echo "<br>1.2 Clean your room Exercise, improved<br>";

    // Array of possible states

    $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

    // Testing here

    $room_filthiness = $possible_states[3];

    if ($room_filthiness == "health hazard") {
        echo "<br>Yuk, clean it up !<br>";
    } else if ($room_filthiness == "filthy") {
        echo "<br>Yuk, room is disgusting ! Let's clean it up !<br>";
    } else if ($room_filthiness == "dirty") {
        echo "<br>Yuk, room is dirty : let's clean it up !<br>";
    } else {
        echo "<br>Nothing to do, room is neat.<br>";
    }

    echo "<br><br><hr><br><br>";


    echo "2. Different greetings exercise<br>";

    
    date_default_timezone_set('Europe/Brussels');
    $now = date("H:i");

    if ($now >= "05:00" and $now <= "09:00") {
        echo "<br>Good Morning!<br>";
    } else if ($now > "09:00" and $now <= "12:00") {
        echo "<br>Good day!<br>";
    } else if ($now > "12:00" and $now <= "16:00") {
        echo "<br>Good Afternoon!<br>";
    } else if ($now > "16:00" and $now <= "21:00") {
        echo "<br>Good Evening!<br>";
    } else {
        echo "<br>Good Night!<br>";
    }

    echo "<br><br><hr><br><br>";

    echo "3-4-5. Different greetings according to the user's age, gender and mothertongue. (exercise)<br>";?>

<br><form method="get" action="">
 <label for="age">
 Please type your age:</label>
 <input type="number" name="age" required><br>
 <label for="gender">Choose your gender:</label>
 <input type="radio" name="gender" value="male" id="male">
 <label for="male">Male</label>
 <input type="radio" name="gender" value="female" id="female">
 <label for="female">Female</label><br>
 <label for="gender">Do you speak English ?</label>
 <input type="radio" name="language" value="yes" id="yes">
 <label for="male">Yes</label>
 <input type="radio" name="language" value="no" id="no">
 <label for="female">No</label><br>
 <input type="submit" name="submit" value="Greet me now">
 </form>

<?php if (isset($_GET['age']) AND isset($_GET['gender']) AND isset($_GET['language'])){
if ($_GET['age'] < 12){

    if ($_GET['gender'] == "female"){

        if ($_GET['language'] == "yes"){

            echo "Hello miss Kiddo!";
        } else { 
            echo "Aloha miss Kiddo";
        }
    } else if ($_GET['gender'] == "male"){
            
        if ($_GET['language'] == "yes"){
        
        echo "Hello mister Kiddo!";}
        else {
            echo "Aloha mister Kiddo!";
        }
   } 
    
} else if ($_GET['age'] >= 12 AND $_GET['age'] < 18){
    if ($_GET['gender'] == "female"){

        if ($_GET['language'] == "yes"){

            echo "Hello miss Teen!";
        } else { 
            echo "Aloha miss Teen";
        }
    } else if ($_GET['gender'] == "male"){
            
        if ($_GET['language'] == "yes"){
        
        echo "Hello mister Teen!";}
        else {
            echo "Aloha mister Teen!";
        }
   } 
} else if ($_GET['age'] >= 18 AND $_GET['age'] <= 115){
    if ($_GET['gender'] == "female"){

        if ($_GET['language'] == "yes"){

            echo "Hello miss Adult!";
        } else { 
            echo "Aloha miss Adult!";
        }
    } else if ($_GET['gender'] == "male"){
            
        if ($_GET['language'] == "yes"){
        
        echo "Hello mister Adult!";}
        else {
            echo "Aloha mister Adult!";
        }
   } 
} else {
    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you?";
}
 
 }


 echo "<br><br><hr><br><br>";

 echo "6. The Girl Soccer Team (exercise)<br>";?>

<br><form action="" method="get">
    <label for="name">What's your name?</label>
    <input type="" name="name" required><br>
    <label for="age">How old are you?</label>
    <input type="number" name="age"><br>
    <label for="gender">Gender?</label>
    <input type="radio" name="gender" value="female" required><label for="female">Female</label>
    <input type="radio" name="gender" value="male" required><label for="male">Male</label><br>
    <input type="submit" name="submit" value="Apply">
</form>

<?php 

// if (isset($_GET['name']) and isset($_GET['age']) and isset($_GET['gender'])) {
//     $name = $_GET['name'];
//     $age = $_GET['age'];
//     $gender = $_GET['gender'];
//     $allowed_to_play = false;
//     $alert = "Sorry, you don't fit the criteria.<br>";

//     if ($age >= 21 and $age <= 40 and $gender == "female") {
//         $allowed_to_play = true;
//     }

//     if ($allowed_to_play == true) {
//         $alert = "Welcome to the team, " . $name . "!<br>";
//     }

//     echo $alert;
// }

// 7. Achieve the same, without the ELSE.
$allowed_to_play = "Sorry, you don't fit the criteria";

if (isset($_GET['age']) && isset($_GET['gender'])){
    if ($_GET['age'] >= 21 AND $_GET['age'] <= 40 AND $_GET['gender'] == "female"){
        $allowed_to_play = "Welcome to the team";
    }
    echo $allowed_to_play;
 }

 echo '<br><br><hr><br><br>';

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

    if ($grade <= 4) {
        echo "<br>This work is really bad. What a dumb kid!";
    } else if ($grade >= 5 AND $grade <= 9) {
        echo "<br>This is not sufficient. More studying is required.";
    } else if ($grade == 10) {
        echo "<br>Barely enough!";
    } else if ($grade > 10 AND $grade <= 14) {
        echo "<br>Not bad!";
    } else if ($grade > 14 AND $grade <= 18) {
        echo "<br>Bravo, Bravissimo!";
    } else if ($grade == 19 OR $grade == 20) {
        echo "<br>Too good to be true: confront the cheater!";
    }
}
?>

</body>

</html>