<?php
session_start();


$atmp=0;
$connection = mysqli_connect("localhost","root","","assemblies_of_God");
// include('includes/config.php');




// if (isset($_SESSION["locked"])) {
  
//   $difference = time() - $_SESSION["locked"];

//   if ($difference > 10) {
//     unset($_SESSION["locked"]);
//     unset($_SESSION["login_attempts"]);
//   }

// }

// // LOGIN ATTEMPT
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
//   $name_login = $_POST['username'];
//   $password_login = $_POST['password'];

//   $connection = mysqli_connect("localhost","root","","assemblies_of_God");
//   $query = "SELECT * FROM admin_login WHERE username='$name_login' ";
//   $query_run = mysqli_query($connection, $query);
//   $usertypes = mysqli_fetch_array($query_run);




//   if (mysqli_num_rows($query_run)  > 0) {
    
//     $row = mysqli_fetch_object($query_run);

//     if (password_verify($password_login, $row->password)) {
//              header('Location: admin_dashboard.php');
//              $_SESSION['status'] =  "You are welcome  $name_login";
//              $_SESSION['status_code'] = "success";
//     }

//     else{

//       $_SESSION["login_attempts"] += 1;
//       $_SESSION["error"] = "Invalid Details! Try Again";
//     }
  


//   }

//   else{

//     $_SESSION["login_attempts"] += 1;
//     $_SESSION["error"] = "Invalid Details! Try Again";
//   }

// }








// PHONE NUMBER  VERIFICATION

if (isset($_POST['check_submit_btn']))
{

   $phone1 = $_POST['phones_id'];


   $phone_query = "SELECT * FROM admin_login WHERE phone='$phone1' ";
   $phone_query_run = mysqli_query($connection, $phone_query);
   if (mysqli_num_rows($phone_query_run) > 0) 

   {
     echo "Phone Number already exist!";

   }

}




//  EMAIL  VERIFICATION

if (isset($_POST['check_submit_btns']))
{

   $emails = $_POST['email_id'];


     
   $email_query = "SELECT * FROM admin_login WHERE email='$emails' ";
   $email_query_run = mysqli_query($connection, $email_query);
   if (mysqli_num_rows($email_query_run) > 0) 

   {
     echo "Email Number already exist!";

   }



}







    //ADMIN LOGIN CODE

if (isset($_POST['login_btn'])) 
{
    $name_login = $_POST['username'];
    $password_login = $_POST['password'];

    if ($atmp<4) {
  
  

    $query = "SELECT * FROM admin_login WHERE username='$name_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['usertype'] == "Admin") 
    {

        $_SESSION['username'] = $name_login;
        $_SESSION['password'] = $password_login;
        header('Location: admin_dashboard.php');
        $_SESSION['status'] =  "You are welcome  $name_login";
        $_SESSION['status_code'] = "success";

    }

    else if($usertypes['usertype'] == "User")
    {

       $_SESSION['username'] = $name_login;
       $_SESSION['password'] = $password_login;
        header('Location: userHomePage.php');
        $_SESSION['status'] =  "You are welcome  $name_login";
        $_SESSION['status_code'] = "success";


    }

    else
    {
      
      $atmp++;

      $_SESSION["error"] = "Invalid Admin ID and Password! Number of attempt is '.$atmp.' ";
 
    }






  }


}








    //ADMIN LOGIN CODE

    if (isset($_POST['admindashboardlogin_btn'])) 
    {
        $name_login = $_POST['username'];
        $password_login = $_POST['password'];
    
    
    
        if($name_login == "Admin" and $password_login == "admin@2020") 
        {

            header('Location: viewAllAdminPage.php');
            $_SESSION['status'] =  "You are welcome system $name_login";
            $_SESSION['status_code'] = "success";
        }

    
        else
        {
            // $_SESSION['status'] = "Invalid Admin ID and Password!";
            // $_SESSION['status_code'] = "warning";
            header('Location: errorAdminDashboardLogin.php');  
        }



      }








//  REGISTRATION CODE FOR ADMINS



if (isset($_POST['register_btn']))
 {


  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $department = $_POST['department'];
  $usertype = $_POST['usertype'];
  $password = $_POST['password'];

  





    // USERNAME REQUIRES ONLY LETTERS
    if (!preg_match("/^[a-zA-Z\s]+$/", $username))
    {
      $_SESSION['status'] = "Username requires only Letters";
      $_SESSION['status_code'] = "error";
      header('Location: viewAllAdminPage.php');
    }
    else {






  
        

    // PHONE NUMBER REQUIRES ONLY NUMBERS
    if (!preg_match('/^[0-9]*$/',$phone)) 
    {
        $_SESSION['status'] = "Phone Number requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: viewAllAdminPage.php');
    }
    else {


    if (strlen($phone)<10) 
    {
        $_SESSION['status'] = "Phone Number should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: viewAllAdminPage.php');
    }
    else{

    if (strlen($phone)>10) 
    {
        $_SESSION['status'] = "Phone Number should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: viewAllAdminPage.php');
    }
    else{



  

        $query = "INSERT INTO admin_login (username, phone, email, department, usertype, password) VALUES ('$username','$phone','$email', '$department', '$usertype', '$password')";
        $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Admin Added Successfully";
          $_SESSION['status_code'] = "success";
          header('Location: viewAllAdminPage.php');
        }
        else
          {
            $_SESSION['status'] = "Admin not Added";
            $_SESSION['status_code'] = "error";
            header('Location: viewAllAdminPage.php');
          }
      


        }}}}

     

}






















//Update Session

if (isset($_POST['update_btn']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $phone = $_POST['edit_phone'];
    $email = $_POST['edit_email'];
    $department = $_POST['edit_department'];
    $usertype = $_POST['edit_usertype'];
    $password = $_POST['edit_password'];


    
    $query = "UPDATE admin_login SET username='$username', phone='$phone', email='$email', department='$department', usertype='$usertype', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Admin data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: viewAllAdminPage.php');
    }
    else
    {
      $_SESSION['status'] = "Admin data not updated";
      $_SESSION['status_code'] = "error";
      header('Location: viewAllAdminPage.php');
    }

 }












//REGISTER DELETE CODE

if (isset($_POST['delete_btn'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM admin_login WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Admin data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: viewAllAdminPage.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: viewAllAdminPage.php');
    } 
}
















?>