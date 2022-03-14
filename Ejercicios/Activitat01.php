// ACTIVITAT 1


// 1. Escriure una pàgina que mostri en pantalla 10 vegades i numerant cada línia: "Aprendré PHP".


<!DOCTYPE html>
<html>
        <head>
                <title>Exemple</title>
        </head>
        <body>

                <p>Escriure una pàgina que mostri en pantalla 10 vegades i numerant cada línia: Aprendr</p>
                <?php
                        for($i=1; $i <=10; $i++) {
                                echo "$i) Aprenderé PHP<br>";
                        }
                ?>

        </body>
</html>



// 2. Escriure una pàgina que mostri 5 components diferents de la variable $_SERVER[]


<!DOCTYPE html>
<html>
        <head>
                <title>Exemple</title>
        </head>
        <body>

                <p>Escriure una pàgina que mostri 5 components diferents de la variable $_SERVER[]</p>
                <?php
                        echo $_SERVER['PHP_SELF'];
			echo "<br>";
			echo $_SERVER['SERVER_NAME'];
			echo "<br>";
			echo $_SERVER['HTTP_HOST'];
			echo "<br>";
			echo $_SERVER['HTTP_REFERER'];
			echo "<br>";
			echo $_SERVER['HTTP_USER_AGENT'];
			echo "<br>";
			echo $_SERVER['SCRIPT_NAME'];
                ?>

        </body>
</html>
