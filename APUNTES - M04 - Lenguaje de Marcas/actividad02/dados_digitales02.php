<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dados digitales02</title>
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
            
            $num=rand(1, 6);

            if ( $num == 1 ) {
                $showimagen='dado1.png';
            }
            elseif ( $num == 2 ) {
                $showimagen='dado2.png';
            }
            elseif ( $num == 3 ) {
                $showimagen='dado3.png';
            }
            elseif ( $num == 4 ) {
                $showimagen='dado4.png';
            }
            elseif ( $num == 5 ) {
                $showimagen='dado5.png';
            }
            else {
                $showimagen='dado6.png';
            }

            echo $num;

            ?>
        </h3>
        <center><img src="<?php echo $showimagen?>"/></center>
        </div>
		<br> 
		<div align="center"><a href="dados_digitales02.php">Volver</a></div>
		</div>
	</body>
</html>
