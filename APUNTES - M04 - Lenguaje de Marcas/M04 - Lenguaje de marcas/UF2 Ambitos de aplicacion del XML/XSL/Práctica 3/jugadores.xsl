<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="jugadores.css"/>
			<title>ACB</title>
		</head>
	  <body>
		<div id="div1">
			<h1>
				Jugadores FIATC JOVENTUT
			</h1>
		</div>
		<div id="jugadores">
		  <xsl:for-each select="jugadores/jugador"> 
				<div id="jugador">
					<div id="foto">
						<img id="foto01">
							<xsl:attribute name="src">
								<xsl:value-of select="foto"/>
							</xsl:attribute>
						</img>
					</div>
					<div id="datos">
						<p> <xsl:value-of select="equipo"/></p>
						<p> <xsl:value-of select="numero"/></p>
						<p> <xsl:value-of select="nombre"/></p>
						<p> <xsl:value-of select="posicion"/></p>
						<p> <xsl:value-of select="nacionalidad"/></p>
						<p> <xsl:value-of select="licencia"/></p>
						<p> <xsl:value-of select="altura"/></p>
						<p> <xsl:value-of select="edad"/></p>
						<p> <xsl:value-of select="temporada"/></p>
					</div>
				</div>
		  </xsl:for-each>
		</div>
	  </body>
	</html>
</xsl:template>
</xsl:stylesheet>

