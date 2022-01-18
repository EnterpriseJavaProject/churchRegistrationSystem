<?php
session_start();

$connection = mysqli_connect("localhost","root","","assemblies_of_God");






if (isset($_POST['check_submit_btn']))
 {

    $phone1 = $_POST['phone_id'];


      // PHONE NUMBER  VERIFICATION
    $phone_query = "SELECT * FROM members WHERE phone='$phone1' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 

    {
      echo "Phone Number already exist!";

    }



 }









 if (isset($_POST['register_btn']))
 {

  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $marital_status = $_POST['marital_status'];
  $dob = $_POST['dob'];
  $occupation = $_POST['occupation'];
  $place_of_work = $_POST['place_of_work'];
  $residence = $_POST['residence'];
  $department = $_POST['department'];
  $tithe = $_POST['tithe'];
  $year_baptised = $_POST['year_baptised'];
  $home_town = $_POST['home_town'];
  $region = $_POST['region'];
  $country = $_POST['country'];
  $usertype = $_POST['usertype'];
  $images = $_FILES['faculty_image']['name'];
  



    // USERNAME REQUIRES ONLY LETTERS
    if (!preg_match("/^[a-zA-Z\s]+$/", $username))
    {
      $_SESSION['status'] = "Username requires only Letters";
      $_SESSION['status_code'] = "error";
      header('Location: viewAllMembersPage.php');
    }
    else {






  
        

    // PHONE NUMBER REQUIRES ONLY NUMBERS
    if (!preg_match('/^[0-9]*$/',$phone)) 
    {
        $_SESSION['status'] = "Phone Number requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: viewAllMembersPage.php');
    }
    else {


    if (strlen($phone)<10) 
    {
        $_SESSION['status'] = "Phone Number should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: viewAllMembersPage.php');
    }
    else{

    if (strlen($phone)>10) 
    {
        $_SESSION['status'] = "Phone Number should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: viewAllMembersPage.php');
    }
    else{



  


          // OCCUPATION REQUIRES ONLY LETTERS
          if (!preg_match("/^[a-zA-Z\s]+$/", $occupation))
    {
      $_SESSION['status'] = "Occupation requires only Letters";
      $_SESSION['status_code'] = "error";
      header('Location: viewAllMembersPage.php');;
    }
    else {




                  // PLACE OF WORK REQUIRES ONLY LETTERS
                  if (!preg_match("/^[a-zA-Z\s]+$/", $place_of_work))
                  {
                    $_SESSION['status'] = "Place of work requires only Letters";
                    $_SESSION['status_code'] = "error";
                    header('Location: viewAllMembersPage.php');
                  }
                  else {





                        
    // TITHE REQUIRES ONLY NUMBERS
    if (!preg_match('/^[0-9]*$/',$tithe)) 
    {
        $_SESSION['status'] = "Tithe requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: viewAllMembersPage.php');
    }
    else {



          // HOME TOWN REQUIRES ONLY LETTERS
    if (!preg_match("/^[a-zA-Z\s]+$/", $home_town))
    {
      $_SESSION['status'] = "Home Town requires only Letters";
      $_SESSION['status_code'] = "error";
      header('Location: viewAllMembersPage.php');
    }
    else {
      

            // PHONE NUMBER  VERIFICATION
    $phone_query1 = "SELECT * FROM members WHERE phone='$phone' ";
    $phone_query1_run = mysqli_query($connection, $phone_query1);
    if (mysqli_num_rows($phone_query1_run) > 0) 

    {
      $_SESSION['status'] = "Phone Number already exist!";
      $_SESSION['status_code'] = "error";
      header('Location: viewAllMembersPage.php');

    }
    else{








  //     if (file_exists("Members_Images/" . $_FILES['faculty_image']["name"])) 
  //     {

  //       $store = $_FILES['faculty_image']["name"];
  //       $_SESSION['status']= "Image Already Exists. '.$store.'";
  //       $_SESSION['status_code'] = "warning";
  //       header('Location: viewAllMembersPage.php');;

  //     }


  // else
  // {





$checkMemebr = "SELECT * FROM members ORDER BY DESC LIMIT 1";
$checkMemebrResult = mysqli_query($connection,$checkMemebr);

if (mysqli_num_rows($checkMemebrResult) > 0) {



    if ($row = mysqli_fetch_assoc($checkMemebrResult)) {
      
      $membershipNo = $row['membershipNo'];
      $get_numbers = str_replace("HGT", "", $membershipNo);
      $membershipNo_increase = $get_numbers+1;
      $get_string = str_pad($membershipNo_increase, 3, 0, STR_PAD_LEFT);
      $membershipID = "HGT00".$get_string;




$query = "INSERT INTO members (membershipNo, username, phone, gender, marital_status, dob, occupation, place_of_work, residence, department, tithe, year_baptised,home_town,region, country, usertype, `images`) VALUES ('$membershipID', '$username','$phone','$gender', '$marital_status', '$dob', '$occupation','$place_of_work','$residence','$department','$tithe','$year_baptised', '$home_town', '$region', '$country', '$usertype', '$images')";
$query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {

          move_uploaded_file($_FILES['faculty_image']["name"], "Members_Images/".$_FILES['faculty_image']["name"]);
          $_SESSION['status'] = "Member Added Successfully Membership No : " .$membershipID;
          $_SESSION['status_code'] = "success";
          header('Location: viewAllMembersPage.php');
        }
        else
          {
            $_SESSION['status'] = "Member not Added";
            $_SESSION['status_code'] = "error";
            header('Location: viewAllMembersPage.php');
          }





    }




  }

  else{

    $membershipID = "HGT".$get_string;
    $insert_query = "INSERT INTO members (membershipNo, username, phone, gender, marital_status, dob, occupation, place_of_work, residence, department, tithe, year_baptised,home_town,region, country, usertype, `images`) VALUES ('$membershipID', '$username','$phone','$gender', '$marital_status', '$dob', '$occupation','$place_of_work','$residence','$department','$tithe','$year_baptised', '$home_town', '$region', '$country', '$usertype', '$images')";
    $query_run = mysqli_query($connection, $insert_query);
    if ($query_run) 
    {

      move_uploaded_file($_FILES['faculty_image']["name"], "Members_Images/".$_FILES['faculty_image']["name"]);
      $_SESSION['status'] = "Member Added Successfully Membership No : " .$membershipID;
      $_SESSION['status_code'] = "success";
      header('Location: viewAllMembersPage.php');
    }

    else
    {
      $_SESSION['status'] = "Member not Added";
      $_SESSION['status_code'] = "error";
      header('Location: viewAllMembersPage.php');
    }

  }
      







        }}}}

    }}}    }  
  }

}

