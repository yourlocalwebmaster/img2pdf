<?php require_once('vendor/autoload.php');?>
<?php
if(isset($_FILES['image_file'])){
   move_uploaded_file($_FILES['image_file']['tmp_name'], 'images/'.$_FILES['image_file']['name']);
   $image =  'images/'.$_FILES['image_file']['name'];

}
$html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><title>img2pdf - Grant</title>    '.$_POST['css'].'</head><body>    <img src="'.$image.'" /></body></html>';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();