<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action = "switchcase2.php" method = "post">
      <input type = "radio" name = "credit_card" value = "visa">visa<br>
      <input type = "radio" name = "credit_card" value = "verve">verve<br>
      <input type = "radio" name = "credit_card" value = "master card">master card<br>
      <input type = "submit" name = "confirm" value = "confirm">
</form>
</body>
</html>



<?php
$credit_card = null;
if(isset($_POST["confirm"])){

   if(isset($_POST["credit_card"])){
      $credit_card = $_POST["credit_card"];

   }

switch($credit_card){
   case "visa":
      echo "you have selected visa for payment";
      break;

   case "verve":
       echo "you have selected verve for payment";
      break;

   case "master card":
      echo "you have selected master card for payment";
      break;

      default:
         echo "please make a selection";
         break;
}




   /*
if($credit_card == "visa"){
   echo "you selceted visa card as your preffered payment option";
}
elseif($credit_card == "verve"){
   echo "you selceted verve card as your preffered payment option";
}
elseif($credit_card == "master card"){
   echo "you selceted master card as your preffered payment option";
} 
else{
   echo "please choose a payment method";
}
*/
}


/*
$capital = array("USA"=>"washington DC",
                 "japan"=>"kyoto",
                 "south korea"=>"seoul",
                 "india"=>"New delhi");

                 foreach($capital as $key => $value){
                    echo "{$key} {$value} <br>";
                 }
                 */


                ?>