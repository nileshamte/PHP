<?php

function arrayOpertion()
{
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8);
    $updatedArray = array();
    foreach ($arr as $value) {

        if ($value == 7)
            $value = $value;
        else
            $value = $value * 2;
        $updatedArray[] = $value;
    }
    return $updatedArray;
    //print_r(array_values($updatedArray));
}
print_r(array_values(arrayOpertion()));

?>
<!-- Given a following array
a = [1, 2, 3, 4, 5, 6, 7, 8]
write a function which returns a new array having each value muliplied by 2 except 7. output:

[2, 4, 6, 8, 10, 12, 7, 16]
Advanced: Try to pass block to function as a argument which will handle the multiplication

 -->