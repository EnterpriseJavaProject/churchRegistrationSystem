
<?php
session_start();

$connection = mysqli_connect("localhost","root","","npp_register");

if($connection) 
{
    // echo "Database Connected";
}
else
{
   
}

if (!$_SESSION['username']) 
{
    // $_SESSION['status'] = "voters / Password is Invalid";
    // $_SESSION['status_code'] = "warning";
    header('Location: index.php');
}




?>