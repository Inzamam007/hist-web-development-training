<?php

   	$num = 50;
	$sum = 0;
	
	for($a =1; $a<=$num; $a++){

		$sum += $a;

	if($a<$num){

		echo $a ." + ";
}

	else if($a==$num){

		echo $a . " = ";
	
}
		
}

		echo $sum;
	


?>
