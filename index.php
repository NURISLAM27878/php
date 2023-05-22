<?php
$color = "#FFF";
$bg = "#7EA70E";
$size = "20px";
$breack = "</br>";
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
		<section>
			<?php
				echo "php code here";
			?>
			<?php
				echo"$breack", "$breack", "$breack";
			?>

		</section>
		<hr/>
		<!-- php variable here -->
		<section>
			<h2><?php echo "php variable here"; ?></h2>
			<?php 
				$a = 5;
				$b = 6;
				$c = $a + $b;
				echo $a;
				echo "$breack";
				echo $b;
				echo "$breack";
				echo "Total = ".$c;
			?>
			<div class="colorclass" style="background-color:<?php echo $bg; ?>;">
				<a href=""><?php echo "style change in variable"; ?></a>
			</div>
		</section>
		<hr/>
		
		<!-- php echo and print --> 
		<section>
			<?php 
				echo "first paramiter ", "secend peramiter", "$breack";  //echo bring multiple peramiter and echo faster then print
				print "one peramiter"; //print bring only one peramiter
				
				echo "$breack";
				
				//print can return a value 
				$a = "Anoar";
				var_dump($a);
				
				echo "$breack", "$breack";
				
				$b = print("Deloar");
				var_dump($b);
				
				echo "$breack", "$breack", "$breack";
			?>
		</section>
		<hr/>
		<section>
			<h4>Data type</h4>
			1.String			
			2.Integer			
			3.Float				
			4.Boolean			
			5.Array				
			6.object			
			7.Null				
			8.Resource <!-- but resouce is'nt data type, Resource is a data source -->
			<hr/>
			</br>
			<?php
				$adata = "text here";
				$bdata = 25;
				$cdata = 5.23;
				$ddata = true;
				$edata = Array("Akash", "Rajen", "Simul", "Iqbal", "Nur");
				$nulldata = null;
				
				var_dump($adata);
				echo "$breack";
				
				var_dump($bdata);
				echo "$breack";
				
				var_dump($cdata);
				echo "$breack";
				
				var_dump($ddata);   //Boolean data type return true false value
				echo "$breack";
					
				var_dump($edata);	// multiple data incude in a array
				echo "$breack";
			?>
			<h4>object</h4>
			<?php
				
				class rajen{
					function pen(){
						return "metador pen";
					}
					function bag(){
						echo $this->pen();
					}
				}
				
				$bagopen = new rajen();        //create a boject = before add new
				$bagopen->bag();
				
				echo "$breack";
				var_dump($nulldata);
				echo "$breack";
				
			?>
			<h4>lenth</h4>
			<!-- lenth -->
			<?php
				$len = "count lenth";
				echo str_replace("lenth", "string", $len );
			?>
			<h4>constants</h4>
			
			<?php
				define("GREETING","Hello you! How are you today?");
				echo constant("GREETING");
				define("VALUNAME","DEFINE VALUE");
				echo constant("VALUNAME");
		?>
			
			
			
			
			
		</section>
		

	</body>
</html>