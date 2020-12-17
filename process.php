<?php
require "connection.php";

if(isset($_GET["id"]) && $_GET["id"]!==""){
    $value = mysqli_real_escape_string($connect, $_GET["id"]);


// $comedy = array("Golmal","Naram-Garam","Angoor","Hera Pheri","Ace Ventura");
// $horror = array("The Exorcist","Grudge","The Conjuring","Incidious","Raat");
// $action = array("Predator","The Terminator","Commando","Rambo","Blood Sport");
// $romance = array("Maine Pyar Kiya","Sajan","Ashique","Qyamat se Qyamat Taq","The Fault in our Stars");

// switch($value){
//     case "comedy":
//         foreach($comedy as $val){
//             echo "<option>$val</option>";
//         }
//     break; 
//     case "horror":
//         foreach($horror as $val){
//             echo "<option>$val</option>";
//         }
//     break;
//     case "action":
//         foreach($action as $val){
//             echo "<option>$val</option>";
//         }
//     break;
//     case "romance":
//         foreach($romance as $val){
//             echo "<option>$val</option>";
//         }
//     break; 
//     default:
//     echo "No Data Found";  
// }


// FROM DATABASE:

$select = "select * from catagory";
$result = $connect->query($select);
     switch($value){
         case "comedy":
            while($row = $result->fetch_assoc()){
            echo "<option>".htmlspecialchars($row['comedy'])."</option>";
            }
            break;
            case "horror":
                while($row = $result->fetch_assoc()){
                    echo "<option>".htmlspecialchars($row['horror'])."</option>";
                    }
                break;
                case "action":
                    while($row = $result->fetch_assoc()){
                        echo "<option>".htmlspecialchars($row['action'])."</option>";
                        }
                    break;
                    case "romance":
                        while($row = $result->fetch_assoc()){
                            echo "<option>".htmlspecialchars($row['romance'])."</option>";
                            }
                        break;
                        default:
                        echo "<h3 style='color:red;text-align:center;'>No Data Found!!</h3>";  
     }

    }
