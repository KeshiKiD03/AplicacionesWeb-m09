<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

  <xsl:template match="/">
	<html>
	<head>
		<link rel="stylesheet" href="p2.css" type="text/css"/>
	<title>
	<xsl:value-of select="borsa/@dia" />/
	<xsl:value-of select="borsa/@hora" />	
	</title>
	</head>

	 <body>
      
		 <xsl:apply-templates select="borsa" />
	
	 </body>

</html>
</xsl:template>

  <!-- Plantilla borsa -->
  <xsl:template match="borsa">
   <table border="1">
	
         <tr>
	             <th>Codi</th>
                 <th>Nom</th>
                 <th>Preu</th>
         </tr>
         <xsl:apply-templates select="empresa">
			   <xsl:sort select="preu" order="descending" />
		</xsl:apply-templates>
    </table>     
  </xsl:template>
  
  <!-- Plantilla empresa -->
  <xsl:template match="empresa">
	<tr>
		<xsl:apply-templates select="codi" />
		<xsl:apply-templates select="nom" />
		<xsl:apply-templates select="preu" />
	</tr> 
  </xsl:template>
  
  
    <!-- Plantilla codi -->
	<xsl:template match="codi">
	  <td>
		<xsl:value-of select="." />
	  </td>
	</xsl:template> -
  
  
  <!-- Plantilla nom -->
	<xsl:template match="nom">
	    <td>
			<xsl:value-of select="." />
			<xsl:if test="../@index='general'">(*)</xsl:if>
	    </td>
	</xsl:template> 
  
  
  <!-- Plantilla preu -->
	<xsl:template match="preu">
	    <xsl:choose>
					  <xsl:when test=".  &gt; 75">
						  <td class="rojo">
							<xsl:value-of select="." />
						  </td> 
					  </xsl:when>
					  <xsl:when test=". &lt; 25">
						 <td class="azul">
							<xsl:value-of select="." />
						</td>
					  </xsl:when>
					   <xsl:otherwise>
						 <td>
						   <xsl:value-of select="." />
						 </td>
					  </xsl:otherwise>
				  </xsl:choose>
	  
	</xsl:template> 
  


</xsl:stylesheet>

