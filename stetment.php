<?php
	/*if stetment*/
	$breack = "</br>";
	
	$value = 5;
	if($value = 5){
		echo "this is true";
	};
	echo $breack ;
	
	if($value != 5){
		echo "this is true";
	}else{
		echo "this is wrong";
	};
	echo $breack ;
	
	if($value > 15){
		echo "this is right";
	}elseif($value > 10){
		echo "this is right";
	}elseif($value > 8){
		echo "this is right"; 
	}else{
		echo "this is wrong";
	}
	echo $breack ;

	
?>