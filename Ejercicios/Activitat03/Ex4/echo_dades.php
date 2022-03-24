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
            <h2 style="text-align: right;">Dades personals (Resultat)</h2>
            
            <p>Usuari: <?php echo $_POST["usuario"];?></p>

            <center>
                <?php
                
                if ( $_POST["menuSexe"] == 'void' )
                    echo '<b style=" color: red">No s ha introduit cap genere de sexe.</b>';
                else
                    echo '<p>Su genere és <b>' . $_POST["menuSexe"] .'</b><p>';
                
                ?>
            </center>

            <center>
                <?php
                
                if ( $_POST["menuAficions"] == 'void' )
                    echo '<b style=" color: red">No ha introducido ninguna afición.</b>';
                else
                    echo '<p>La seva afició és <b>' . $_POST["menuAficiones"] .'</b><p>';
                
                ?>
            </center>

            <div align="left"><a href="solicita_dades.html">Tornar al formulari</a></div>
        </div>
	</body>
</html>