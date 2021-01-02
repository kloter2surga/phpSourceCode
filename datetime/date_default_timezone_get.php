<?php 
  
// Set the default timezone 
date_default_timezone_set('Asia/aceh'); 
  
// Create timezone object 
$timezone_object = date_default_timezone_get(); 
  
// If timzone object is true  
if ($timezone_object) { 
    echo 'date_default_timezone_set: ' . date_default_timezone_get(); 
} 
?> 
