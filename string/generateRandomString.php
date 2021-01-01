<?php 
  
function RandomStringGenerator($n) 
{ 

    $generated_string = ""; 
    $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; 
      
    // Find the lenght of created string 
    $len = strlen($domain); 
      
    // Loop to create random string 
    for ($i = 0; $i < $n; $i++) 
    { 
        // Generate a random index to pick 
        // characters 
        $index = rand(0, $len - 1); 
          
        // Concatenating the character  
        // in resultant string 
        $generated_string = $generated_string . $domain[$index]; 
    } 
      
    // Return the random generated string 
    return $generated_string; 
} 
  
// Driver code to test above function 
$n = 5; 
echo "Random String of length " . $n 
   . " = " . RandomStringGenerator($n); 
?>
