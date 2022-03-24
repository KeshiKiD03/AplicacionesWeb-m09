<!--AARON ANDAL-->

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Activitat 02</title>
		<style type="text/css">
			*{ font-family:Calibri, 
                "Segoe UI", 
                "DejaVu Sans", 
                "Trebuchet MS", 
                Verdana, 
                sans-serif
            }
			.main{ margin:auto; 
                border:1px solid #3f7a82; 
                width:40%; 
                text-align:left; 
                padding:30px; 
                background:#1ab9cf
            }
			input[type=submit]{ background:#6ca16e; width:100%;
				padding:5px 15px; 
				background:#ccc; 
				cursor:pointer;
				font-size:16px;
			   
			}
		</style>
	</head>

<!-- 2. Dau digital: Escriviu un programa que cada vegada que s'executi 

mostri un valor entre 1 i 6, a l'atzar. 

AJUDA: Useu la funció "rand(1,6)".-->

	<body bgcolor="#000000">
		
		<div class="main">
		<h2>2 - Dau digital:</h2>		
		<br><br>

		<div style="border:1px solid #000000; text-transform:uppercase">  
		<h3 align="center">El resultat és: 
            <?php 
            
            echo rand(1 ,6);
            
            ?>
        </h3></div>
        <br>

<!--3. Dau digital gràfic: Escriviu un programa que cada vegada
 que s'executi mostri un dibuix amb una tirada de dau entre 1 i 6, a l'atzar.-->

    <h2>3 - Dau digital mode gràfic:</h2>		
	<br><br>

	<div style="border:1px solid #000000; text-transform:uppercase">  
		<h3 align="center">El resultat és: 
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

<!-- 4. Escriviu un programa que cada vegada que s'executi mostri 
un codi de color RGB triat a l'atzar. 
El codi de color pot tenir el format rgb(vermell, verd, blau), 
on vermell, verd i blau són nombres enters entre 0 i 255.
        -->

		<h2>4 - Color RGB:</h2>		
		<br><br>

		<div style="border:1px solid #000000; text-transform:uppercase;" >  
		    <h3 align="center">El resultat és: 
                <?php 
            
		    	$rgb= rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255);
			
		    	echo "rgb($rgb)";

                ?>
                <center><b style= "color: rgb(<?php echo $rgb?>)">Aquest és el color.</b></center>
            </h3>
        </div>
        <br>

<!-- 5. Escriviu un programa que cada vegada que 
s'executi mostri una salutació a una mida triada a l'atzar entre 200% i 800%. -->

        <h2>5 - Salut!:</h2>		
		<br><br>

		<div style="border:1px solid #000000; text-transform:uppercase;" >  
		<h3 align="center">El resultat de la salutació és: 
        <?php 
            
		$mida= rand(200, 800);
		echo $mida;

        ?>
        </h3>
		<center><p style="font-size: 
            <?php 
        
        echo $mida
            
            ?>%">Hola! buon giorno!</p></center>
        </div><br>


        <!-- 6. Escriviu un programa que cada vegada que s'executi 
mostri tres cartes entre 1 i 10, a l'atzar, i indiqui el valor més alt.-->
        <h2>6 - 3 cartes:</h2>		
		
        <br><br>

		<div style="border:1px solid #000000; text-transform:uppercase;" >  
		<h3 align="center">Les cartes són: 
            <?php 
            
		$carta1= rand(1, 10);
		$carta2= rand(1, 10);
		$carta3= rand(1, 10);

		echo $carta1 . ', ' . $carta2 . ', ' . $carta3;

            ?>
        </h3>
        <h3 align="center">La carta més gran és: <?php echo max($carta1, $carta2, $carta3) ?></h3>
        </div><br>

<!-- 7. Escriviu un programa que cada vegada que 
s'executi mostri una línia de longitud entre 10 i 1000 píxels, a l'atzar. -->
        
        <h2>7 - Línia:</h2>		
		<br><br>

		<div style="border:1px solid #000000; text-transform:uppercase;" >  
		<h3 align="center">Longitud: 
            <?php 

        $height= rand(10, 1000);

        echo $height;

            ?>
        </h3>
        <hr style="height:<?php echo $height; ?>px; width: 10px; border-width:0; color:yellow; background-color:orange">
        </div><br>


<!-- 8. Escriviu un programa que cada vegada que s'executi mostri la 
tirada de dos daus a l'atzar i digueu 
si ha sortit una parella de valors iguals o 
el més gran dels valors obtinguts. -->

        <h2>8 - Dos Daus:</h2>		
		<br><br>

		<div style="border:1px solid #000000; text-transform:uppercase;" >  
		<h3 align="center"> 
            <?php 
            
		$dau1= rand(1, 6);            
		$dau2= rand(1, 6);

        echo $dau1 . ', ' . $dau . "<br>";

		if ( $dau1 > $dau2 ) {
            echo 'El dau més gran és: ' . $dau1;
        }
        elseif ( $dau2 > $dau1 ) {
            echo 'El dau més gran és: ' . $dau2;
        }
        else {
            echo 'Els dos daus són iguales';
        }

            ?>
        </h3>
        </div><br>

<!-- 9. Escriviu un programa que cada vegada que s'executi mostri la tirada de dos jugadors que tiren un dau a l'atzar cadascun i digui qui ha guanyat.
En aquest joc, guanya el jugador que:
Ha obtingut una puntuació més alta que l'altre jugador
Si no guanya cap jugador, lògicament s'haurà produït un empat. -->
    
        <h2>9 - Quatre daus, 2 players:</h2>		
		<br><br>

		<div style="border:1px solid #000000; text-transform:uppercase;" >  
		<h3 align="center"> 
            <?php 
            
		$dau1= rand(1, 6);            
		$dau2= rand(1, 6);

                    
		$dau3= rand(1, 6);            
		$dau4= rand(1, 6);

        $player1= $dau1 + $dau2;
        $player2= $dau3 + $dau4;

        echo 'Player1: ' . $player1 . ', Player2: ' . $player2 . "<br>";

        if ( $player1 > $player2 ) {
            echo 'Guanya player1!!';
        }
        elseif ( $player2 > $player1 ){
            echo 'Guanya player2!!';
        }
        else {
            echo 'Empat!!';
        }

            ?>
        </h3>
        </div><br>

<!-- 10. Escriviu un programa que cada vegada que s'executi mostri 
la tirada d'entre 1 i 10 daus a l'atzar i digueu el total de punts obtinguts. -->

        <h2>10 - Deu Daus:</h2>		
		<br><br>

		<div style="border:1px solid #000000; text-transform:uppercase;" >  
		<h3 align="center"> 
            <?php 
        
        for ( $num = 1; $num <= 10; $num++ ) {
            $dau= rand(1,6);
            echo 'Dado ' . $num . ': ' . $dau . "</br>";
            $sum= $sum +$dau;
        }

            ?>
        </h3>
        <center><p>En total son: <?php echo $sum?></p></center>
        </div><br>
        
		<div align="center">
            <a href="Actividad02.php">Tornar</a>
        </div>
		</div>
	</body>
</html>
