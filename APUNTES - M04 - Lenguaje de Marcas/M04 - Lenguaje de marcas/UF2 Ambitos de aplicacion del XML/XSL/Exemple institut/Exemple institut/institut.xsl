<?xml version="1.0" encoding="UTF-8"?>


<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estil.css" media="screen" />
	</head>
	<body>
		
		
	<h2>Professors</h2>	
	<table border="1">
	<tr><th>Nom</th>
	<th>Foto</th></tr>
	<xsl:for-each select="//professor">
		<xsl:sort select="nom"/>
			
		
		<tr>
		<xsl:choose>
			<xsl:when test="contains(nom, 'Joan')">
				<td class="blue"><xsl:value-of select="nom"/></td>
				
			</xsl:when>
			
				<xsl:when test="contains(nom, 'Johannes')">
				<td class="green"><xsl:value-of select="nom"/></td>
				
			</xsl:when>
		
			
			<xsl:otherwise>
				<td><xsl:value-of select="nom"/></td>
				</xsl:otherwise>
			
		</xsl:choose>
			<td>
			<img>
			<xsl:attribute name="src">
				<xsl:value-of select="foto" />
			 </xsl:attribute>
			</img>
		</td>
		</tr>
	</xsl:for-each>
	</table>	
	
	
	<h2>Alumnes</h2>	
	<table border="1">
	<tr><th>Nom</th></tr>
	<xsl:for-each select="//alumne">
		<xsl:sort select="nom"/>
			
		<xsl:choose>
			<xsl:when test="contains(nom, 'Pi')">
				<tr><td class="blue"><xsl:value-of select="nom"/></td></tr>
			</xsl:when>
			
				<xsl:when test="contains(nom, 'Johannes')">
				<tr><td class="green"><xsl:value-of select="nom"/></td></tr>
			</xsl:when>
		
			
			<xsl:otherwise>
				<tr><td><xsl:value-of select="nom"/></td></tr>
			</xsl:otherwise>
			
		</xsl:choose>
		
		
	</xsl:for-each>
	</table>	
		
	</body>
</html>

</xsl:template>

</xsl:stylesheet>
