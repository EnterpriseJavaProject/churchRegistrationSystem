<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <title>Assemblies of God Ghana | Holy Ghost Temple (Healing House Bolgatanga)</title>
    </head>
    <body onLoad="goforit()">



    <style>
table{
  width:100%;
  table-layout: fixed;
  border-collapse: collapse;
}

th{
  /* padding: 20px 15px; */
  font-weight: 500;
  font-size: 14px;
  color: black;
  text-transform: uppercase;
}
td {
  border: 2px solid #726E6D;
  padding: 15px;
  color:black;
  text-align:center;
}


</style>



        <div class="main-wrapper">
            <div class="content-wrapper">
                <div class="content-container">

         
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-12">
                                    

                                <center>   <img src="images/Assemblies_Of_God_Logo.jpg" alt="" width="350" height="150"> </center>
                               <!--   <h2 class="title" align="center">Result Management System</h2>  -->

                                </div>
                            </div>
                            <!-- /.row -->
                          
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

  

                        <section class="section" id="exampl">
                            <div class="container-fluid">

                                <div class="row">
                              
                             
                                <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5 align="center"> ASSEMBLIES OF GOD, GHANA| HOLY GHOST TEMPLE(Healing House Bolgatanga)
<br>
MEMBER PERSONAL INFORMATION
<br>
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
                                                
                                                    </h5>

                                                    <hr />

                            <br>
<?php




$username=$_POST['username'];
$membershipNo=$_POST['membershipNo'];
$_SESSION['username']=$username;
$_SESSION['membershipNo']=$membershipNo;



$qery = "SELECT   members.membershipNo, members.username,members.phone, members.marital_status, members.dob, members.images,  members.gender, members.home_town, members.region, members.country, members.occupation, members.place_of_work, members.residence,members.department,members.tithe,members.year_baptised from members  where members.username=:username and members.membershipNo=:membershipNo ";
$stmt = $dbh->prepare($qery);
$stmt->bindParam(':username',$username,PDO::PARAM_STR);
$stmt->bindParam(':membershipNo',$membershipNo,PDO::PARAM_STR);
$stmt->execute();
$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($stmt->rowCount() > 0)
{
foreach($resultss as $row)
{   ?>


<table cellpadding="0" cellspacing="0" border="0"> 


    <!-- <thead>
        <th style="">  
        
        <?php echo '<img style="margin-left:80px; text-align: center;" src="Members_Images/'.($row->images).'" width="170px;" height="170px;" alt="Image">'?>

        
        <p></p>
        </th>
    </thead> -->

  <thead>
        <tr style="text-align: center">
             <th style="text-align: center"><p><b>Membership No:</b> <?php echo htmlentities($row->membershipNo);?> </th>
            <th style="text-align: center"><p><b>Full Name :</b> <?php echo htmlentities($row->username);?></th>
            <th style="text-align: center"> <p><b>Contact :</b> <?php echo htmlentities($row->phone);?></th> 
   
        </tr>
    </thead>


    <thead>
        <tr style="text-align: center">
        <th style="text-align: center"><p><b>Department :</b> <?php echo htmlentities($row->department);?></th> 
        <th style="text-align: center"><p><b>Occupation:</b> <?php echo htmlentities($row->occupation);?></th>
        <th style="text-align: center"><p><b>Place of work:</b> <?php echo htmlentities($row->place_of_work);?></th>


        </tr>
    </thead>


    <thead>
        <tr style="text-align: center">
        <th style="text-align: center"><p><b>Residence :</b> <?php echo htmlentities($row->residence);?></th> 
        <th style="text-align: center"><p><b>Marital Status:</b> <?php echo htmlentities($row->marital_status);?></th>
        <th style="text-align: center"><p><b>Date of Birth:</b> <?php echo htmlentities($row->dob);?></th>

        </tr>
    </thead>



    <thead>
        <tr style="text-align: center">
        <th style="text-align: center"><p><b>Gender:</b> <?php echo htmlentities($row->gender);?> </th>
            <th style="text-align: center"><p><b>Year Baptised:</b> <?php echo htmlentities($row->year_baptised);?> </th>
            <th style="text-align: center"><p><b>Home Town:</b> <?php echo htmlentities($row->home_town);?> </th>  
        </tr>
    </thead>


    <thead>
        <tr style="text-align: center">
        <th style="text-align: center"><p><b>Region:</b> <?php echo htmlentities($row->region);?> </th>
        <th style="text-align: center"><p><b>Country:</b> <?php echo htmlentities($row->country);?> </th>
            <th style="text-align: center"><p><b>Tithe Paid Year To Date:</b> GHC <?php echo htmlentities($row->tithe);?> </th>  
        </tr>
    </thead>



</table>

<?php }

    ?>

    
                                            </div>
                                            <div class="panel-body p-20">






                                      </div>



 <?php 
 }
 
 else
 {?>

 
<?php
header('Location: errorMembersPage.php');
 }
?>











                
 <!-- } 
 
 else
 {

header('Location: errorMembersPage.php');  

} -->


                                      



<center><div aria-hidden="true" style="cursor:pointer; font-size: 16pzx;text-align: center;color:blue;font-weight:bolder;text-transform: uppercase;" titlt="print screen" alt="print screen" onclick="window.print();" >Download</div></center>




<!-- <center><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" titlt="print screen" alt="print screen" onclick="window.print();" ></i></center> -->



 <!-- Page Heading -->
 <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <i style="position: absolute; bottom:5%;">
            
            <img src="images/sign.jpeg" width="150" height="50"> <br/>

            <span style="font-size: 16px; text-align: left;">Academic Secretary</span>
            
            </i>

            
            <i style="position: absolute; bottom:5%; right: 4%;">
           		<span style="font-size: 16px; float: right;">
           		
       			<img src="images/sign.jpeg" width="150" height="50"> <br/>

         
       			Director of Studies
       			
       			</span>
            </i>

    		
          </div> -->

 
   









                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

         <a href="members_login.php"> <img src="images/back.png" alt="" width="16px" height="16px">  </a>
                                                             
                          

                                </div>
                                <!-- /.row -->
  
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                  
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

          <!-- ========== COMMON JS FILES ========== -->
          <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {

            });


            function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>




   <!-- SWEET ALERT -->


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




<?php
include('includes/scripts.php');
?>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>

