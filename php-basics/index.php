<?php
$a = 20;
$b= 30;

#Swaping variable values withoout using a third/temporary variable

$a = $a+$b;
$b= $a-$b;
$a= $a-$b;

echo "The swapped value of variable a is ".$a. "<br/>";
echo "The swapped value of variavle b is ".$b;

?>
