<?
include('acceso.inc.php');
session_name('PIcontenidos');
session_start();

function comprueba_datos()
{
	echo "<link href='../estilos/principal.css' rel='stylesheet' type='text/css'>";
	echo "<div id='BloquePrincipal'><div id='Contenido'>";
	
	if($id_picont=mysql_connect($_SESSION['servidor'], $_SESSION['login'],$_SESSION['passwd']))
	{
		echo "<br>";

		if($base_datos = mysql_select_db($_SESSION['Base_Datos'], $id_picont))
		{
			echo "Accediendo a base de datos.";
			$query_usuario = "SELECT usuario FROM ".$_SESSION['tabla'].",bloqueados WHERE '".$_REQUEST['usuario']."' = usuarios.usuario and usuarios.dni = bloqueados.dni and bloqueado = 0;";
			$selec_user = mysql_query($query_usuario,$id_picont);

			$query_clave = "SELECT clave FROM ".$_SESSION['tabla']." WHERE '".$_REQUEST['usuario']."' = usuario;";
			$selec_pass = mysql_query($query_clave,$id_picont);

			$nom_usu = "SELECT nombre, apellidos FROM ".$_SESSION['tabla']." WHERE '".$_REQUEST['usuario']."' = usuario;";

			while($registro = mysql_fetch_row($selec_user))
			{
				foreach($registro as $nombre)
					$nombre;
			}

			while($contrasenia = mysql_fetch_row($selec_pass))
			{
				foreach($contrasenia as $clave)
					$clave;
			}
			
			if(!$nombre) { $sw = 2; }

			elseif(($nombre == $_REQUEST['usuario']) && $clave == $_REQUEST['clave'])
			{
				$sw = 1;
				$iduser = "SELECT dni FROM ".$_SESSION['tabla']." WHERE '".$_REQUEST['usuario']."' = usuario;";
				$selec_iduser = mysql_query($iduser,$id_picont);
				while($ses_id = mysql_fetch_row($selec_iduser)) {
					foreach($ses_id as $dni)
						$dni;
				}
				session_id($dni);
				$nomb=label_usuario($nom_usu,$id_picont);
			}
			else { $sw = 0; }

			if(mysql_close($id_picont))
				{ echo "<br>"; }
		}
		else
		{
			echo "<style type='text/css'><div id='BloquePrincipal'><a href='javascript:history.go(-1)'>Volver</a>";
			echo "NO DataBase", "<br>";
			echo "</div><div id='PieDeBloque'>http://www.uca.es/</div>";
		}

		switch($sw)
		{
			case 0:
			echo "<br>incorrecto.";
				$pag = '../html/incorrecto.php';
				$sec=0;
				header("Refresh: $sec, url=$pag");
				exit();
				break;
		
			case 1:
			echo "<br>procesando fichas.";
				procesa_fichas(1,$nomb);
				echo("<script language='javascript'>");
				echo("parent.location.href = 'http://localhost/';"); 
				echo("</script>");
				//header("Location: http://localhost/");
				exit();
				break;

			case 2:
			echo "<br>bloqueado.";
				$pag = '../html/bloqueado.php';
				$target = 0;
				header("Refresh: $target, url=$pag");
				exit();
				break;
		}

		echo "<br><a href='javascript:history.go(-1)'>Volver</a>";
		echo "</div></div><div id='PieDeBloque'>http://www.uca.es/</div>";
	}
	else
	{
		echo "<style type='text/css'><div id='BloquePrincipal'><a href='javascript:history.go(-1)'>Volver</a>";
		echo "Conexión fallida", "<br>";
		echo "</div><div id='PieDeBloque'>http://www.uca.es/</div>";
	}
}
?>