//  }




















//Update Session

if (isset($_POST['update_btn']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $phone = $_POST['edit_phone'];
    $gender = $_POST['edit_gender'];
    $marital_status = $_POST['edit_marital_status'];
    $dob = $_POST['edit_dob'];
    $occupation = $_POST['edit_occupation'];
    $department = $_POST['edit_department'];
    $place_of_work = $_POST['edit_place_of_work'];
    $residence = $_POST['edit_residence'];
    $year_baptised = $_POST['edit_year_baptised'];
    $home_town = $_POST['edit_home_town'];
    $region = $_POST['edit_region'];
    $country = $_POST['edit_country'];
    $tithe = $_POST['edit_tithe'];
    $usertype = $_POST['edit_usertype'];
    $image =  $_POST["edit_faculty_image"];



    
    $query = "UPDATE members SET username='$username', phone='$phone', gender='$gender', marital_status='$marital_status', dob='$dob', occupation='$occupation', department='$department',  place_of_work='$place_of_work', residence='$residence', year_baptised='$year_baptised',   home_town='$home_town', region='$region', country='$country', tithe='$tithe', usertype='$usertype', `images`='$image'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);


    if ($query_run) 
    {
      $_SESSION['status'] = "Member data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: viewAllMembersPage.php');
    }
    else
    {
      $_SESSION['status'] = "Member data not updated";
      $_SESSION['status_code'] = "error";
      header('Location: viewAllMembersPage.php');
    }

 }












//REGISTER DELETE CODE

if (isset($_POST['delete_btn'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM members WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Member data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: viewAllMembersPage.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: viewAllMembersPage.php');
    } 
}






?>

