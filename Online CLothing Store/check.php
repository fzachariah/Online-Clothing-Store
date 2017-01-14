<?php include "DB_Connection.php";?>
<?php
$itemId = $_GET['hello'];
//$itemId=1;
require('fpdf.php');
global $connection;
 $current_date = date("Y-m-d H:i:s");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Reciept of Charitable Donation');
$pdf->Ln();
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,11,'The clothing closet for Phi Beta Lambda acknowledges and expresses appreciation for the following');
$pdf->Ln();
$pdf->Cell(40,11,'contribution and expresses appreciation for the following contribution');
$pdf->Ln();
$query = "SELECT * FROM ITEM where ITEM_ID = '$itemId'";
$result = mysqli_query($connection, $query);
if ($result->num_rows > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            $description = $row['DESCRIPTION'];
            $value = $row['VALUE'];
            $pdf->Ln();
            $pdf->Cell(40,12,'Donnation of Item:'.$description); 
            $pdf->Ln();
            $pdf->Cell(40,12,'Valued At '.$value);
        }
}
/*$pdf->Cell(40,12,'Donnation of clothing');
$pdf->Ln();*/

$pdf->Ln();
session_start();
$id=$_SESSION["person_id"];


$query = "SELECT * FROM person where PERSON_ID='$id'";
$result = mysqli_query($connection, $query);
if ($result->num_rows > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            $username = $row['NAME'];
            $pdf->Cell(40,12,'Donnation recieved from '.$username);
        }
}




$pdf->Ln();
$pdf->Cell(40,12,'Catawba college is a recognized non- profit organization');
$pdf->Ln();
$pdf->Cell(40,12,'Donation recieved by Catawba college');
$pdf->Ln();
$pdf->Cell(40,12,'Date: '.$current_date);
$pdf->Output();
?>