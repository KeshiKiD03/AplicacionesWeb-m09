<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Activitad 03: Exercici 04</title>
		<style type="text/css">
			*{ font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif}
			.main{ margin:auto; border:1px solid #7C7A7A; width:40%; text-align:left; padding:30px; background:#85c587}
		</style>
	</head>
	<body bgcolor="#bed7c0">
        	
        <div class="main">
            <h2 style="text-align: center;">Dades personals + Changing Colors</h2>
            <center>
                <p>Usuari: <?php echo $_POST["usuario"];?></p>

            </center>
            <center>
                <?php
                
                if ( $_POST["menuSexe"] == 'void' )
                    echo '<b style=" color: red">No s ha introduit cap genere de sexe.</b>';
                else
                    echo '<p>El seu gènere <b>' . $_POST["menuSexe"] .'</b><p>';
                
                ?>
            </center>

            <center>
                <?php
                
                if ( $_POST["menuColores"] == 'void' )
                    echo '<b style=" color: red">No ha seleccionado ningún color.</b>';
                else
                    echo '<p>El seu color escollit per canviar es <b>' . $_POST["menuColores"] .'</b><p>';
                
                ?>

                <div style="border:1px solid #000000; text-transform:uppercase;" >  
		        <h3 align="center">El resultat és: 
                    <?php 
            
		    	    $rgb= rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255);
			
		    	    echo "rgb($rgb)";

                    ?>
                    <center><b style= "color: rgb(<?php echo $rgb?>)">Aquest és el color.</b></center>
                </h3>
        </div>    
            </center>

            <center>
                <?php
                
                if ( $_POST["menuFont"] == 'void' )
                    echo '<b style=" color: red">No ha seleccionado ninguna fuente.</b>';
                else
                    echo '<p>La seva font escollit per canviar es <b>' . $_POST["menuFont"] .'</b><p>';
                
                ?>
            </center>

            <div align="left"><a href="Actividad01.php">Volver al formulario</a></div>
        </div>
	</body>
</html>