// ACTIVITAT 1


// Programa factorial.php que calcularà el factorial d'un valor especificat al codi font i posteriorment 
// rebut com un paràmetre: http://localhost/php/factorial.php?x=25. 
// Opcionalment podeu utilitzar sencers de longitud arbitrària per poder calcular majors factorials.

<!DOCTYPE html>
<html>
        <head>
                <title>Exemple</title>
        </head>
        <body>

                <p>Programa factorial.php que calcularà el factorial d'un valor especificat al codi font i posteriorment rebut com un paràmetre: http://localhost/php/factorial.php?x=25</p>
                <?php
                       $num1= $_POST["num1"];
                       
                       echo "El factorial del numero: ".$num1;
                        
                       function obtener_factorial($mi_factorial)
                       {
                                if($mi_factorial==1)
                                        return 1;
                                else   
                                        return $mi_factorial * obtener_factorial($mi_factorial-1);
                       }
                ?>

                <form action="factorial.php" method="POST">
                        <p>Introduce un numero : <input type="text" name="num1"></p>
                        <input type="submit" value="Enviar" name="enviar">
                </form>

                <h3 align="center">El resultado es: <?php echo obtener_factorial($num1);?></h3>
        </body>
</html>



// Escriviu un programa que cada vegada que 
// s'executi mostri un valor entre 1 i 6, a l'atzar.