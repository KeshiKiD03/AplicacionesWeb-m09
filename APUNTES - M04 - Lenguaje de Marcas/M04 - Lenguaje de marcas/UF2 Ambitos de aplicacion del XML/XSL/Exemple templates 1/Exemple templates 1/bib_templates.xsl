<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<!-- Plantilla raíz -->
  <xsl:template match="/">
    <html>
      <head>
      </head>
      <body>
        <xsl:apply-templates select="bib" />
      </body>
      </html>
  </xsl:template>

  <!-- Plantilla bib -->
  <xsl:template match="bib">
    <ul>
      <xsl:apply-templates select="book" />
    </ul>
  </xsl:template>

  <!-- Plantilla book -->
  <xsl:template match="book">
    <li>
      <xsl:apply-templates select="title" />
      <xsl:apply-templates select="year" />
    </li>
  </xsl:template>

  <!-- Plantilla title -->
  <xsl:template match="title">
    <b><xsl:value-of select="." /></b>
  </xsl:template>

  <!-- Plantilla year -->
  <xsl:template match="year">
    (<xsl:value-of select="." />)
  </xsl:template>
</xsl:stylesheet>
