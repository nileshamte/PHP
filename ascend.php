<!DOCTYPE html> 
<html> 
<body> 
  
<?php 
$numbers = array( 456, 12,19, 7,100); 
sort($numbers); 
  
$arrlength = count($numbers); 
for($x = 0; $x < $arrlength; $x++) { 
    echo $numbers[$x]; 
    echo "<br>"; 
} 
?> 
  
</body> 
</html>