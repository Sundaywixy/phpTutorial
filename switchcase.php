<?php

$grade = "home";

switch($grade){
case "A":
    echo "excellent";
    break;
case "B":
    echo "great";
    break;
case "C":
    echo "good";
    break;
case "D":
    echo "poor";
    break;
case "F":
    echo "failed";
    break;
    default:
    echo "{$grade} not a valid input";

}

?>