<?php
$name=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['password'];
$c_password=$_POST['cpassword'];
$customer=$_POST['cname'];

if($password==$c_password)
{
$db=mysqli_connect("localhost","tharun","Tharun@2081182114","car_decor");
$query="INSERT INTO SIGNUP_DETAILS  (MOBILEUSER ,EMAIL,PASSWORD,CONFIRMPASSWORD,CUTOMERNAME) VALUES ('$name','$email','$password','$c_password','$customer')";
mysqli_query($db,$query);   

$query1= "INSERT INTO LOGIN  (usermobile,password) VALUES('$name','$password')";
mysqli_query($db,$query1);

$query="SELECT CUTOMERNAME, MOBILEUSER FROM SIGNUP_DETAILS WHERE MOBILEUSER=$name";
$result=mysqli_query($db,$query);

$row = mysqli_fetch_array($result);
echo "Customer Registered Successfully:" ;
echo "\n please login with your credentials";
include 'login.html';
}
else
{
    echo "passwords didn't match please try again";
    include 'signup.html';
}

?>





