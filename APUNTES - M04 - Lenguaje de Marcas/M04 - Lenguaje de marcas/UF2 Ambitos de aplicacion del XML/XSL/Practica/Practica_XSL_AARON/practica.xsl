<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
		<title><xsl:value-of select="borsa/@dia"/> &#45; <xsl:value-of select="borsa/@hora"/> </title>
	</head>
  <body>
    <table border="1">
      <tr>
         <th>Codi</th>
		 <th>Nom</th>
         <th>Preu</th>
      </tr>
      <xsl:for-each select="borsa/empresa"> 
		  <xsl:sort select="preu"/>
		  <tr>
			<td>
				<xsl:value-of select="codi"/></td> 
			<xsl:choose>
				<xsl:when test="@index = 'general'">
					<td><xsl:value-of select="nom"/>(*)</td>
				</xsl:when>
				
				<xsl:otherwise>
					<td><xsl:value-of select="nom"/></td></xsl:otherwise>
			  </xsl:choose>
			
			
			 <xsl:choose>
				<xsl:when test="preu &gt; 75">
					<td>
						<div class="preu1">
							<xsl:value-of select="preu"/>
						</div> 
					</td>
				</xsl:when>
				
				<xsl:when test="preu &lt; 25">
					<td>
						<div class="preu2">
							<xsl:value-of select="preu"/>
						</div>
					</td> 
				</xsl:when>
				
				<xsl:otherwise>
					<td><xsl:value-of select="preu"/></td></xsl:otherwise>
			  </xsl:choose>
			 
		  </tr>
      </xsl:for-each>
    </table>
		<div>(*) Aquestes empreses són de l'índex general</div>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>
