<?php 
require('./pdf/textbox.php');
include("data.php");

$result=mysqli_query($conn,"Select * from user ORDER BY id DESC");

$info=mysqli_fetch_assoc($result);

$type=$info['typeofhouse'];

$bname=$info['bank'];

$result1=mysqli_query($conn,"Select hinfo,coat from houses where hname='$type'");

$details=mysqli_fetch_assoc($result1);

$result2=mysqli_query($conn,"Select interest from banks where bname='$bname'");

$bank=mysqli_fetch_assoc($result2);

$pdf=new PDF_TextBox();
$pdf->AddPage();
$pdf->SetFont("Arial","B",40);
$pdf->Image('./images/logo.png',20,10,30);
$pdf->Cell(0,20,"  Real Estate World",0,1,'C');
$pdf->SetFont("Arial","",20);
$pdf->Cell(0,10,"          Place where you get your dream house.",0,1,'C');
$pdf->Line(9,40,200,40);
$pdf->Line(9,9,9,288);
$pdf->Line(9,9,200,9);
$pdf->Line(200,9,200,288);
$pdf->Line(9,288,200,288);
$pdf->Ln();
$pdf->SetFont("Arial","B",15);
$pdf->Cell(25,10,"     Name: ",0,0);
$pdf->SetFont("Arial","",15);
$pdf->Cell(25,10,"{$info['name']} ",0,1);
$pdf->SetFont("Arial","B",15);
$pdf->Cell(30,10,"     Address: ",0,0);
$pdf->SetFont("Arial","",15);
$pdf->Cell(55,10," {$info['address']} ",0,1);
$pdf->SetLeftMargin(40);
$pdf->SetFont("Arial","",15);
$pdf->Cell(55,10," {$info['city']}, ",0,1);
$pdf->Cell(55,10," {$info['state']},{$info['postal']}, ",0,1);
$pdf->SetLeftMargin(10);
$pdf->Cell(55,10," {$info['country']}. ",0,1);
$pdf->SetLeftMargin(10);
$pdf->SetFont("Arial","B",15);
$pdf->Cell(27,10,"     Moblie: ",0,0);
$pdf->SetFont("Arial","",15);
$pdf->Cell(55,10," {$info['phone']} ",0,1);
$pdf->SetFont("Arial","B",15);
$pdf->Cell(25,10,"     Email: ",0,0);
$pdf->SetFont("Arial","",15);
$pdf->Cell(55,10," {$info['email']} ",0,1);
$pdf->SetFont("Arial","B",15);
$pdf->Cell(45,10,"     Type of House: ",0,0);
$pdf->SetFont("Arial","",15);
$pdf->Cell(55,10," {$info['typeofhouse']} ",0,1);


$pdf->SetFont("Arial","B",15);
$pdf->Cell(31,10,"     Payment: ",0,0);
$pdf->SetFont("Arial","",15);
$pdf->Cell(55,10," {$info['payment']} ",0,1);
$pdf->SetFont("Arial","B",15);
$pdf->Cell(22,10,"     Cost: ",0,0);
$pdf->SetFont("Arial","",15);
$pdf->Cell(55,10,"Rs. {$details['coat']} ",0,1);
if($info['payment']=="Installment")
{
	$pdf->SetFont("Arial","B",15);
$pdf->Cell(23,10,"     Bank: ",0,0);
$pdf->SetFont("Arial","",15);
$pdf->Cell(55,10," {$info['bank']} ",0,1);

$pdf->SetFont("Arial","B",15);
$pdf->Cell(28,10,"     Interest: ",0,0);
$pdf->SetFont("Arial","",15);
$pdf->Cell(55,10," {$bank['interest']}% ",0,1);
}
$pdf->SetFont("Arial","B",15);
$pdf->Cell(26,10,"     Details: ",0,0);
$pdf->SetFont("Arial","",15);
if($info['payment']== "Installment")
	$pdf->SetXY(40,173);
else
	$pdf->SetXY(40,153);
$pdf->drawTextBox($details['hinfo'],150,80,'L','T','false');

$pdf->Output();
?>