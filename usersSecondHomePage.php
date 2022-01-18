<?php 
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/header.php');
include('includes/usersNavBar.php');
?>


<!-- <link rel="stylesheet" href="css/style.css"> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>



<link rel="stylesheet" href="css/line/blue.css">
<link rel="stylesheet" href="css/line/red.css">
<link rel="stylesheet" href="css/line/green.css">
<link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
<link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
<link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
<link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen">
<link rel="stylesheet" href="css/main.css" media="screen">
<script src="js/js/modernizr/modernizr.min.js"></script>

<style>

.info{
  font-style: italic;
  font-size: 32px;
  font-weight: bolder;
}

.chart {
                    /* width: 1000px;
                    height: 300px; */
                display: block;
                margin-left: 350px;

            }

            .numbers {
                color: maroon;
                margin: 0;
                padding: 0;
                width: 50px;
                height: 100%;
                display: inline-block;
                float: left;
            }

            .numbers li {
                list-style: none;
                height: 150px;
                position: relative;
                bottom: 145px;
            }

            .numbers span {
                font-size: 12px;
                font-weight: 600;
                position: absolute;
                bottom: 0;
                right: 10px;
            }

            .bars {
                color: #3060f0;
                font-size: 12px;
                font-weight: 600;
                background: lightseagreen;
                margin: 0;
                padding: 0;
                display: inline-block;
                width: 430px;
                height: 300px;
                box-shadow: 0 0 10px 0 yellow;
                border-radius: 5px;
            }

            .bars li {
                display: table-cell;
                width: 100px;
                height: 300px;
                position: relative;
            }

            .bars span {
                width: 100%;
                position: absolute;
                bottom: -30px;
                text-align: center;
            }

            .bars .bar {
                display: block;
                background: #55EFC4;
                width: 70px;
                position: absolute;
                bottom: 0;
                margin-left: 25px;
                text-align: center;
                box-shadow: 0 0 10px 0 red;
                transition: 0.5s;
                transition-property: background, box-shadow;
            }

            .bars .bar:hover {
                background: aqua;
                box-shadow: 0 0 10px 0 black;
                cursor: pointer;
            }

            .bars .bar:before {
                color: white;
                content: attr(data-percentage) '%';
                position: relative;
                bottom: 20px;
            }
</style>

        <!-- Begin Page Content -->
<div class="container-fluid">

<!-- 
<h2 style="font-size:48px;"> <i style="color:#3060f0;">WELCOME TO</i>  <i style="color:yellow;">ASSEMBLIES OF</i> <i style="color:#3060f0;">GOD</i> | <i class="info"> <i style="color:yellow;">Holy Ghost</i> <i style="color:#3060f0;">Temple</i>  </i> </h2>

 -->











