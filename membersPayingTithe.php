
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
 <h5><big>ALL MEMBERS PAYING TITHE DASHBOARD</big></h5>

    <form action="allMembersPayingTithePDF.php" method="POST">
       <button type="submit" name="btn_pdf" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</button>
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
                      <a href="viewAllMembersPage.php">
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

                      echo '<a style="text-decoration: none;" href="viewAllMembersPage.php"> <h4> Total Registered Memebrs: '.$row.'</h4> </a>';

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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Male Members</div>
                      <div class="col-auto">
                      <a href="viewAllMaleMembersPage.php">
                    <div class="text-center fas fa-users fa-2x text-success-300"></div>
                    </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                                  $connection = mysqli_connect("localhost","root","","assemblies_of_God");


                     // $connection = mysqli_connect("localhost","root","","mobile_app");
                      // $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     // $connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id from  members where gender = 'Male' ";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<a style="text-decoration: none;" href="viewAllMaleMembersPage.php"> <h4> Male Members: '.$row.'</h4> </a>';

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
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Female Members</div>
                      <div class="col-auto">
                      <a href="viewAllFemaleMembersPage.php">
                    <div class="text-center fas fa-users fa-2x text-danger-300"></div>
                    </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                                  $connection = mysqli_connect("localhost","root","","assemblies_of_God");


                    // $connection = mysqli_connect("localhost","root","","mobile_app");
                    //  $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     //$connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id from  members where gender = 'Female' ";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<a style="text-decoration: none;" href="viewAllFemaleMembersPage.php"> <h4> Female Members: '.$row.'</h4> </a>';

                      ?>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>





<!---------------ADMIN DASHBOARD-------->
<div class="col-xl-4 col-md-6 mb-4" hidden="true">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Registered Admins</div>
                      <div class="col-auto">
                    <div class="text-center fas fa-users fa-2x text-primary-300"></div>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                                  $connection = mysqli_connect("localhost","root","","assemblies_of_God");


                     // $connection = mysqli_connect("localhost","root","","mobile_app");
                      // $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     // $connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id from members where tithe >= 1";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h4>Total Tithe Paid: '.$row.'</h4>';

                      ?>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>



</div>




<br>

<marquee behavior="" direction=""><h5><big>ASSEMBLIES OF GOD | HOLY GHOST TEMPLE ALL MEMBERS PAYING TITHE DASHBOARD</big></h5></marquee> 

<br>



<div class="row">

<!---------------ADMIN DASHBOARD-------->
          <div class="col-xl-3 col-md-6 mb-4" hidden="true">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total registered Members</div>
                      <div class="col-auto">
                              <div class="text-center fas fa-users fa-2x text-warning-300"></div>
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

                      echo '<h4> Total Memebrs: '.$row.'</h4>';

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
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Members Paying Tithe</div>
                      <div class="col-auto">
                      <a href="membersPayingTithe.php">
                    <div class="text-center fas fa-users fa-2x text-danger-300"></div>
                    </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                                  $connection = mysqli_connect("localhost","root","","assemblies_of_God");


                    // $connection = mysqli_connect("localhost","root","","mobile_app");
                    //  $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     //$connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id from members where tithe >= 1";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<a style="text-decoration: none;" href="membersPayingTithe.php"> <h4>Members Paying Tithe: '.$row.'</h4> </a>';

                      ?>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>





