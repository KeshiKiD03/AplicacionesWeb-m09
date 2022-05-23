<!--AARON ANDAL - Examen Part1 -->

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

<!--    1. Escriba un programa que cada vez que se ejecute 
    muestre un emoticono elegido al azar entre los caracteres Unicode 128512 y 128586.
    (1 punt)

AJUDA: Useu la funció "rand(1,6)".-->


	<body bgcolor="#000000">
		
		<div class="main">
		    <h2>1 - Emoji al atzar:</h2>		
		    <br>
            <br>

		    <div style="border:1px solid #000000">  
		        <h3 align="center">El resultat de l'emoji en caracter Unicode es: 
                <?php 
            
                echo rand(128512 ,128586);
            
                ?>
                </h3>
            </div>
            <br>

            
<!--2. Escriba un programa que cada vez que se ejecute muestre 
la tirada de dos jugadores que 
tiran cada uno tres dados al azar y diga quién ha ganado. (2 punts)

En este juego, gana el jugador que:

    ha obtenido un trío de dados iguales de mayor valor, si los dos han obtenido tríos distintos

    ha obtenido un trío de dados iguales, si el otro jugador no ha obtenido trío

    ha obtenido una pareja de dados iguales de mayor valor, si los dos han obtenido parejas distintas

    ha obtenido una puntuación total mayor, si los dos han obtenido la misma pareja

    ha obtenido una pareja de dados iguales, si el otro jugador no ha obtenido pareja

    ha obtenido la mayor puntuación total, si ningún jugador ha obtenido pareja

Si no gana ningún jugador, lógicamente se habrá producido un empate.


Ayuda

    Variables auxiliares

    Se pueden crear tres variables auxiliares para cada jugador:
        $trio1 / $trio2, que guarden el valor del trío obtenido si se ha obtenido trío o 0 si no se ha obtenido trío
        $pareja1 / $pareja2, que guarden el valor de la pareja obtenida si se ha obtenido pareja o 0 si no se ha obtenido pareja
        $total1 / $total2, que guarden el total de puntos obtenidos

    Comparando las variables auxiliares se puede determinar qué jugador ha ganado.




