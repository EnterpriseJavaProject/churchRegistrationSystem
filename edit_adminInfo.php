<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>



 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  


  <div class="container-fluid">

    <!----DataTales Examples-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">UPDATE ASSEMBLIES OF GOD | HOLY GHOST TEMPLE ADMIN INFO </h4>
        </div>
        <div class="card-body">

        <?php

                $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                if (isset($_POST['edit_btn']))
           {
                $id = $_POST['edit_id'];
            
                $query = "SELECT * FROM admin_login WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
            {
        ?>


<form action="logincode.php" method="POST">

<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >

<div class="form-group">
    <label>Full Name</label>
    <input type="text" name="edit_username" id="username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Full Name" required>
    <span id="username_error_message" style="color:red;"></span>
</div>

<div class="form-group">
    <label>Phone Number</label>
    <input type="phone" name="edit_phone" id="phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Enter Phone Number" required>
    <span id="phone_error_message" style="color: red;"></span>

</div>



<div class="form-group">
    <label>Email</label>
    <input type="email" name="edit_email" id="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email" required>
    <span id="email_error_message" style="color: red;"></span>

</div>




<div class="form-group">
    <label>Department</label>
    <select name="edit_department" class="form-control"  required>
    <option value="<?php echo $row['department'] ?>"> <?php echo $row['department'] ?> </option>
    <option>Select Department</option>
            <option value="Angelic Voices">Angelic Voices</option>
            <option value="Children">Children</option>
            <option value="Healing Voices">Healing Voices</option>
            <option value="Joy Fellowship">Joy Fellowship</option>
            <option value="Men Ministry">Men Ministry</option>
            <option value="Women Ministry">Women Ministry</option>
            <option value="Mission Team">Mission Team</option>
            <option value="PathFinders">PathFinders</option>
            <option value="Royal Rangers">Royal Rangers</option>
            <option value="Ushering">Ushering</option>
            <option value="Sunday School">Sunday School</option>
            <option value="Young Singles">Young Singles</option>
            <option value="Youth Ministry">Youth Ministry</option>
            <option value="Media">Media</option>
            <option value="IT">IT</option>
            <option value="None">None</option>
        </select>	
</div>

<div class="form-group">
    <label>Usertype</label>
    <select name="edit_usertype" class="form-control" required>
    <option value="<?php echo $row['usertype'] ?>"> <?php echo $row['usertype'] ?> </option>
            <option>Select Usertype</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select>

</div>



<div class="form-group">
    <label>Password</label>
    <input type="text" name="edit_password" id="password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password" required>
    <span id="password_error_message" style="color:red;"></span>
</div>




<a href="viewAllAdminPage.php" class="btn btn-danger"> CANCEL </a>
<button type="submit" name="update_btn" onclick="return validate()" class="btn btn-primary"> UPDATE </button>

</form>

            <?php
                }
                }
            ?>





</div>
</div>
</div>
</div>
</div>
</div>







<script>

function validate(){
	
	var username = document.getElementById("username").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;

	
	
	var nametype = /^[A-Z a-z]+$/;
    // var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	

	if (username == ""){
        document.getElementById("username_error_message").innerHTML="** username required";
        return false;
    }
	
	if (nametype.test(username) == false){
        document.getElementById("username_error_message").innerHTML="** Username required letters";
        return false;
    }


	if (phone == ""){
        document.getElementById("phone_error_message").innerHTML="** Contact required";
        return false;
    }
	
	 if (isNaN(phone)){
		document.getElementById("phone_error_message").innerHTML="** Contact must be only digits";
        return false;
	}


	 if (phone.length<10){
		document.getElementById("phone_error_message").innerHTML="** Contact must be 10 digits";
        return false;
	}
	
	if (phone.length>10){
		document.getElementById("phone_error_message").innerHTML="** Contact must be 10 digits";
        return false;
	}

    if ((phone.charAt(0) != 0)){
		document.getElementById("phone_error_message").innerHTML="** Contact must begin with 0";
        return false;
	}


    if (email == ""){
        document.getElementById("email_error_message").innerHTML="** Email required";
        return false;
    }


	if  (emailformat.test(email)== false){
        document.getElementById("email_error_message").innerHTML="** Enter A Valid Email";
        return false;
    }



    if (password == ""){
        document.getElementById("password_error_message").innerHTML="** password required";
        return false;
    }



	if (nametype.test(password) == false){
        document.getElementById("password_error_message").innerHTML="** password should be only characters";
        return false;
    }


    if (password.length>5){
		document.getElementById("password_error_message").innerHTML="** Password must be more than 5 letters";
        return false;
	}




	
}
</script>









<?php
include('includes/main_scripts.php');
include('includes/footer.php');
?>