<!---------------ADMIN DASHBOARD-------->
<div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Members Not Paying Tithe</div>
                      <div class="col-auto">
                      <a href="membersNotPayingTithe.php">
                    <div class="text-center fas fa-users fa-2x text-primary-300"></div>
                    </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");


                     // $connection = mysqli_connect("localhost","root","","mobile_app");
                      // $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     // $connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id from members where tithe <= 0";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<a style="text-decoration: none;" href="membersNotPayingTithe.php"> <h4>Members Not Paying Tithe: '.$row.'</h4> </a>';

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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Tithe Paid</div>
                      <div class="col-auto">
                    <div class="text-center fas fa-users fa-2x text-success-300"></div>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                        $connection = mysqli_connect("localhost","root","","assemblies_of_God");


                     // $connection = mysqli_connect("localhost","root","","mobile_app");
                      // $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     // $connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query3 = "SELECT sum(tithe) from members order by sum(tithe) DESC LIMIT 1";
                      $query_run3 = mysqli_query($connection, $query3);

                      $sumOfTithe = mysqli_num_rows($query_run3);

                      //echo '<h4> Total Tithe Paid: '.$sumOfTithe.'</h4>';

                      echo "Null";
                      ?>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>








</div>












<br><br>







<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
             <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>



          <!-- <form action="backEnd.php" method="post">

<div class="modal-body">

<div class="row">
    <div class="col">

         <div class="form-group">
             <label>FULL NAME</label>
            <input type="text" name="username" id="username" class="form-control"  autocomplete="off" placeholder="Full Name" required>
             <span id="username_error_message" style="color:red;"></span>
         </div>
    </div>


    <div class="col">	
        <div class="form-group">

        <label>GENDER</label> 
        <select name="gender" class="form-control"  require="require">
            <option>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>	

        </div>
    </div>

</div>	





<div class="row">
<div class="col">

<div class="form-group">
<label>PHONE NUMBER</label>	
            <input  type="number" name="phone" id="phone" class="form-control checking_phone" autocomplete="off" placeholder="0*************" required>
            <span class="error_phone" style="color: red;"></span><span id="phone_error_message" style="color: red;"></span>
</div>
</div>	



<div class="col">
<div class="form-group">

<label>YEAR BAPTISED</label> 
            <input  type="date" name="year_baptised" class="form-control checking_date_of_birth" id="course_start_date" placeholder="Year Baptised" required>
            <span id="error_date_of_birth" id="date_of_birth_error_message" style="color:red;"></span>

</div>

</div>
</div>



<div class="form-group">
    <label>OCCUPATION</label>
     <input type="text" name="occupation" id="occupation"  class="form-control" autocomplete="off" placeholder="Occupation" required>
            <span id="occupation_error_message" style="color:red;"></span>
    </div>












<div class="row">
    <div class="col">

    <div class="form-group">


    <label>DEPARTMENT</label> 
        <select name="department" class="form-control"  required>
            <option>Select Department</option>
            <option value="PathFinders">PathFinders</option>
            <option value="Healing Voices">Healing Voices</option>
            <option value="Choir">Choir</option>
            <option value="Media">Media</option>
            <option value="Young Singles">Young Singles</option>
            <option value="Board of Directors">Board of Directors</option>
        </select>	


    </div>
    </div>
    
<div class="col">	
<div class="form-group">

<label>PLACE OF WORK</label>
     <input type="text" name="place_of_work" id="place_of_work" class="form-control"  autocomplete="off" placeholder="Place of work" required>
            <span id="place_of_work_error_message" style="color:red;"></span>

    </div>


</div>

</div>




<div class="row">
    <div class="col">
    <div class="form-group">
    <label>RESIDENCE</label>	
    <input type="text" name="residence" id="residence" class="form-control"  autocomplete="off" placeholder="Residence" required>
            <span id="residence_error_message" style="color:red;"></span>
        </div>


    </div>
    


    <div class="col">	
        <div class="form-group">
          <label>HOME TOWN</label>	
            <input type="text" name="home_town" id="home_town" class="form-control"   autocomplete="off" placeholder="Enter Home town">
            <span id="home_town_error_message" style="color:red;"></span>
        </div>
    </div>

</div>




