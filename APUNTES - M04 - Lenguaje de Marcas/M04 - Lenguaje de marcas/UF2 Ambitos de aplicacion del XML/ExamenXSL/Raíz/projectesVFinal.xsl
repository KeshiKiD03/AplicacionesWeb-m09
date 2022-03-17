<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

<xsl:template match="/">
	<html>
		<head>
			<title>
				Listado de proyectos
			</title>
		</head>
		<body>
			<xsl:for-each select="empresa/projecte">
				<table border="1">
				<tr>
					<th colspan="2">
						<th style="text-align: center;">Proyecto</th>
					</th>
				</tr>
				<tr>
					<td colspan="2"><xsl:value-of select="nom" /></td>
				</tr>
				<tr>
					<td style="text-align: center;"><b>Fecha Inicio</b></td>
					<td style="text-align: center;"><b>Presupuesto</b></td>
				</tr>
				<tr>
					<td><xsl:value-of select="dataInici" /></td>
					<td><xsl:value-of select="pressupost" /></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;"><b>Participantes</b></td>
				</tr>
				<tr>
					<td style="text-align: center;"><b>Departamentos</b></td>
					<td style="text-align: center;"><b>Responsables</b></td>
				</tr>
				<xsl:for-each select="participants">
				<xsl:sort select="responsable" />
				<tr>
					<td>Automática e informática</td>
					<td>Daniel Garcia</td>
				</tr>
				<tr>
					<td>Ingeniería de software</td>
					<td>Francisco Gonzalez</td>
				</tr>
				<tr>
					<td>Lenguaje y sistemas informáticos</td>
					<td>Antonio Morales</td>
				</tr>
				</xsl:for-each>
			</table>
		</xsl:for-each>
		</body>
	</html>
</xsl:template>
</xsl:stylesheet>


<!--
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

-->
