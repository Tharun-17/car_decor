<?php
$model=$_POST['spare_part'];


$db=mysqli_connect("localhost","tharun","Tharun@2081182114","car_decor");


$query="SELECT  PRICE FROM SPARE_PART_DETAILS WHERE UPPER(MODEL)=UPPER($model) AND AVAILABILITY>0";



    echo "your selected model is available!!";


?>

<html>
<body>
    <br>   
    <a href="http://localhost/car_decor/main.html">Click here TO go AND LOGIN/REGISTER FOR purchase</a>
    </br> 
    <img src="car.jpg" alt="It's Audi Car" width="800" height="600" class="center">
<html>