-->

    <h2>2 - Juego de los tres dados:</h2>		
	<br><br>

	<div style="border:1px solid #000000; text-transform:uppercase">  
		<h3 align="center">
            <?php 
            
            $trio1 = 0;

            $trio2 = 0;

            $pareja1 = 0;

            $pareja2 = 0;

            $total1 = 0;

            $total2 = 0;

            /* First Player*/

            echo "First Player - ";

            $dado1=rand(1, 6);
            
            if ( $dado1 == 1 ) {
                $showimagen1='dado1.png';
            }
            elseif ( $dado1 == 2 ) {
                $showimagen1='dado2.png';
            }
            elseif ( $dado1 == 3 ) {
                $showimagen1='dado3.png';
            }
            elseif ( $dado1 == 4 ) {
                $showimagen1='dado4.png';
            }
            elseif ( $dado1 == 5 ) {
                $showimagen1='dado5.png';
            }
            else {
                $showimagen1='dado6.png';
            }

            echo "<br>";

            echo "Primer Dado: $dado1";

            $dado2=rand(1, 6);
            
            if ( $dado2 == 1 ) {
                $showimagen2='dado1.png';
            }
            elseif ( $dado2 == 2 ) {
                $showimagen2='dado2.png';
            }
            elseif ( $dado2 == 3 ) {
                $showimagen2='dado3.png';
            }
            elseif ( $dado2 == 4 ) {
                $showimagen2='dado4.png';
            }
            elseif ( $dado2 == 5 ) {
                $showimagen2='dado5.png';
            }
            else {
                $showimagen2='dado6.png';
            }

            echo "<br>";

            echo "Segundo Dado: $dado2";

            $dado3=rand(1, 6);
            
            if ( $dado3 == 1 ) {
                $showimagen3='dado1.png';
            }
            elseif ( $dado3 == 2 ) {
                $showimagen3='dado2.png';
            }
            elseif ( $dado3 == 3 ) {
                $showimagen3='dado3.png';
            }
            elseif ( $dado3 == 4 ) {
                $showimagen3='dado4.png';
            }
            elseif ( $dado3 == 5 ) {
                $showimagen3='dado5.png';
            }
            else {
                $showimagen3='dado6.png';
            }

            echo "<br>";
            
            echo "Tercer dado: $dado3";

            /* Second Player*/

            echo "<br>";
            echo "<br>";
            echo "<br>";

            echo "Second Player - ";

            $dado4=rand(1, 6);
            
            if ( $dado4 == 1 ) {
                $showimagen4='dado1.png';
            }
            elseif ( $dado4 == 2 ) {
                $showimagen4='dado2.png';
            }
            elseif ( $dado4 == 3 ) {
                $showimagen4='dado3.png';
            }
            elseif ( $dado4 == 4 ) {
                $showimagen4='dado4.png';
            }
            elseif ( $dado4 == 5 ) {
                $showimagen4='dado5.png';
            }
            else {
                $showimagen4='dado6.png';
            }

            echo "<br>";

            echo "Primer Dado: $dado4";

            $dado5=rand(1, 6);
            
            if ( $dado5 == 1 ) {
                $showimagen5='dado1.png';
            }
            elseif ( $dado5 == 2 ) {
                $showimagen5='dado2.png';
            }
            elseif ( $dado5 == 3 ) {
                $showimagen5='dado3.png';
            }
            elseif ( $dado5 == 4 ) {
                $showimagen5='dado4.png';
            }
            elseif ( $dado5 == 5 ) {
                $showimagen5='dado5.png';
            }
            else {
                $showimagen5='dado6.png';
            }

            echo "<br>";

            echo "Segundo Dado: $dado5";

            $dado6=rand(1, 6);
            
            if ( $dado6 == 1 ) {
                $showimagen6='dado1.png';
            }
            elseif ( $dado6 == 2 ) {
                $showimagen6='dado2.png';
            }
            elseif ( $dado6 == 3 ) {
                $showimagen6='dado3.png';
            }
            elseif ( $dado6 == 4 ) {
                $showimagen6='dado4.png';
            }
            elseif ( $dado6 == 5 ) {
                $showimagen6='dado5.png';
            }
            else {
                $showimagen6='dado6.png';
            }

            echo "<br>";
            
            echo "Tercer dado: $dado6";

            $sumPlay1 = $dado1 + $dado2 + $dado3;

            echo "<br>";
            echo "<br>";

            echo "El jugador 1 ha sacado en total $sumPlay1";

            echo "<br>";
            echo "<br>";

            $sumPlay2 = $dado4 + $dado5 + $dado6;

            echo "<br>";
            echo "<br>";

            echo "El jugador 2 ha sacado en total $sumPlay2";

            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";

            if ($sumPlay1 == $sumPlay2) {
                echo "IMPRESIONANTE, HAN SACADO EMPATE!!!";
            }
            elseif ($sumPlay1 > $sumPlay2) {
                echo "IMPRESIONANTE, EL JUGADOR 1 ES EL GANADOR!!!";
            }
            elseif ($sumPlay2 > $sumPlay1) {
                echo "IMPRESIONANTE, EL JUGADOR 2 ES EL GANADOR!!!";
            }

            echo "<br>";
            echo "<br>";

            echo "<br>";
            echo "<br>";

            if ($dado1 == $dado2) {
                if ($dado1 == $dado3) {
                    echo "OH MY GOD, JUGADOR 1 HA SACADO TRIO IGUAL, eres el/la mejor!!!";
                }
                
            }

            echo "<br>";
            echo "<br>";

            if ($dado4 == $dado5) {
                if ($dado4 == $dado6) {
                    echo "OH MY GOD, JUGADOR 1 HA SACADO TRIO IGUAL, eres el/la mejor!!!";
                }
                
            }


            ?>
        </h3>

        <p style="font-weight: bold;">1st player (Image)</p>

        <center><img src="<?php echo $showimagen1?>"/></center>
        <center><img src="<?php echo $showimagen2?>"/></center>
        <center><img src="<?php echo $showimagen3?>"/></center>

        <br>
        <br>

        <p style="font-weight: bold;">2nd player (Image)</p>

        <center><img src="<?php echo $showimagen4?>"/></center>
        <center><img src="<?php echo $showimagen5?>"/></center>
        <center><img src="<?php echo $showimagen6?>"/></center>
    </div>
	<br>

