<?php
$model=$_POST['model'];


$db=mysqli_connect("localhost","tharun","Tharun@2081182114","car_decor");


$query="SELECT COLOR, ENGINE_TYPE, PRICE FROM CAR_DETAILS WHERE UPPER(MODEL)=UPPER($model) AND AVAILABLE_STOCK>0";

/*$result=mysqli_query($db,$query);

$row = mysqli_fetch_array($result);*/

    echo "your selected model is available!!";


?>

<html>
<body>
    <br>   
    <a href="http://localhost/car_decor/main.html">Click here TO go AND LOGIN/REGISTER FOR purchase</a>
    </br> 
    <img src="car.jpg" alt="It's Audi Car" width="800" height="600" class="center">
<html>







