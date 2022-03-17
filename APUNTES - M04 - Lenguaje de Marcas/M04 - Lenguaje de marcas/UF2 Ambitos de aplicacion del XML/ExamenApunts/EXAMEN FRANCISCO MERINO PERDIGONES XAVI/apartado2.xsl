<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
 <xsl:template match="/">
<html>
   <h1>Editors i specialitats</h1>
   <table border="1">
     <xsl:apply-templates select="//editor"/>
   </table> 
</html>
 </xsl:template>
 
 <xsl:template match="//editor"> 

<tr>
<th>
  <xsl:value-of select="nom"/>
</th>
<td>
  <xsl:value-of select="especialitat" />
</td>
</tr>
</xsl:template>
 </xsl:stylesheet>
