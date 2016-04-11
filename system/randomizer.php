<?php

	$a = array();
	for($i = 0; $i<12; $i++){
		array_push($a, $i);
	}

	$amount = 100;

	echo '$randomizer = array(';

	for($i=0; $i<$amount; $i++){
		shuffle($a);
		echo 'array(';
		$first = true;
		foreach ($a as $n) {
			if(!$first){
				echo ',';
			}
			echo $n;
			$first = false;
		}

		echo ')';
		if($i<($amount-1)){
			echo ',';
		}
		
	}	

	echo ');';

?>