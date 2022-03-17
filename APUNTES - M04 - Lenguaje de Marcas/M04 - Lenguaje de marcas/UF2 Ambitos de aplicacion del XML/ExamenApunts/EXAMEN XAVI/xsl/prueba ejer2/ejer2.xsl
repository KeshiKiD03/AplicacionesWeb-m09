<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

 <xsl:template match="/">
<html>

   <table border="1">
     <tr>
       <th colspan="2">Professor i assignatures</th>
     </tr>
     <tr>
     <th><xsl:apply-templates select="persones/professor" mode="primero"/></th>
     </tr>
     <tr>
     <th><xsl:apply-templates select="persones/professor" mode="segundo"/></th>
     </tr>
   </table> 
</html>
 </xsl:template>
 
 <xsl:template match="/persones/professor" mode="primero"> 

<tr>
<td>
  <xsl:value-of select="nom"/>
</td>
</tr>
 </xsl:template>
<xsl:template match="/persones/professor" mode="segundo"> 
<tr>
<td>
  <xsl:value-of select="assignatura" />
</td>
</tr>
</xsl:template>
 </xsl:stylesheet>
