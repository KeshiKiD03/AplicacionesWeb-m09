<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dados digitales01</title>
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
		<h1>Numero Aleatorio:</h1>		
		<br><br>

		<div style="border:1px solid #000000; text-transform:uppercase">  
		<h3 align="center">El resultado es: 
            <?php 
            
            echo rand(1 ,6);
            
            ?>
        </h3></div>
		<br> 
		<div align="center"><a href="dados_digitales01.php">Volver</a></div>
		</div>
	</body>
</html>
