<!DOCTYPE html>
<html>
	<head>
		<title>Oparetor</title>
		
	</head>
	<body>
		
		<?php echo "oparetor"; ?>
		
		<?php
		$breack = "</br>";
			$x = 12;
			$y = 2;
			
			echo $breack, $x+$y, $breack;
			echo $x-$y, $breack;
			echo $x*$y, $breack;
			echo $x/$y, $breack;
			echo $x%$y, $breack;
			$a = 10;
			$b = 10;
			var_dump($a != $b);
			echo $breack;
			$c = 100;
			$d = 200;
			var_dump($a >= $c);
			echo $breack;
/*increment*/		echo (++$c);       	echo $breack;
					echo ($c++);       	echo $breack;
					echo ($c);		   	echo $breack;
/*discriment*/		echo (--$d);		echo $breack;
					echo ($a--);		echo $breack;
					echo (++$a);		echo $breack;
/*logical*/	$p = 50;
			$v = 60;
			if($p == 50 and $v == 60){
				echo "true";
			}else{
				echo "false";
			};
			echo $breack;
			if($p == 70 && $v == 60){
				echo "true";
			}else{
				echo "false";
			};
			
			echo $breack;
/*or oparetor <anyone true>*/
			if($p == 50 or $v == 60){
				echo "true";
			}else{
				echo "false";
			};
			echo $breack;
			if($p == 70 || $v == 80){
				echo "true";
			}else{
				echo "false";
			};
			echo $breack;
/*xor oparetor <only one true>*/	
			if($p == 50 xor $v == 10){
				echo "true";
			}else{
				echo "false";
			};
			echo $breack;
			if($p == 50 xor $v == 60){
				echo "true";
			}else{
				echo "false";
			};
			echo $breack;
/*string oparator*/
/**concatanet Oparetor*/
			$stringone = "I love";
			$stringtwo = "Bangladesh";
			$addtwostring = $stringone . $stringtwo ;
			echo $addtwostring;
			echo $breack;
/**concatanet assinment Oparetor*/
			$stringone .= $stringtwo;
			echo $stringone;
			echo $breack;			

		?>
		<?php
/*array oparetor*/
	$arrayone = array(
		"a" => "akash",
		"b" => "rajen"	
	);	
	$arraytwo = array(
		"c" => "nur",
		"d" => "muhid"	
	);
	$addarray = $arrayone + $arraytwo;
	var_dump($arrayone+$arraytwo);
	echo $breack;
	var_dump($addarray);

		?>
	</body>
</html>