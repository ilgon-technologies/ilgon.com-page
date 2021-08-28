<?php 
  
// Store the file name into variable 
$file = 'ilgon_privacy_policy_web.pdf'; 
$filename = 'ilgon_privacy_policy.pdf';

// Header content type 
header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="' . $filename . '"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 

// Read the file 
@readfile($file); 
  
?> 