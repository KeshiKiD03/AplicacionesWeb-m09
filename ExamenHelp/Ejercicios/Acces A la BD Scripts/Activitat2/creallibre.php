<?php
if(isset($_POST["isbn"]))
{
  //Variables de POST definides
 
 
 
        //Podem mostrar tot el contingut de POST a mode de debug
        $var = "";
 
        foreach($_POST as $key => $value)
                {
                        $var .= "POST[" . $key . "]= " . $value . "<br>";
                        //$var = $var . "POST[" . $key . "]= " . $value . "<br>";
 
                }
                        echo($var);
        }
  else
  {
    //Sense dades del formulari
  }
  
//CONNECTEM AL SERVIDOR  

$passwdBD = "keshi";
$userBD = "keshi";
$servidor = "localhost";
$nomBD = "biblioteca";

$connexio = mysqli_connect($servidor,$userBD,$passwdBD);

if (!$connexio)
    {
        exit('No es pot connectar:'. mysqli_error());
    }

	if(!mysqli_select_db($connexio,$nomBD)){

           exit("Error al connectar amb la base de dades". mysqli_error());
	}

        //En primer lloc comprovem que no hi ha cap llibre amb el mateix isbn
        $consulta = sprintf('select * from llibres where isbn="%s" ', $_POST["isbn"]);
        echo $consulta;

        //Fem la consulta
        if ($result = mysqli_query($connexio, $consulta)  )
        {
                //Mirem quants registres ha retornat la consulta
                $afectades = mysqli_num_rows($result);

                //Existeix un llibre amb aquest isbn
                if($afectades!=0)
                {
                        //Llibre existent
                        printf('<div class="login">Ja existeix un llibre amb ISBN = %s </div>',  $_POST["isbn"] );
                }


                else
                {
			//No existeix cap llibre, el creem
			//Crear quan no hi hagi cap llibre amb el ISBN introduit

                  //echo $consulta;
			                                $consulta = sprintf('insert into llibres (id, nom, autor, isbn, puntuacio, genere) values ("%s", "%s", "%s", "%s", "%s", "%s")', $_POST["id"], $_POST["nom"], $_POST["autor"], $_POST["isbn"], $_POST["puntuacio"], $_POST["genere"]);

                        if ($result = mysqli_query($connexio, $consulta)  )
			{
                                //Inserció correcta
                                printf('<div class="login">Inserció correcta </div>');
                        }
                        else
                        {
                                //Error a l'inserir
                                printf('<div class="login">Error inserint </div>');
                        }

    }

  }

  else
        {
                printf('<div class="login">Error al fer la consulta </div>');
        }

?>

