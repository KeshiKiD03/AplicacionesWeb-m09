<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

<xsl:template match="/">
	<html>
		<head>
			<title>
				Projectes
			</title>
		</head>
		<body>
			<table border="1">
				<tr>
					<th colspan="2">Proyecto</th>
				</tr>
				<tr>
					<td colspan="2">Optimización de sistemas de refrigeración</td>
				</tr>
				<tr>
					<td style="text-align: center;"><b>Fecha inicio</b></td>
					<td style="text-align: center;"><b>Presupuesto</b></td>
				</tr>
				<tr>
					<td>30/01/14</td>
					<td>12345</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;"><b>Participantes</b></td>
				</tr>
				<tr>
					<td style="text-align: center;"><b>Departamentos</b></td>
					<td style="text-align: center;"><b>Responsables</b></td>
				</tr>
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
			</table>
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
