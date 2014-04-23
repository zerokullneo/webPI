<link href="../estilos/menu.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../scripts/ocultar_menu.js"></script>
		<div name="Menu" id="BloqueMenu">
			<div name="ContenedorLabels" id="BloqueContenedorLabels">
				<div id="CerrarSesion"><a href="../include/procesa_cierre.php" target="_parent" name="cierre" id="idcierre">Cerrar</a></div>
				<div id="Autenticado">Usuario:
				</div>
			</div>
			<div name="ContenedorMenu" id="BloqueContenedorMenu">
				<div class="NoActiveBotonMenu">
					<a href="html/tecnhtml.php" target="_top" name="fhtml"  onfocus="intercambioficha(1,this);" onclick="intercambioficha(1,this);" onmousedown="intercambioficha(0,this)" id="idfhtml">
						<span class="TituloLabel">HTML</span>
						<img src="../imagenes/ficha.png" name="fhtml" alt="Apartado html">
					</a>
				</div>
				<div class="NoActiveBotonMenu">
					<a href="html/enconstruccion.php" target="_top" name="fcss"  onfocus="intercambioficha(1,this);" onclick="intercambioficha(1,this);" onmousedown="intercambioficha(0,this)" id="idfcss">
						<span class="TituloLabel">CSS</span>
						<img src="../imagenes/ficha.png" name="fcss" alt="Apartado css">
					</a>
				</div>
				<div class="NoActiveBotonMenu">
					<a href="html/enconstruccion.php" target="_top" name="ftcli"  onfocus="intercambioficha(1,this);" onclick="intercambioficha(1,this);" onmousedown="intercambioficha(0,this);" id="idftcli">
						<span class="TituloLabel">T.Cliente</span>
						<img src="../imagenes/ficha.png" name="ftcli" alt="Tec Cliente">
					</a>
				</div>
				<div class="NoActiveBotonMenu">
					<a href="html/enconstruccion.php" target="_top" name="ftser"  onfocus="intercambioficha(1,this);" onclick="intercambioficha(1,this);" onmousedown="intercambioficha(0,this);" id="idftser">
						<span class="TituloLabel">T.Servidor</span>
						<img src="../imagenes/ficha.png" name="ftser" alt="Tec Servidor">
					</a>
				</div>
				<div class="NoActiveBotonMenu">
					<a href="html/enconstruccion.php" target="_selfs" name="fxml"  onfocus="intercambioficha(1,this);" onclick="intercambioficha(1,this);" onmousedown="intercambioficha(0,this);" id="idfxml">
						<span class="TituloLabel">XML</span>
						<img src="../imagenes/ficha.png" name="fxml" alt="Apartado xml">
					</a>
				</div>
				<div class="NoActiveBotonMenu">
					<a href="recursos/recursos.xml" target="_selfs" name="frec"  onfocus="intercambioficha(1,this);" onclick="intercambioficha(1,this);" onmousedown="intercambioficha(0,this);" id="idfrec">
						<span class="TituloLabel">Recursos</span>
						<img src="../imagenes/ficha.png" name="frec" alt="Apartado Recursos">
					</a>
				</div>
			</div>
			<script type="text/javascript">
				Alternar(0);
			</script>
			<div id="LineaMenu"></div>
		</div>