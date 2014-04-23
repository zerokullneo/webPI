<?xml version="1.0" encoding="utf-8"?>
<xsl:input method="xml" version="2.0" encoding="utf-8" standalone="no" DOCTYPE="recursos.dtd" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<!-- Método de salida -->

<xsl:output method="html" version="4.01" encoding="utf-8" doctype-public="-//W3C//DTD HTML 4.01//EN"/>

<!-- Elemento raíz -->

<xsl:template match="/">
	<html>
		<head>
			<title>Unidad y Contenido</title>
		</head>
		<body>
			<ol>
				<xsl:for-each select="Recurso/Descripcion">
				<li>
					<xsl:value-of select="Unidad"/>
					(<xsl:value-of select="Contenido"/>)
				</li>
				</xsl:for-each>
			</ol>
		</body>
	</html>
</xsl:template>
</xsl:output>