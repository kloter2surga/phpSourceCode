
<?php 
$date = DateTime::createFromFormat('D-M-Y', 'monday-Feb-2020'); 
 
echo $date->format('Y-m-d'); 
?> 
