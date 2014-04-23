<link href="../estilos/tecnologias.css" rel="stylesheet" type="text/css">
	<div name="tecnologiahtml" id="tecnologiahtml">
		<div id="BloquePrincipal">
			<div id="Contenido">
			<div id="Indice"><h2>HTML 4.01</h2></div>
				<ul>
					<li><a href="#DTD" target="Principal">Declaración de tipo de documento</a></li>
					<li><a href="#EDOC" target="Principal">Estructura de documento</a></li>
					<li><a href="#CHTML" target="Principal">Comentarios</a></li>
				</ul>

			<div class="Apartado">
				<div class="TituloApartado">
					<a href="#Indice" target="Principal"><img src="../imagenes/inicio_pagina.png" width="15" height="15" alt="Flecha"></a>
					<span id="DTD">Declaración de tipo de documento</span>
				</div>
					
				Existen tres Tipos de declaraciones
				<ul>
					<li>Estricto
						<div class="Codigo">
							<code>&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN" "http://www.w3.org/TR/html4/strict.dtd"&gt;</code>
						</div>
					</li>
					<li>Transicional
						<div class="Codigo">
								<code>&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"&gt;</code>
						</div>
					</li>
					<li>Con uso de frames
						<div class="Codigo">
								<code>&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"&gt;</code>
						</div>
					</li>
				</ul>
			</div>	

			<div class="Apartado">
					<div class="TituloApartado">
						<a href="#Indice" target="Principal"><img src="../imagenes/inicio_pagina.png" width="15" height="15" alt="Flecha"></a>
						<span id="EDOC">Estructura de documento</span>
					</div>
					<p>Un documento HTML, contiene, en primer lugar, o una declaración de tipo de documento,
					y a continuación o un elemento <span class="Codigo">&lt;HTML&gt;</span> que engloba todo
					el resto del documento, e incluye en este orden los elementos:</p>
				<ul>
					<li>Un elemento <span class="Codigo">&lt;HEAD&gt;</span></li>
					<li>Un elemento <span class="Codigo">&lt;BODY&gt;</span> (sustituido por <span class="Codigo">&lt;FRAMESET&gt;</span> en los documentos que definen frames).</li>
					<li>Las etiquetas <span class="Codigo">&lt;HTML&gt;</span>, <span class="Codigo">&lt;HEAD&gt;</span> y <span class="Codigo">&lt;BODY&gt;</span> podrían omitirse; el AU las reconstruye.</li>
				</ul>

				<div class="Ejemplo">
						<p>&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"&gt;</p>
						<p class="margen">&lt;HTML&gt;</p>
						<p class="indenta">&lt;HEAD&gt;</p>
						<p class="indenta2">&lt;TITLE&gt;Título de ejemplo&lt;/TITLE&gt;</p>
						<p class="indenta">&lt;/HEAD&gt;</p>
						<p class="indenta">&lt;BODY&gt;</p>
						<p class="indenta2">Este es el cuerpo de la página de ejemplo...</p>
						<p class="indenta"> &lt;/BODY&gt;</p>
						<p class="margen">&lt;/HTML&gt;</p>
				</div>	
			</div>

			<div class="Apartado">
					<div class="TituloApartado">
						<a href="#Indice" target="Principal"><img src="../imagenes/inicio_pagina.png" width="15" height="15" alt="Flecha"></a>
						<span id="CHTML">Comentarios HTML</span>
					</div>
					<ul>
						<li>Tienen la siguiente estructura <span class="Codigo">&lt;!-- comentario --&gt;</span></li>
						<li>Todo el contenido que aparezca entre las dos marcas no es mostrado por el navegador.</li>
						<li>Se pueden situar en cualquier parte del elemento <span class="Codigo">&lt;HTML&gt;</span>.</li>
						<li>Se emplean para hacer el codigo fuente más legible.</li>
					</ul>
				
					<div class="Ejemplo">
							<p>&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"&gt;</p>
							<p class="margen">&lt;html&gt;</p>
							<p class="indenta">&lt;head&gt;</p>
							<p class="indenta2">&lt;title&gt;Título de otro ejemplo&lt;/title&gt;</p>
							<p class="indenta">&lt;/head&gt;</p>
							<p class="indenta">&lt;body&gt;</p>
							<p class="indenta2">Este es el cuerpo de la página del otro ejemplo...</p>
							<p class="indenta">&lt;/body&gt;</p>
							<p class="margen">&lt;/html&gt;</p>
					</div>
				</div>
			</div>
		</div>
		<div id="PieDeBloque">http://www.uca.es/</div>
	</div>