<section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="usersViewAllMembersPage.php">
                                            <?php
                                            $sql1 = "SELECT id from members ";
                                            $query1 = $dbh->prepare($sql1);
                                            $query1->execute();
                                            $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                            $totalstudents = $query1->rowCount();
                                            ?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents); ?></span>
                                            <span class="name">Registered Members </span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="#">
                                            <?php
                                            $sql = "SELECT id from  members where gender = 'Male' ";
                                            $query = $dbh->prepare($sql);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            $totalsubjects = $query->rowCount();
                                            ?>
                                            <span class="number counter"><?php echo htmlentities($totalsubjects); ?></span>
                                            <span class="name">Male Members</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="#">
                                            <?php

                                            $sql2 = "SELECT id from  members where gender = 'Female' ";
                                            $query2 = $dbh->prepare($sql2);
                                            $query2->execute();
                                            $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
                                            $totalclasses = $query2->rowCount();
                                            ?>
                                            <span class="number counter"><?php echo htmlentities($totalclasses); ?></span>
                                            <span class="name">Female Members</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="#">
                                            <?php
                                            $sql3 = "SELECT id from admin_login ";
                                            $query3 = $dbh->prepare($sql3);
                                            $query3->execute();
                                            $results3 = $query3->fetchAll(PDO::FETCH_OBJ);
                                            $totalclasses3 = $query3->rowCount();
                                            ?>

                                            <span class="number counter"><?php echo htmlentities($totalclasses3); ?></span>
                                            <span class="name">Total Admins</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->





                        <br><br><br>

                        <div class="row">


                            <div class="chart">

                                <br>
                                <ul class="numbers">
                                    <li><span>100%</span></li>
                                    <li><span>50%</span></li>
                                    <li><span>0%</span></li>

                                </ul>

                                <ul class="bars">
                                    <li>
                                        <div class="bar" data-percentage="<?php

                                                                            $connection = mysqli_connect("localhost", "root", "", "assemblies_of_God");
                                                                            $query = "SELECT id FROM members ORDER BY id";
                                                                            $query_run = mysqli_query($connection, $query);
                                                                            $row = mysqli_num_rows($query_run);

                                                                            echo '' . $row . '';
                                                                            ?>">
                                        </div><span><a href="usersViewAllMembersPage.php">All Members</a></span>
                                    </li>

                                    <li>
                                        <div class="bar" data-percentage="<?php


                                                                            $connection = mysqli_connect("localhost", "root", "", "assemblies_of_God");
                                                                            $query = "SELECT id FROM members where gender = 'Male' ORDER BY id ";
                                                                            $query_run = mysqli_query($connection, $query);
                                                                            $row = mysqli_num_rows($query_run);

                                                                            echo '' . $row . '';
                                                                            ?>">
                                        </div><span><a href="#">Male</a></span>
                                    </li>

                                    <li>
                                        <div class="bar" data-percentage="<?php

                                                                            $connection = mysqli_connect("localhost", "root", "", "assemblies_of_God");
                                                                            $query = "SELECT id FROM members where gender = 'Female'  ORDER BY id ";
                                                                            $query_run = mysqli_query($connection, $query);
                                                                            $row = mysqli_num_rows($query_run);

                                                                            echo '' . $row . '';
                                                                            ?>">
                                        </div><span><a href="#">Female</a></span>
                                    </li>








                                    <li>
                                        <div class="bar" data-percentage="<?php

                                                                            $connection = mysqli_connect("localhost", "root", "", "assemblies_of_God");
                                                                            $query = "SELECT id FROM admin_login ORDER BY id";
                                                                            $query_run = mysqli_query($connection, $query);
                                                                            $row = mysqli_num_rows($query_run);

                                                                            echo '' . $row . '';
                                                                            ?>">
                                        </div><span><a href="#">Admins</a></span>
                                    </li>

                                </ul>
                            </div>




  

</div>

    

<br><br><br><br>


    <!-- Chart Ends -->




        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/js/prism/prism.js"></script>
        <script src="js/js/waypoint/waypoints.min.js"></script>
        <script src="js/js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/js/amcharts/amcharts.js"></script>
        <script src="js/js/amcharts/serial.js"></script>
        <script src="js/js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/js/amcharts/themes/light.js"></script>
        <script src="js/js/toastr/toastr.min.js"></script>
        <script src="js/js/icheck/icheck.min.js"></script>




        <!-- ========== THEME JS ========== -->
        <script src="js/js/main.js"></script>
        <script src="js/js/production-chart.js"></script>
        <script src="js/js/traffic-chart.js"></script>
        <script src="js/js/task-list.js"></script>




        <!-- ========== COMMON JS FILES ========== -->
        <!-- <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script> -->
        <script src="js/js/pace/pace.min.js"></script>
        <script src="js/js/lobipanel/lobipanel.min.js"></script>
        <script src="js/js/iscroll/iscroll.js"></script>






        <script>
            $(function() {

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["success"]("Welcome to student Result Management System!");

            });
        </script>

        <script type="text/javascript">
            window.$crisp = [];
            window.CRISP_WEBSITE_ID = "f2335702-9774-4b1c-b0da-c92f58fbccc6";
            (function() {
                d = document;
                s = d.createElement("script");
                s.src = "https://client.crisp.chat/l.js";
                s.async = 1;
                d.getElementsByTagName("head")[0].appendChild(s);
            })();
        </script>





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
