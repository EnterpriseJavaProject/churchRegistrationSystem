<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<link rel="stylesheet" href="css/style.css">
<!---------------PAGE CONTENT BEGINS-------------------->
 <!-- Begin Page Content -->
 <div class="container-fluid">





<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h6 style="color:blue;font-size:32px;"> ALL HOLY GHOST TEMPLE ADMINS DASHBOARD</h6>

    <form action="allAdminPDF.php" method="POST">
       <button type="submit" name="btn_pdf" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report Of All Admins</button>
    </form>
    <!-- <a href="https://newpatrioticparty.org/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> OFFICIAL PAGE OF NPP PARTY</a> -->
</div>







<div class="row">

<!---------------ADMIN DASHBOARD-------->
          <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total registered Members</div>
                      <div class="col-auto">
                      <a href="#">
                              <div class="text-center fas fa-users fa-2x text-warning-300"></div>
                              </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");

                    // $connection = mysqli_connect("localhost","root","","mobile_app");
                    //  $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     //$connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id FROM members ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<a style="text-decoration: none;" href="#"> <h4> Total Registered Memebrs: '.$row.'</h4> </a>';

                      ?>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>





<!---------------ADMIN DASHBOARD-------->
<div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Registered System Admin</div>
                      <div class="col-auto">
                      <a href="#">
                    <div class="text-center fas fa-users fa-2x text-success-300"></div>
                    </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                                  $connection = mysqli_connect("localhost","root","","assemblies_of_God");


                     // $connection = mysqli_connect("localhost","root","","mobile_app");
                      // $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     // $connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id FROM admin_login where usertype = 'Admin' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<a style="text-decoration: none;" href="#"> <h4> Total Registered Admin: '.$row.'</h4> </a>';

                      ?>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>









<!---------------ADMIN DASHBOARD-------->
<div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Registered System Users</div>
                      <div class="col-auto">
                      <a href="#">
                    <div class="text-center fas fa-users fa-2x text-danger-300"></div>
                    </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                                  $connection = mysqli_connect("localhost","root","","assemblies_of_God");


                    // $connection = mysqli_connect("localhost","root","","mobile_app");
                    //  $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     //$connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id FROM admin_login where usertype = 'User' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<a style="text-decoration: none;" href="#"> <h4> Total Registered Users: '.$row.'</h4> </a>';

                      ?>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>





<!---------------ADMIN DASHBOARD-------->
<div class="col-xl-3 col-md-6 mb-4" hidden="true">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">MEMBERS WITHOUT DEPARTMENT</div>
                      <div class="col-auto">
                    <div class="text-center fas fa-users fa-2x text-primary-300"></div>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                        $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query3 = "SELECT id FROM members where department = 'None' ORDER BY id";
                      $query_run3 = mysqli_query($connection, $query3);

                      $membersWithoutDept = mysqli_num_rows($query_run3);

                      echo '<h4> Members Without Dept: '.$membersWithoutDept.'</h4>';

                      ?>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>



</div>





<br>

<!-- <marquee behavior="" direction=""><h5><big>ASSEMBLIES OF GOD | HOLY GHOST TEMPLE ALL MEMBERS DASHBOARD</big></h5></marquee>  -->

<br>






<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
             <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>



          <form action="logincode.php" method="post">

<div class="modal-body">

<div class="row">
    <div class="col">

         <div class="form-group">
             <label>FULL NAME</label>
            <input type="text" name="username" id="username" class="form-control" autocomplete="off" placeholder="Full Name" required>
             <span id="username_error_message" style="color:red;"></span>
         </div>
    </div>


    <div class="col">	
        <div class="form-group">
            <label>PHONE NUMBER</label>	
            <input  type="number" name="phone" id="phone" class="form-control checking_phones"  autocomplete="off" placeholder="0*************" required>
            <span class="error_phones" style="color: red;"><span id="phone_error_message" style="color: red;"></span>
        </div>
    </div>

</div>	








<div class="form-group">
    <label>EMAIL</label>
     <input type="email" name="email" id="email"  class="form-control checking_email" autocomplete="off" placeholder="Enter Email" required>
     <span class="error_email" style="color: red;"> <span id="email_error_message" style="color:red;"></span>
    </div>



<div class="row">
<div class="col">


<div class="form-group">
<label>DEPARTMENT</label> 
        <select name="department" class="form-control"  required>
            <option>Select Department</option>
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





</div>	



<div class="col">

<div class="form-group">
<label>USERTYPE</label> 
        <select name="usertype" class="form-control" required>
            <option>Select Usertype</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select>	
</div>

</div>

</div>



<div class="form-group">
    <label>PASSWORD</label>
     <input type="text" name="password" id="password"  class="form-control" autocomplete="off" placeholder="Passwrod" required>
            <span id="password_error_message" style="color:red;"></span>
    </div>



</div>




    <div class="modal-footer">
        <button type="submit" name="register_btn" onclick="return validate()"  class="btn btn-primary">Add</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div>

</form>
        </div>
    </div>
</div>



<style>


h4{
    color: #3060f0;
}



</style>





<div class="container-fluid">

<!----DataTales Examples-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
        </h6>
    </div>








    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">

        <!-- <form action="try.php" method="POST">
                <button type="submit" name="delete_multiple_register_atebubu/amantin_data" class="btn btn-danger">Delete Multiple Data</button>
            </form> -->


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                Add New Admin
            </button>
        </h6>
    </div>




        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">ASSEMBLIES OF GOD | HOLY GHOST TEMPLE ADMIN DATATABLE</h6>
        </div>



        <div class="card-body">

        <div class="table-responsive">

        <?php
            // $connection = mysqli_connect("localhost","root","","assemblies_of_God");
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");

            $query = "SELECT * FROM `admin_login` ORDER BY `lastactivity` DESC";
            $query_run = mysqli_query($connection, $query);
            
        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Usertype</th>
                        <th>Login Time</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                if (mysqli_num_rows($query_run) > 0)
                 {
                    while ($row = mysqli_fetch_assoc($query_run))
                     {
                ?>
                      
                    <tr>

                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['usertype']; ?></td>
                        <td><?php echo $row['lastactivity']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['update_time']; ?></td>

                        <td>
                            <form action="edit_adminInfo.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success"><i class="fa fa-edit color-primary" title="Edit Record"></i></button>
                            </form>
                            
                        </td>
                        <td>


                            <form action="logincode.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_btn" class="btn btn-danger" onclick="if (!confirm('Are you sure you want to delete this Admin')) return false"><i class="fa fa-trash-alt color-danger" title="Delete Record"></i></button>
                            </form>
                        </td>

                        
                    </tr>

                    <?php
                    }

                 }
                 else
                 {
                     echo "No Record Found";
                 }

                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 





<script>


$(document).ready(function () {
    

    $('.checking_phones').keyup(function (e) {

        var phone = $('.checking_phones').val();
        //alert(email);
        $.ajax({
            type: "POST",
            url: "logincode.php",
            data: {
                "check_submit_btn": 1,
                "phones_id": phone,
            },
            success: function (response) {
                // alert(response);
                $('.error_phones').text(response);
            }
        });

    });

});


</script>



<script>


$(document).ready(function () {
    

    $('.checking_email').keyup(function (e) {

        var email = $('.checking_email').val();
        //alert(email);
        $.ajax({
            type: "POST",
            url: "logincode.php",
            data: {
                "check_submit_btns": 1,
                "email_id": email,
            },
            success: function (response) {
                // alert(response);
                $('.error_email').text(response);
            }
        });

    });

});


</script>


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
include('includes/scripts.php');
include('includes/footer.php');
?>