<div class="row">
    <div class="col">
    <div class="form-group">
    <label>Tithe</label>	
    <input type="text" name="tithe" id="tithe" class="form-control"  autocomplete="off" placeholder="Tithe" required>
            <span id="tithe_error_message" style="color:red;"></span>
        </div>


    </div>
    


    <div class="col">	
        <div class="form-group">
        <label>COUNRTY</label> 
        <select name="country" class="form-control"  required>
            <option>Select Country</option>
            <option value="Benin">Benin</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Congo">Congo</option>
            <option value="Cote Divour">Cote Divour</option>
            <option value="Gabon">Gabon</option>
            <option value="Ghana">Ghana</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Senegal">Senegal</option>
            <option value="South Africa">South Africa</option>
            <option value="Togo">Togo</option>
        </select>	

        </div>
    </div>

</div>



<input type="hidden" name="usertype" value="member">

</div>




    <div class="modal-footer">
        <button type="submit" name="register_btn" onclick="return validate()"  class="btn btn-primary">Add</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div>

</form> -->
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








    <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">

         <form action="try.php" method="POST">
                <button type="submit" name="delete_multiple_register_atebubu/amantin_data" class="btn btn-danger">Delete Multiple Data</button>
            </form> 


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                Add New Member
            </button>
        </h6>
    </div> -->




        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header text-center py-3">
          <h6 class="m-0 font-weight-bold text-primary">ASSEMBLIES OF GOD | HOLY GHOST TEMPLE MEMBERS PAYING TITHE DATATABLE</h6>
        </div>



        <div class="card-body">

        <div class="table-responsive">

        <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");

            $query = "SELECT * FROM members where tithe >= 1";
            $query_run = mysqli_query($connection, $query);
            
        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Contact</th>
                        <th>Gender</th>
                        <th>Dept</th>
                        <th>Occupation</th>
                        <th>Work Place</th>
                        <th>Residence</th>
                        <th>Year Baptised</th>
                        <th>Home Town</th>
                        <th>Country</th>
                        <th>Tithe</th>
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
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['occupation']; ?></td>
                        <td><?php echo $row['place_of_work']; ?></td>
                        <td><?php echo $row['residence']; ?></td>
                        <td><?php echo $row['year_baptised']; ?></td>
                        <td><?php echo $row['home_town']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td>Ghc<?php echo $row['tithe']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['update_time']; ?></td>

                        <td>
                            <form action="editMemebrsInfo.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                            
                        </td>
                        <td>


                            <form action="backEnd.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_btn" class="btn btn-danger" onclick="if (!confirm('Are you sure you want to delete this member')) return false">DELETE</button>
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

function validate(){
	
	var username = document.getElementById("username").value;
    var phone = document.getElementById("phone").value;
	// var department = document.getElementById("department").value;
	var occupation = document.getElementById("occupation").value;
	var place_of_work = document.getElementById("place_of_work").value;
    var residence = document.getElementById("residence").value;
    var home_town = document.getElementById("home_town").value;
	var tithe = document.getElementById("tithe").value;
	
	
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



    if (occupation == ""){
        document.getElementById("occupation_error_message").innerHTML="** Occupation required";
        return false;
    }



	if (nametype.test(occupation) == false){
        document.getElementById("occupation_error_message").innerHTML="** Occupation should be only characters";
        return false;
    }




	if (place_of_work == ""){
        document.getElementById("place_of_work_error_message").innerHTML="** Place of work required";
        return false;
    }



	if (nametype.test(place_of_work) == false){
        document.getElementById("place_of_work_error_message").innerHTML="** Work place should be letters";
        return false;
    }




    if (residence == ""){
        document.getElementById("residence_error_message").innerHTML="** Department required";
        return false;
    }



	if (nametype.test(residence) == false){
        document.getElementById("residence_error_message").innerHTML="** Department should be letters";
        return false;
    }



	

	if (isNaN(tithe)){
		document.getElementById("tithe_error_message").innerHTML="** Tithe must be only digits";
        return false;
	}


   if (home_town == ""){
        document.getElementById("home_town_error_message").innerHTML="** Home Town required";
        return false;
    }
	
	if (nametype.test(home_town) == false){
        document.getElementById("home_town_error_message").innerHTML="** Home Town required letters";
        return false;
    } 


	
}
</script>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>



