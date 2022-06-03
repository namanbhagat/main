<?php
echo"naman<br>";
$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. Cleaning your house.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some Shopping.";
        break;
    default:
        echo "Sorry, No SOME information Pure available for that day.";
        break;
}
?>