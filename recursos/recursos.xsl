<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<!-- Método de salida -->

<xsl:output method="html" version="4.01" encoding="utf-8" doctype-public="-//W3C//DTD HTML 4.01//EN"/>

<!-- Elemento raíz -->

<xsl:template match="/">
	<html>
		<head>
			<title>Unidad y Contenido</title>
				<link href="../estilos/principal.css" rel="stylesheet" type="text/css"></link>
				<link href="../estilos/recursos.css" rel="stylesheet" type="text/css"></link>
		</head>
		<body>
			<div id="BloquePrincipal">
				<div id="Contenido">
				<div style="text-align: center"><h2>Recursos</h2></div>
					<ol>
						<xsl:for-each select="Recursos/Recurso">
							<xsl:sort select="Unidad" order="ascending"/>
							<xsl:sort select="Descripcion" data-type="number"/>
								<xsl:if test="not(Unidad = preceding-sibling::Recurso/Unidad) and (position()-1) != last()">
									<h4><xsl:value-of select="Unidad"/></h4>
								</xsl:if>
								<li>
									<a href="{@url | @fichero}" target="_blank" name="uno"><xsl:value-of select="Descripcion"/></a>
										<xsl:if test="@url">
											<img src="../imagenes/inet.png" width="3%" height="3%" alt="Enlace Externo"/>
										</xsl:if>
										<xsl:if test="@fichero">
											<img src="../imagenes/folder.png" width="3%" height="3%" alt="Recurso Local"/>
										</xsl:if>
										<xsl:if test="Idioma='Castellano'">
											<img src="../imagenes/bandera-españa.jpg" width="3%" height="2%" alt="Recurso en Castellano"/>
										</xsl:if>
								</li>
						</xsl:for-each>
					</ol>
				</div>
			</div>
			<div id="PieDeBloque">http://www.uca.es/</div>
		</body>
	</html>
</xsl:template>

</xsl:stylesheet>