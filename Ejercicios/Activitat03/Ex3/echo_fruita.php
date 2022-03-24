<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Activitat 03: Exercici 3</title>
		<style type="text/css">
			*{ font-family:Calibri, 
                "Segoe UI", 
                "DejaVu Sans", 
                "Trebuchet MS", 
                Verdana, 
                sans-serif
            }
			.main{ margin:auto; 
                border:5px solid #3f7a82; 
                width:40%; 
                text-align:left; 
                padding:30px; 
                background:#bed7c0
            }
			input[type=submit]{ background:#3f7a82; width:100%;
				padding:5px 15px; 
				background:#ccc; 
				cursor:pointer;
				font-size:16px;
			   
			}
            .fruites{
                color: red;
                font-weight: bold;
            }
		</style>
	</head>

<!-- 3. Escriviu un programa que escrigui la fruita favorita i que consti de dues pàgines.
    A la primera pàgina es demana triar la fruita preferida mitjançant un botó ràdio.
    A la segona pàgina es mostra el nom de la fruita. -->

	<body bgcolor="#bed7c0">
		
	    <div class="main">

	    	<h2 align="center">Fruita Favorita (Resultat)</h2>
            <center>
                <p>La seva fruita favorita es/la: 
                    <div class="fruites">
                        <?php echo $_POST["fruites"];?>
                    </div>
                </p>
            </center>
            <div align="left">
                <a href="solicita_fruita.html">Tornar al formulari</a>
            </div>
        </div>
	</body>
</html>
