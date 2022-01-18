<?php
session_start(); 
include('includes/header.php');
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
   		top: 74%;
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
            <a href="admin_dashboard.php"><img src="images/back.png" width="30px" height="30px"></a>

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


            <div class="text-center" style="color: red;">Invalid Details! Try Again</div>



              <form class="user" action="logincode.php" method="POST">
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

<button type="submit" name="admindashboardlogin_btn" onclick="return validate()" class="btn btn-primary text-light text-center btn-outline-success btn-user btn-block">Login</button>
                <hr>
              <!-- <i style="color:black;font-size:16px;">If you are Member?</i>  <a href="members_login.php" style="float:right; color:black; ">Login here</a> -->

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





<script src="js/sweetalert.min.js"></script>


<?php
    if (isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
?>


<script>
swal({
title: "<?php echo $_SESSION['status'];  ?>",
//text: "You clicked the button!",
icon: "<?php echo $_SESSION['status_code'];  ?>",
button: "OK Done!",
});
</script>



<?php
        
        unset($_SESSION['status']);
    }
?>











<script>