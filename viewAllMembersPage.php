
<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<link rel="stylesheet" href="css/style.css">
<!---------------PAGE CONTENT BEGINS-------------------->
 <!-- Begin Page Content -->
 <div class="container-fluid">







<span id="clock"></span>




<script>


var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")

function getthedate(){
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var hours=mydate.getHours()
var minutes=mydate.getMinutes()
var seconds=mydate.getSeconds()
var dn="AM"
if (hours>=12)
dn="PM"
if (hours>12){
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
//change font size here
var cdate="<big><font color='blue' face='Arial'><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+" "+hours+":"+minutes+":"+seconds+" "+dn
+"</b></font></big>"
if (document.all)
document.all.clock.innerHTML=cdate
else if (document.getElementById)
document.getElementById("clock").innerHTML=cdate
else
document.write(cdate)
}
if (!document.all&&!document.getElementById)
getthedate()
function goforit(){
if (document.all||document.getElementById)
setInterval("getthedate()",1000)
}

</script>







<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h5><big> ALL MEMBERS DASHBOARD</big></h5>

    <form action="allMembersPDF.php" method="POST">
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
                      $query = "SELECT membershipNo FROM members ORDER BY membershipNo";
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Male Members</div>
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
                      $query = "SELECT id from  members where gender = 'Male' ";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<a style="text-decoration: none;" href="#"> <h4> Male Members: '.$row.'</h4> </a>';

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
                      $query = "SELECT id from  members where gender = 'Female' ";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<a style="text-decoration: none;" href="#"> <h4> Female Members: '.$row.'</h4> </a>';

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

<marquee behavior="" direction=""><h5><big>ASSEMBLIES OF GOD | HOLY GHOST TEMPLE ALL MEMBERS DASHBOARD</big></h5></marquee> 

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
                      $query = "SELECT id from members where tithe >= 1";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<a style="text-decoration: none;" href="#"> <h4>Members Paying Tithe: '.$row.'</h4> </a>';

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
                      <a href="#">
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

                      echo '<a style="text-decoration: none;" href="#"> <h4>Members Not Paying Tithe: '.$row.'</h4> </a>';

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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">MEMBERS NOT BAPTISED</div>
                      <div class="col-auto">
                      <a href="#">
                    <div class="text-center fas fa-users fa-2x text-success-300"></div>
                    </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                        $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query3 = "SELECT id FROM members where year_baptised = 'No' ORDER BY id";
                      $query_run3 = mysqli_query($connection, $query3);

                      $membersWithoutDept = mysqli_num_rows($query_run3);

                      echo '<a style="text-decoration: none;" href="#"><h4> Members Not Baptised: '.$membersWithoutDept.'</h4></a>';

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



          <form action="backEnd.php" method="post" enctype="multipart/form-data">

<div class="modal-body">

<div class="row">
    <div class="col">

         <div class="form-group">
             <label>FULL NAME</label>
            <input type="text" name="username" id="username" class="form-control"  placeholder="Full Name" required="required">
             <span id="username_error_message" style="color:red;"></span>
         </div>
    </div>


    <div class="col">	
        <div class="form-group">

        <label>GENDER</label> 
        <select name="gender" class="form-control" id="gender" required="require">
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
<label>MARITAL STATUS</label>	
<select name="marital_status" class="form-control">
            <option>Select Marital Status</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorce">Divorce</option>
            <option value="Widow">Widow</option>
        </select>	
</div>
</div>	



<div class="col">
<div class="form-group">

<label>DATE OF BIRTH</label> 
            <input  type="date" name="dob" class="form-control" id="year_baptised" placeholder="22-11-2010">
            <!-- <span id="error_year_baptised" id="date_of_birth_error_message" style="color:red;"></span> -->

</div>

</div>
</div>


<div class="row">
<div class="col">

<div class="form-group">
<label>PHONE NUMBER</label>	
            <input  type="text" name="phone" id="phone" class="form-control checking_phone" placeholder="0*************">
            <span class="error_phone" style="color: red;"></span><span id="phone_error_message" style="color: red;"></span>
</div>
</div>	



<div class="col">
<div class="form-group">

<label>YEAR BAPTISED</label> 
            <input  type="text" name="year_baptised" class="form-control checking_date_of_birth" id="year_baptised" placeholder="22-May-2010" required>
            <!-- <span id="error_year_baptised" id="date_of_birth_error_message" style="color:red;"></span> -->

</div>

</div>
</div>



<div class="form-group">
    <label>OCCUPATION</label>
     <input type="text" name="occupation" id="occupation"  class="form-control" placeholder="Occupation" required>
            <span id="occupation_error_message" style="color:red;"></span>
    </div>






    <div class="form-group">

<label>PLACE OF WORK</label>
     <input type="text" name="place_of_work" id="place_of_work" class="form-control"  placeholder="Place of work" required>
            <span id="place_of_work_error_message" style="color:red;"></span>

    </div>




    <div class="form-group">
<label>RESIDENCE</label>
<input type="text" name="residence" id="residence" class="form-control"   placeholder="Enter Residence">
            <!-- <span id="residence_error_message" style="color:red;"></span> -->
    </div>



<div class="row">
    <div class="col">

    <div class="form-group">
    <label>DEPARTMENT</label> 
        <select name="department" class="form-control"  required>
            <option>Select Department</option>
            <option value="Angelic Voices">Angelic Voices</option>
            <option value="Children">Children</option>
            <option value="Cleaning">Cleaning</option>
            <option value="Healing Voices">Healing Voices</option>
            <option value="Joy Fellowship">Joy Fellowship</option>
            <option value="Men Ministry">Men Ministry</option>
            <option value="Music">Music</option>
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
               <label> ADD IMAGE  </label>
                <input type="file" name="faculty_image" id="faculty_image" class="form-control">

            </div>

        </div>

</div>







        <div class="form-group">
          <label>HOME TOWN</label>	
            <input type="text" name="home_town" id="home_town" class="form-control"   placeholder="Enter Home town">
            <span id="home_town_error_message" style="color:red;"></span>
        </div>








<div class="row">
<div class="col">

<div class="form-group">
    <label>REGION</label> 
    <select name="region" class="form-control"  required>
        <!-- <option>Select Region</option> -->
        <option value="Upper East">Upper East</option>
        <option value="Ahafo">Ahafo</option>
        <option value="Ashanti">Ashanti</option>
        <option value="Bono East">Bono East</option>
        <option value="Brong Ahafo">Brong Ahafo</option>
        <option value="Central">Central</option>
        <option value="Eastern">Eastern</option>
        <option value="Greater Accra">Greater Accra</option>
        <option value="North East">North East</option>
        <option value="Northern">Northern</option>
        <option value="Oti">Oti</option>
        <option value="Savannah">Savannah</option>
        <option value="Upper West">Upper West</option>
        <option value="Western">Western</option>
        <option value="Western North">Western North</option>
        <option value="Volta">Volta</option>
    </select>	

    </div>

</div>
    


    <div class="col">	
        <div class="form-group">
        <label>COUNRTY</label> 
        <select name="country" class="form-control"  required>
            <!-- <option>Select Country</option> -->
            <option value="Ghana">Ghana</option>
            <option value="Benin">Benin</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Congo">Congo</option>
            <option value="Côte dIvoire">Côte dIvoire</option>
            <option value="Gabon">Gabon</option>
            <option value="Mali">Mali</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Senegal">Senegal</option>
            <option value="South Africa">South Africa</option>
            <option value="Togo">Togo</option>
        </select>	

        </div>
    </div>

</div>



<!-- 
    <div class="form-group">
    <label>Tithe</label>	
    <input type="text" name="tithe" id="tithe" class="form-control"  placeholder="Tithe" required>
            <span id="tithe_error_message" style="color:red;"></span>
        </div> -->



<input type="hidden" name="tithe" value="0">


<input type="hidden" name="usertype" value="member">

</div>




    <div class="modal-footer">
        <button type="submit" name="register_btn" onclick="return validated()"  class="btn btn-primary">Add</button>
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
                Add New Member
            </button>
        </h6>
    </div>




        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header text-center py-3">
          <h6 class="m-0 font-weight-bold text-primary">ASSEMBLIES OF GOD | HOLY GHOST TEMPLE MEMBERS DATATABLE</h6>
        </div>



        <div class="card-body">

        <div class="table-responsive">

        <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");

            $query = "SELECT * FROM `members` GROUP by username ORDER by username;";
            $query_run = mysqli_query($connection, $query);
            
        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Membership No</th>
                        <th>Full Name</th>
                        <th>Contact</th>
                        <th>Gender</th>
                        <th>Dept</th>
                        <th>Occupation</th>
                        <th>Work Place</th>
                        <th>Residence</th>
                        <th>Year Baptised</th>
                        <th>Home Town</th>
                        <th>Region</th>
                        <th>Country</th>
                        <th>Tithe</th>
                        <th>Marital Status</th>
                        <th>Date of Birth</th>
                        <th>Image</th>
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
                        <td><?php echo $row['membershipNo']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['occupation']; ?></td>
                        <td><?php echo $row['place_of_work']; ?></td>
                        <td><?php echo $row['residence']; ?></td>
                        <td><?php echo $row['year_baptised']; ?></td>
                        <td><?php echo $row['home_town']; ?></td>
                        <td><?php echo $row['region']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td>Ghc<?php echo $row['tithe']; ?></td>
                        <td><?php echo $row['marital_status']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo '<img src="Members_Images/'.$row['images'].'" width="100px;" height="100px;" alt="Image">'?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['update_time']; ?></td>

                        <td>
                            <form action="editMemebrsInfo.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success"><i class="fa fa-edit color-primary" title="Edit Record"></i></button>
                            </form>
                            
                        </td>
        <td>

                    
            <form action="backEnd.php" method="post">
                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="delete_btn" onclick="if (!confirm('Are you sure you want to delete this Member')) return false" class="btn btn-danger"><i class="fa fa-trash-alt color-danger" title="Delete Record"></i></button>
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
    // var phone = document.getElementById("phone").value;
    // var year_baptised= document.getElementById("year_baptised").value;
	var occupation = document.getElementById("occupation").value;
	var place_of_work = document.getElementById("place_of_work").value;
    // var residence = document.getElementById("residence").value;
    var home_town = document.getElementById("home_town").value;
	
	
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


	// if (phone == ""){
  //       document.getElementById("phone_error_message").innerHTML="** Contact required";
  //       return false;
  //   }
	
	//  if (isNaN(phone)){
	// 	document.getElementById("phone_error_message").innerHTML="** Contact must be only digits";
  //       return false;
	// }


	//  if (phone.length<10){
	// 	document.getElementById("phone_error_message").innerHTML="** Contact must be 10 digits";
  //       return false;
	// }
	
	// if (phone.length>10){
	// 	document.getElementById("phone_error_message").innerHTML="** Contact must be 10 digits";
  //       return false;
	// }

  //   if ((phone.charAt(0) != 0)){
	// 	document.getElementById("phone_error_message").innerHTML="** Contact must begin with 0";
  //       return false;
	// }


	

	// if (year_baptised == ""){
	// 	document.getElementById("year_baptisederror_message").innerHTML="**This field is required";
  //       return false;
	// }


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



	// if (nametype.test(residence) == false){
  //       document.getElementById("residence_error_message").innerHTML="** Department should be letters";
  //       return false;
  //   }


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