<!-- 3. Escriba un programa que cada vez que se ejecute muestre la tirada 
de entre 1 y 10 dados al azar y diga el valor máximo obtenido.(2 punts)
        -->

		<h2>3 - MAX Number:</h2>		
		<br><br>

		<div style="border:1px solid #000000; text-transform:uppercase;" >  
		    <h3 align="center">El resultado MAX es: 
                <?php 
            
                $dado= rand(1, 10);

                echo "$getrandmax($dado)";

                ?>
            </h3>
        </div>
        <br>

<!-- 4. Escriba un programa que solicite los elementos 
cuyos colores se quieren cambiar y que conste de dos páginas.(2 punts) 


    En la primera página se pide elegir los elementos (fondo de la página y texto de la página), pero no se muestran los colores que se van a aplicar.
    Los colores que en su caso se van a aplicar se eligen al azar (por ejemplo, dos colores HSL con el mismo matiz pero distinta saturación).
    En la segunda página se aplican los colores elegidos.

Ayuda

    Formulario

    Los colores obtenidos al azar que se muestran en la página final se definen en la página inicial, por lo que el formulario contiene un fragmento PHP.


   		    	/*$rgb= rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255);
			
		    	echo "rgb($rgb)"; */

                ?>
                <center><b style= "color: rgb(<?php echo $rgb?>)">Aquest és el color.</b></center> 

-->

        <h2>4 - Forlumario Changing Colors!:</h2>		
		<br>
        <br>

		<div style="border:1px solid #000000; text-transform:uppercase;" >  
		
            <h1> 
                <h2>
                    ¿Que color deseas cambiar?
                </h2>

            </h1>

            <br>
            <br>
        
            <form action="echo_colors.php" method="POST">
              <fieldset>
                <legend>Rellene su nombre y seleccione el fondo y texto de la pagina: </legend>
                <p>Escriba su nombre: <input type="text" name="usuario"></p>
                <p>¿Cual es su sexo? *</p>
                <select name="menuSexe">
                    <option value="void"></option>
                    <option value="Dona">Dona</option>
                    <option value="Home">Home</option>
                </select>
                <br/>
                <p>¿Que color quieres de fondo? *</p>
                <select name="menuColores">
                    <option value="void"></option>
                    <option value="Azul">Azul</option>
                    <option value="Rojo">Rojo</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Verde">Verde</option>
                    <option value="Amarillo">Amarillo</option>
                    <option value="Purpura">Purpura</option>
                    <option value="Oro">Oro</option>
                    <option value="Negro">Negro</option>
                </select>
                <p>¿Que font type quieres? *</p>
                <select name="menuFont">
                    <option value="void"></option>
                    <option value="Calibri">Calibri</option>
                    <option value="ComicSans">ComicSans</option>
                    <option value="Arial">Arial</option>
                    <option value="Vermut">Vermut</option>
                    <option value="ArialBlack">ArialBlack</option>
                </select>
                <br/>
                <p style="font-size: 10px;">* és obligatori</p>
                <input type="submit" value="Enviar" name="enviar">
                <input type="reset" value="Borrar" name="borrar">
              </fieldset>
            </form>

        
        </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <p>ADEU!</p>

	</body>
</html>
