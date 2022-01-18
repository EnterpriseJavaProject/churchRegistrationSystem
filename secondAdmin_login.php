<?php
session_start(); 
include('includes/header.php');





if (isset($_SESSION["locked"])) {
  
  $difference = time() - $_SESSION["locked"];

  if ($difference > 10) {
    unset($_SESSION["locked"]);
    unset($_SESSION["login_attempts"]);
  }

}

// LOGIN ATTEMPT
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $name_login = $_POST['username'];
  $password_login = $_POST['password'];

  $connection = mysqli_connect("localhost","root","","assemblies_of_God");
  $query = "SELECT * FROM admin_login WHERE username='$name_login'AND password='$password_login' ";
  $query_run = mysqli_query($connection, $query);
  $usertypes = mysqli_fetch_array($query_run);




      if($usertypes['usertype'] == "Admin") 
    {
        $_SESSION['username'] = $name_login;
        header('Location: admin_dashboard.php');
        $_SESSION['status'] =  "You are welcome  $name_login";
        $_SESSION['status_code'] = "success";
    }

    else if($usertypes['usertype'] == "User")
    {
        header('Location: userHomePage.php');
        $_SESSION['status'] =  "You are welcome  $name_login";
        $_SESSION['status_code'] = "success";
    }

    else
    {   
        $_SESSION["login_attempts"] += 1;
        $_SESSION["error"] = "Invalid Details! Try Again"; 
    }

  }
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




?>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f2335702-9774-4b1c-b0da-c92f58fbccc6";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<!-- <link rel="stylesheet" href="css/style.css"> -->

<style>
  .social-icons{
    margin: 30px auto;
    text-align: center;
}
.social-icons img{
    width: 30px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 50%;
}


.heading_5{
    font-size: 40px;
}


.eye_visibility{
  position: absolute;
   		right: 80px;
   		transform: translate(0, -50%);
   		top: 72%;
   		cursor: pointer;
   }
   .fa {
   font-size: 30px;
   color: black;
   }
</style>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-12">

            <div class="p-5">
            <a href="index.php"><img src="images/back.png" width="30px" height="30px"></a>

              <div class="text-center">
              <img src="images/Assemblies_Of_God_Logo.jpg" alt="" width="80px" height="80px">
              <br><br>
                <h1 class="h4 text-gray-900 mb-4">ADMIN LOGIN</h1>
              </div>


              <div class="social-icons">
                    <img src="images/fb1.png">
                    <img src="images/google1.png">
                    <img src="images/twitter.jpg">
                    <!-- <img src="images/whatsapp icon.jpg"> -->
                    <!-- <img src="images/instagram2.jpeg"> -->
                </div>


<?php if (isset($_SESSION["error"])) {  ?>

  <div class="text-center" style="color: red;"><?= $_SESSION["error"]; ?></div>

  <?php unset($_SESSION["error"]);  } ?>



              <form class="user" action="" method="POST">
              <label>ADMIN USERNAME</label>
            <div class="form-group">
            <input type="text" name="username" id="name" class="form-control form-control-user" autocomplete="off" placeholder="Enter Admin Username" required>				 
             <span id="name_error_message" style="color:red;"></span>
                </div>
				




				<div class="form-group">
        <label>PASSWORD</label>
                 <input type="password" name="password" id="password" class="form-control form-control-user" autocomplete="off" placeholder="Enter Password" required>
                  <span class="eye_visibility"> <i class="fas fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i> </span>
		
                </div>

<?php 

      if ($_SESSION["login_attempts"] > 3) {
          $_SESSION["locked"] = time();
          echo "<p style='color: red;'>You attempted 3 times so your account has been block. Contact youe system Admin for help</p>";

      } else{

        ?>

<button type="submit" name="login_btn" onclick="return validate()" class="btn btn-primary text-light text-center btn-outline-success btn-user btn-block">Login</button>


 <?php } ?>

                <hr>
              <i style="color:black;font-size:16px;">If you are Member?</i>  <a href="members_login.php" style="float:right; color:black; ">Login here</a>

                <!-- <p class="text-center">Register for a course? <a href="Select_Course.php">Register Now!</a></p>

                <p class="text-center">Check your Results? <a href="check_results.php">Check Now!</a></p>
                 -->
            </form>
             
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>





<?php
include('includes/main_scripts.php');
?>





<script>
var state = false;

 function toggle(){
	 
	 if(state){
		 document.getElementById(
				 "password").
				 setAttribute("type",
						 "password");
		 document.getElementById(
				 "eye").style.color='#7a797e';
		 state = false;
	 }
	 
	 else{
		 document.getElementById(
		 "password").
		 setAttribute("type",
				 "text");
 		 document.getElementById(
		 "eye").style.color='#5887ef';
 		 state = true;
	 }
 }

</script>



<script>

function validate(){
	
	var name = document.getElementById("name").value;

	
	
	var nametype = /^[A-Z a-z]+$/;
    var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	


	
	 if (nametype.test(name) == false){
        document.getElementById("name_error_message").innerHTML="** Only Letters are required";
        return false;
    }
	
}
</script>