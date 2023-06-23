/*
<?php 
// Store the file name into variable
$file = 'Newsletter/1.pdf';
$filename = 'Newsletter/1.pdf';
  
// Header content type
header('Content-type: application/pdf');
 // Response.ContentType = "application/pdf"
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);
?>
*/
<?php
// Disable caching
$file = 'Newsletter/1.pdf';
$filename = 'Newsletter/1.pdf';
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Set appropriate Content-Type header
header("Content-Type: application/pdf");

// Read the PDF file
$pdfContent = file_get_contents($filename);

// Output the PDF content
echo $pdfContent;

