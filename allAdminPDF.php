<?php 
session_start();
include('FPDF/fpdf.php');



$connection = mysqli_connect("localhost","root","","assemblies_of_God");
$query = "SELECT * FROM admin_login";
$query_run = mysqli_query($connection, $query);




class PDF extends FPDF{
    function Header(){
        $this->SetFont('arial', 'B', '15');
        $this->Image('images/Assemblies_Of_God_Logo.jpg', 90, 0, 40, 40);
        $this->cell(100,10,'ASSEMBLIES OF GOD | HOLY GHOST TEMPLE ADMINS REPORT (BOLGA)',0,1);
    }
}



if (isset($_POST['btn_pdf']))
 {
     


     $pdf = new PDF('p', 'mm', 'a4');
     $pdf->SetTopMargin('38');
     $pdf->SetFont('arial', 'b', '12');
     $pdf->AddPage();
     $pdf->cell('10', '10', 'S/N', '1', '0', 'C');
     $pdf->cell('40', '10', 'NAMES', '1', '0', 'C');
     $pdf->cell('30', '10', 'CONTACT', '1', '0', 'C');
     $pdf->cell('52', '10', 'EMAIL', '1', '0', 'C');
     $pdf->cell('34', '10', 'DEPARTMENT', '1', '0', 'C');
     $pdf->cell('30', '10', 'USERTYPE', '1', '1', 'C');
   



    $pdf->SetFont('arial', '', '10');

    while ($row = mysqli_fetch_assoc($query_run)) 
    {
        $pdf->cell('10', '10', $row['id'], '1', '0', 'C');
        $pdf->cell('40', '10', $row['username'], '1', '0', 'C');
        $pdf->cell('30', '10', $row['phone'], '1', '0', 'C');
        $pdf->cell('52', '10', $row['email'], '1', '0', 'C');
        $pdf->cell('34', '10', $row['department'], '1', '0', 'C');
        $pdf->cell('30', '10', $row['usertype'], '1', '1', 'C');
    
    }



     $pdf->Output();

 }








?>










