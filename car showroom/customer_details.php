<?php
$name=$_POST['name'];
$mobile_number=$_POST['mob'];
$model=$_POST['model'];
$color=$_POST['color'];
$engine_type=$_POST['engine_type'];
$spare_part=$_POST['spare_part'];
$delivery_type=$_POST['delivery_type'];
$h_no=$_POST['hno'];
$building_name=$_POST['bname'];
$street=$_POST['street'];
$city=$_POST['city'];
$zipcode=$_POST['zip'];
$state=$_POST['state'];

$db=mysqli_connect("localhost","tharun","Tharun@2081182114","car_decor");
$query="INSERT INTO DELIVERY_DETAILS  (NAME,MOBILE_NUMBER,MODEL,COLOR,ENGINE_TYPE,SPARE_PART,DELIVERY_TYPE,H_NO,BUILDING_NAME,STREET,CITY,ZIPCODE,STATE) VALUES ('$name','$mobile_number','$model','$color','$engine_type','$spare_part','$delivery_type','$h_no','$building_name','$street','$city','$zipcode','$state')";
mysqli_query($db,$query);   

if($delivery_type=="HOME"){
    echo "THE SELECTED PRODUCT WILL BE DELIVERED TO YOUR HOME SOON ";
}
else {
    echo "YOU CAN GET YOUR DESIRED PRODUCT IN THE NEARBY OFFLINE SHOWROOM BY SHOWING THIS PDF";
    
}
echo "<br>";
echo "details has been inserted in to the database successfully!!!";

echo "<br>";
echo "<br>";
echo "<br>";

echo "YOUR PURCHASE DETAILS";
echo "<br>";
echo "name                  :"."$name";
echo "<br>";
echo "mobile number         :"."$mobile_number";
echo "<br>";
echo "car model             :"."$model";
echo "<br>";
echo "color                 :"."$color";
echo "<br>";
echo "engine type           :"."$engine_type";
echo "<br>";
echo "along with spare parts:"."$spare_part";
echo "<br>";



?>
<html>
<body>
    <br>   
    <a href="http://localhost/car_decor/homepage.html">Click here GO Back home page to Login HYUNDAI services</a>
    
    </br> 
    <img src="car.jpg" alt="It's Audi Car" width="800" height="600" class="center">

    <br>
    <br>
    <br>
    <p>please download your order pdf by clicking <b>CTRL+S</b> or <b>simply take a screenshot</b></p>
<html>
