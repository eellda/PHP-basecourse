<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

    $grade = "A";

    // if ($grade == "A") {
    //     echo "You did great!";
    // } elseif ($grade == "B") {
    //     echo "You did good!";
    // } elseif ($grade == "C") {
    //     echo "You did ok";
    // } elseif ($grade == "D") {
    //     echo "You did poorly";
    // } elseif ($grade == "E") {
    //     echo "You did bad!";
    // } elseif ($grade == "F") {
    //     echo "You did failed";
    // } else {
    //     echo "{$grade} is not a valid grade";
    // }

    // switch ($grade) {
    //     case 'A':
    //         echo "You did great!";
    //         break;
    //     case 'B':
    //         echo "You did good!";
    //         break;
    //     case 'C':
    //         echo "You did ok!";
    //         break;
    //     case 'D':
    //         echo "You did poorly!";
    //         break;
    //     case 'E':
    //         echo "You did bad!";
    //         break;
    //     case 'F':
    //         echo "You did failed!";
    //         break;
    //     default:
    //         echo "{$grade} is not a valid grade";
    //         break;
    // }

    $date = date("l");
    
    $date = "Yummi";

    switch ($date) {
        case 'Monday':
            echo "I hate Mondays";
            break;
        case 'Tuesday':
            echo "It is rice Tuesday";
            break;
        case 'Wednesday':
            echo "The work week is half over";
            break;
        case 'Thursday':
            echo "It's almost the weekend";
            break;
        case 'Friday':
            echo "The weekend is here";
            break;
        case 'Saturday':
            echo "Time to party";
            break;
        case 'Sunday':
            echo "Time to relax";
            break;
        
        default:
            echo "{$date} is not a date.";
            break;
    }


?>