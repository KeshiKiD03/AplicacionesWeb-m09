<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="style.css"/>
			<title>
				<xsl:apply-templates select="borsa/@dia"/> &#45;<xsl:apply-templates select="borsa/@hora"/>
			</title>
		</head>
	  <body>
		<table>
			<tr>
				<th>Codi</th>
				<th>Nom</th>
				<th>Preu</th>
			</tr>
		  <xsl:apply-templates select="borsa/empresa">
			<xsl:sort order="descending" select="preu"/>
		  </xsl:apply-templates>
		</table>	
		<p>(*) Aquestes empreses són de l'índex general</p>
	  </body>
	</html>
</xsl:template>
	<xsl:template match="borsa/empresa">		
			<tr>
				<td><xsl:apply-templates select="codi"/></td>
				<xsl:choose>
					<xsl:when test="@index='general'">
						<td><xsl:apply-templates select="nom"/>(*)</td>
					</xsl:when>
					<xsl:otherwise>
						<td><xsl:apply-templates select="nom"/></td>
					</xsl:otherwise>
				</xsl:choose>
				<xsl:choose>
					<xsl:when test="preu &gt; 75">
						<td><div class="mas75"><xsl:apply-templates select="preu"/></div></td>
					</xsl:when>
					<xsl:when test="preu &lt; 25">
						<td><div class="menos25"><xsl:apply-templates select="preu"/></div></td>
					</xsl:when>
					<xsl:otherwise>
						<td><xsl:apply-templates select="preu"/></td>
					</xsl:otherwise>
				  </xsl:choose>
			</tr>
	</xsl:template>
	<xsl:template match="borsa/@dia">		
		<xsl:value-of select="."/>
	</xsl:template>
	<xsl:template match="borsa/@hora">		
		<xsl:value-of select="."/>
	</xsl:template>
	<xsl:template match="codi">		
		<xsl:value-of select="."/>
	</xsl:template>
	<xsl:template match="nom">		
		<xsl:value-of select="."/>
	</xsl:template>
	<xsl:template match="preu">		
		<xsl:value-of select="."/>
	</xsl:template>
</xsl:stylesheet>
