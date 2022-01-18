<?php 
session_start();
include('FPDF/fpdf.php');



$connection = mysqli_connect("localhost","root","","assemblies_of_God");
$query = "SELECT * FROM members GROUP by username ORDER by username;";
$query_run = mysqli_query($connection, $query);


class PDF extends FPDF{
    function Header(){
        $this->SetFont('arial', 'B', '15');
        $this->Image('images/Assemblies_Of_God_Logo.jpg', 130, 0, 50, 50);
        $this->cell(100,10,'ASSEMBLIES OF GOD GHANA  |  HOLY GHOST TEMPLE (Healing House Bolgatanga) ALL MEMBERS REPORT',0,1);
    }
}



if (isset($_POST['btn_pdf']))
 {
     


     $pdf = new PDF('p', 'mm', 'a3');
     $pdf->SetTopMargin('50');
     $pdf->SetFont('arial', 'b', '12');
     $pdf->AddPage();
    //  $pdf->cell('10', '10', 'S/N', '1', '0', 'C');
     $pdf->cell('50', '10', 'NAMES', '1', '0', 'C');
     $pdf->cell('23', '10', 'CONTACT', '1', '0', 'C');
    //  $pdf->cell('20', '10', 'GENDER', '1', '0', 'C');
     $pdf->cell('34', '10', 'RESIDENCE', '1', '0', 'C');
     $pdf->cell('32', '10', 'DEPARTMENT', '1', '0', 'C');
     $pdf->cell('35', '10', 'OCCUPATION', '1', '0', 'C');
     $pdf->cell('55', '10', 'WORK PLACE', '1', '0', 'C');
     $pdf->cell('33', '10', 'HOME TOWN', '1', '0', 'C');
     $pdf->cell('24', '10', 'REGION', '1', '1', 'C');



    $pdf->SetFont('arial', '', '10');

    while ($row = mysqli_fetch_assoc($query_run)) 
    {
        // $pdf->cell('10', '10', $row['id'], '1', '0', 'C');
        $pdf->cell('50', '10', $row['username'], '1', '0', 'C');
        $pdf->cell('23', '10', $row['phone'], '1', '0', 'C');
        // $pdf->cell('20', '10', $row['gender'], '1', '0', 'C');
        $pdf->cell('34', '10', $row['residence'], '1', '0', 'C');
        $pdf->cell('32', '10', $row['department'], '1', '0', 'C');
        $pdf->cell('35', '10', $row['occupation'], '1', '0', 'C');
        $pdf->cell('55', '10', $row['place_of_work'], '1', '0', 'C');
        $pdf->cell('33', '10', $row['home_town'], '1', '0', 'C');
        $pdf->cell('24', '10', $row['region'], '1', '1', 'C');
    }



     $pdf->Output();

 }








?>










