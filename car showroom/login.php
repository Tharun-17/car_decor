<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['usermobile']) && !empty($_POST['password'])) 
{  
    $user=$_POST['usermobile'];  
    $pass=$_POST['password'];  
  
    $mysqli=mysqli_connect("localhost","tharun","Tharun@2081182114","car_decor");

    $query="SELECT * FROM login WHERE usermobile='".$user."' AND PASSWORD='".$pass."'";  
     
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_array($result);
    echo $user ;
    echo "\n";
      
    if($user == $row[0] && $pass == $row[1])  
    {  
      

      include 'homepage.html';
    /* Redirect browser */  
    
    }  

    else
    { 
      echo nl2br("   \n \n Invalid password please try to login with valid user name and password:");
      include 'login.html';
    }
      
} 
else {  
    echo "All fields are required! OR INVALID Password";  
      }  
}  
?>  