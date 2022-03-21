<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Saludo al azar</title>
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
		<h1>Saludo:</h1>		
		<br><br>

		<div style="border:1px solid #000000; text-transform:uppercase;" >  
		<h3 align="center">El resultado es: 
            <?php 
            
		$mida= rand(200, 800);
		echo $mida;

            ?>
        </h3>
		<center><p style="font-size: <?php echo $mida?>%">Hola, buenos dias!</p></center>
        </div>

		<br> 
		<div align="center"><a href="saludo_azar.php">Volver</a></div>
		</div>
	</body>
</html>
