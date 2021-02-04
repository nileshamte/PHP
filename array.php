<!DOCTYPE html>
<html>
<body>

<?php

function arrayOpertion(){
$arr = array(1, 2, 3, 4,5,6,7,8);
$updatedArray = array();
foreach ($arr as $value) {
	
    if($value==7)
	$value=$value;
	else
    $value = $value * 2;
    $updatedArray[]= $value;
    
}
return $updatedArray;
//print_r(array_values($updatedArray));
}print_r(array_values(arrayOpertion()));

?>
</body>
</html>
