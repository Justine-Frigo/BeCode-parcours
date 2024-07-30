<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/logo.jpeg" type="image/x-icon">
    <title>Fake Excuse Notes Generator</title>
</head>

<body>

    <nav>
        <img src="./assets/images/logo.jpeg" alt="logo" />
        <a href="./index.php">Back to Generator</a>
</nav>
    <h1>Apology Generator for School Absences</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = htmlspecialchars($_POST['name']);
        $gender = htmlspecialchars($_POST['gender']);
        $teacher = htmlspecialchars($_POST['teacher']);
        $reason = htmlspecialchars($_POST['reason']);

        // Get current date in the specified format
        $formatter = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'Europe/Paris', IntlDateFormatter::GREGORIAN, 'EEEE, \'the\' d MMMM Y');
        $date = $formatter->format(new DateTime());

        $pronoun = ($gender == 'boy') ? 'he' : 'she';
        $pronoun_bis = ($gender == 'boy') ? 'him' : 'her';
        $pronoun_signature = ($gender == 'boy') ? 'His' : 'Her';

        $excuses = [
            'illness' => [
                "Unfortunately, $name is feeling under the weather today and won't be able to attend school. We hope $pronoun recovers soon.",
                "$name woke up with a fever and is not feeling well. We decided it's best for $pronoun_bis to rest at home today.",
                "Due to a severe headache, $name will be missing school today. We appreciate your understanding.",
                "$name is experiencing stomach pains and will be staying home to recover. We apologize for any inconvenience.",
                "Given $name's current illness, $pronoun won't be attending school today. We hope $pronoun will be back tomorrow."
            ],
            'death' => [
                "We are saddened to inform you that $name's pet has passed away. $name is very upset and won't be coming to school today.",
                "There has been a death in the family, and $name needs to be with us during this difficult time. Thank you for your understanding.",
                "We regret to inform you that $name's pet has died. $name is too distraught to attend school today.",
                "A close family member passed away, and $name will be absent from school to attend the services.",
                "Due to the loss of a beloved pet, $name is too sad to go to school today. We appreciate your compassion."
            ],
            'activity' => [
                "$name has a significant extra-curricular activity today that $pronoun cannot miss. We apologize for any disruption this may cause.",
                "$name is participating in an important competition today and will be unable to attend school.",
                "There is a special event today that $name has to attend. We hope $pronoun can catch up on any missed work.",
                "$name is involved in a key activity outside of school today and will not be present in class.",
                "Due to a major extra-curricular event, $name will not be able to attend school today. Thank you for your understanding."
            ],
            'other' => [
                "$name has a personal matter to attend to and will not be at school today. We appreciate your understanding.",
                "Due to unforeseen circumstances, $name will be missing school today. We apologize for any inconvenience.",
                "$name has an urgent family matter to deal with and won't be attending school today.",
                "$name will be absent today due to a personal commitment that cannot be rescheduled.",
                "There is an important family obligation that requires $name's presence today. Thank you for your patience."
            ]
        ];

        $selected_excuses = $excuses[$reason];
        $random_excuse = $selected_excuses[array_rand($selected_excuses)];

        echo "<div class='letter'>";
        echo "<p class='date'>$date</p>";
        echo "<p class='teacher'>Dear $teacher,</p>";
        echo "<p class='excuse'>$random_excuse</p>";
        echo "<p class='polite'>Sincerely,</p>";
        echo "<p class='signature'>$pronoun_signature Mother</p>";
        echo "</div>";
    } else {
    ?>

        <form method="POST" action="excuse">
            <label for="name">Name of the child:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="gender">Gender of the child:</label><br>
            <input type="radio" id="boy" name="gender" value="boy" required>
            <label for="boy">Boy</label><br>
            <input type="radio" id="girl" name="gender" value="girl" required>
            <label for="girl">Girl</label><br><br>

            <label for="teacher">Name of the teacher:</label><br>
            <input type="text" id="teacher" name="teacher" required><br><br>

            <label for="reason">Reason for the absence:</label><br>
            <input type="radio" id="illness" name="reason" value="illness" required>
            <label for="illness">Illness</label><br>
            <input type="radio" id="death" name="reason" value="death" required>
            <label for="death">Death of a pet or family member</label><br>
            <input type="radio" id="activity" name="reason" value="activity" required>
            <label for="activity">Significant extra-curricular activity</label><br>
            <input type="radio" id="other" name="reason" value="other" required>
            <label for="other">Other</label><br><br>

            <input type="submit" id="submitForm" value="Generate Apology">
        </form>

    <?php
    }
    ?>

</body>

</html>