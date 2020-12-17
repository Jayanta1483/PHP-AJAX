<?php
require "connection.php";

if(isset($_GET["id"]) && $_GET["id"]!==""){
    $value = $_GET["id"];
}

$comedy = array("Golmal","Naram-Garam","Angoor","Hera Pheri","Ace Ventura");
$horror = array("The Exorcist","Grudge","The Conjuring","Incidious","Raat");
$action = array("Predator","The Terminator","Commando","Rambo","Blood Sport");
$romance = array("Maine Pyar Kiya","Sajan","Ashique","Qyamat se Qyamat Taq","The Fault in our Stars");

switch($value){
    case "comedy":
        foreach($comedy as $val){
            echo "<option>$val</option>";
        }
    break; 
    case "horror":
        foreach($horror as $val){
            echo "<option>$val</option>";
        }
    break;
    case "action":
        foreach($action as $val){
            echo "<option>$val</option>";
        }
    break;
    case "romance":
        foreach($romance as $val){
            echo "<option>$val</option>";
        }
    break; 
    default:
    echo "No Data Found";  
}



?>