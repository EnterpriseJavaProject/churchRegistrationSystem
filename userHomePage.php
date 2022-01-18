
<?php 
session_start();
include('includes/header.php');
include('includes/usersNavBar.php');





if (!isset($_SESSION['username'])) {
  ?>
      <script>
          window.location.href='admin_login.php';
      </script>

  <?php
}
else{

  $_SESSION['status'] =  "You are welcome Sytem User";
  $_SESSION['status_code'] = "success";
}



?>

<link rel="stylesheet" href="css/style.css">
<!---------------PAGE CONTENT BEGINS-------------------->
 <!-- Begin Page Content -->
 <div class="container-fluid">



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h6 style="color:blue;font-size:32px;"> ALL HOLY GHOST TEMPLE MEMBERS DASHBOARD</h6>

    <form action="allMembersPDF.php" method="POST">
       <button type="submit" name="btn_pdf" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report Of All Members</button>
    </form>
    <!-- <a href="https://newpatrioticparty.org/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> OFFICIAL PAGE OF NPP PARTY</a> -->
</div>



<div class="row">

<!---------------ADMIN DASHBOARD-------->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total registered Members</div>
                      <div class="col-auto">
                      <a href="usersViewAllMembersPage.php">
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

                      echo '<a style="text-decoration: none;" href="usersViewAllMembersPage.php"> <h4> All Memebrs: '.$row.'</h4> </a>';

                      ?>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>





<!---------------ADMIN DASHBOARD-------->
<div class="col-xl-3 col-md-6 mb-4">
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
<div class="col-xl-3 col-md-6 mb-4">
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
<div class="col-xl-3 col-md-6 mb-4">
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



<!-- <marquee behavior="" direction=""><h5><big>ASSEMBLIES OF GOD | HOLY GHOST TEMPLE ALL MEMBERS DASHBOARD</big></h5></marquee>  -->


    

<br><br>





<!-- <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
             <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>


        </div>
    </div>
</div> -->





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

        <form action="try.php" me    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">

        <form action="try.php" method="POST">
                <button type="submit" name="delete_multiple_register_atebubu/amantin_data" class="btn btn-danger">Delete Multiple Data</button>
            </form> 


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                Add New Member
            </button>
        </h6>
    </div>
thod="POST">
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
          <h6 class="m-0 font-weight-bold text-primary">ASSEMBLIES OF GOD | HOLY GHOST TEMPLE MEMBERS DATATABLE</h6>
        </div>



        <div class="card-body">

        <div class="table-responsive">

        <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");

            $query = "SELECT * FROM members";
            $query_run = mysqli_query($connection, $query);
            
        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
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
                        <!-- <th>Tithe</th> -->

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

                        <td><?php echo $row['id']; ?></td>
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

                        <!-- <td>
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
                        </td> -->

                        
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





<script type="text/javascript">
            $(function() {
                $('.bars li .bar').each(function(key, bar) {
                    var percentage = $(this).data('percentage');
                    $(this).animate({
                        'height': percentage + '%'
                    }, 5000);

                });
            });
        </script>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>



