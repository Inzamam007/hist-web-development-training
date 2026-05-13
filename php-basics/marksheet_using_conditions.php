<?php

	$english = 75;
	$sindhi  = 90;
	$urdu    = 86;
	$maths   = 35;
	$chemistry = 70;

	$total_marks = 500;
	$obt_marks = $english + $sindhi + $urdu + $maths + $chemistry;

	echo "Your obtained marks are " . $obt_marks . " out of " . $total_marks . "<br/>";

	$percent = ($obt_marks*100)/$total_marks;
		echo "Your percentage is " . $percent. "<br/>";

	if ($english <40 || $sindhi <40 || $urdu <40 || $maths < 40 || $chemistry <40){

			$grade ="fail";
	        echo "Your are " . $grade;
	}

	else {

		if($percent >=90 AND $percent <=100){
			
			$grade = "A+";
			echo "Your grade is " . $grade;
	}

	else if ($percent >=85 AND $percent <90){

			$grade = "A";
			echo "Your grade is " . $grade;
	}

	else if ($percent >=75 AND $percent <85){

			$grade = "B+";
			echo "Your grade is " . $grade;
	}

	else if ($percent >=65 AND $percent <75){

			$grade = "B";
			echo "Your grade is " . $grade;
	}

	else if ($percent >=40 AND $percent <65){

			$grade = "C";
			echo "Your grade is " . $grade;
	}

	else if ($percent <40 and $percent >=0){

			$grade = "fail";
			echo "You are " . $grade;
	}

	else {

			echo "Please check if your percentage is between 1-100";
	}


	}


?>
