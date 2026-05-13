<?php

//Values for two numbers
$num1 = 15;
$num2 = 10;

$operator = "-";

//Checking Conditions for operator
if($operator == "+"){
	echo "The Addition of " . $num1 . " and " . $num2 . " is " . $num1+$num2;
}

else if($operator == "-"){
	echo "The Subtraction  of " . $num1 . " and " . $num2 . " is " . $num1-$num2;
}

else if($operator == "*"){
	echo "The Multiplication of " . $num1 . " and " . $num2 . " is " . $num1*$num2;
}

else if($operator == "/"){
	echo "The Division of " . $num1 . " and " . $num2 . " is " . $num1/$num2;
}

else {
	echo "Please select a correct operation ";
}




?>
