<?php
$color = "#FFF";
$bg = "#7EA70E";
$size = "20px";

?>


<!DOCTYPE html>
<html>
	<head>
		<title>php Page One</title>
		<style>
			.colorclass a{
				color: <?php echo $color; ?>;
				font-size: <?php echo $size; ?>;
				text-decoration: none;
			}
		</style>
	</head>
	<body>
	<?php
		echo "php code here";
	?>
	<?php
		echo"</br>";
		echo"</br>";
		echo"</br>";
	?>

		<!--php variable here-->
		<h2><?php echo "php variable here"; ?></h2>
		<?php 
			$a = 5;
			$b = 6;
			$c = $a + $b;
			echo $a;
			echo "</br>";
			echo $b;
			echo "</br>";
			echo "Total = ".$c;
		?>
		<div class="colorclass" style="background-color:<?php echo $bg; ?>;">
			<a href=""><?php echo "style change in variable"; ?></a>
		</div>
		

	</body>
</html>