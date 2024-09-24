<?php

$date = date("l");

switch ($date) {
    case 'Monday':
        echo "I Hate MONDAY!";
        break;
    case 'Tuesday':
        echo "Who cares about Tuesday";
        break;
    case 'Wednesday':
        echo "Why do people call it badluck🤷🏻‍♂️";
        break;
    case 'Thursday':
        echo "Brings back memories🥰";
        break;
    case 'Friday':
        echo "I Like Friday alot";
        break;    
    case 'Saturday':
        echo "I'll play games today";
        break;
    case 'Sunday':
        echo "Time to rest";
        break;
    default:
        echo "It is not a valid day";
        break;
}

?>