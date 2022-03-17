<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:import href="bib_templates2.2.xsl" />

	<!-- Plantilla raíz -->
  <xsl:template match="/">
    <html>
      <head>
      </head>
      <body>
        <xsl:apply-templates />
      </body>
      </html>
  </xsl:template>

</xsl:stylesheet>
