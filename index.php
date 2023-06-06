<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action = "index.php" method = "post">
<label>radius</label>
<input type= "text" name= "radius"> <br>
<input type= "submit" name= "calculate">

</form> <br>

</body>
</html>



<?php
$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$volume = 4/3 * pi() * pow($radius, 2);
$volume = round($volume, 2);


$area = pi() * pow($radius, 2);
$area = round($area, 2);

echo "circumference = {$circumference}cm <br>";
echo "area = {$area}cm^2 <br>";
echo "volume = {$volume}cm^3 <br>";