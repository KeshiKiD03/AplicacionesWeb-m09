<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Factorial de un número</title>
		<style type="text/css">
			*{ font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif}
			.main{ margin:auto; border:1px solid #7C7A7A; width:40%; text-align:left; padding:30px; background:#85c587}
			input[type=submit]{ background:#6ca16e; width:100%;
				padding:5px 15px; 
				background:#ccc; 
				cursor:pointer;
				font-size:16px;
			   
			}
		</style>
	</head>

	<body bgcolor="#bed7c0">
		
		<div class="main">
		<h1>El Factorial del número es:</h1>
		<br>

		<?php

		$num1= $_POST["num1"];

		echo 'El factorial del numero: '.$num1;
		 
		function obtener_factorial($mi_fatorial)
		{
		   if($mi_fatorial==1)
			  return 1;
		   else
			  return $mi_fatorial * obtener_factorial($mi_fatorial-1);
		}
		 
		?>
		
		<br><br>
		<div style="border:1px solid #000000; text-transform:uppercase">  
		<h3 align="center">El resultado es: <?php echo obtener_factorial($num1);?></h3></div>
		<br> 
		<div align="center"><a href="index_factorial.html">Volver </a></div>
		</div>
	</body>
</html>

