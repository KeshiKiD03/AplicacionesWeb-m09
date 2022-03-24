<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Activitat 03: Exercici 2</title>
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

<!-- 2. Escriviu un programa que dibuixi un quadrat que consti de dues pàgines.
    A la primera pàgina se sol·liciten la mida del quadrat en píxels.
    A la segona pàgina es mostra el quadrat (farcit de blanc, vora negra sòlida de 10px). -->

	<body bgcolor="##bed7c0">
		
	    <div class="main">

	    	<h2 align="center">El quadrat és (Resultat)</h2>
            <center>
                <div style="border: 10px solid; background: white; width: 
                    <?php echo $_POST["size"]?>px; height: <?php echo $_POST["size"]?>px">
                </div>
            </center>
        </div>
        <br>
        <div align="center">
            <a href="solicita_mesura.html">Tornar</a>
        </div>
	</body>
</html>
