<?
include('datos.inc.php');
session_name('PIcontenidos');
session_start();

function procesa_fichas($interruptor,$nomb) {

	if($interruptor == 1) {
		
			$file='../html/menu.php';
			$search=array("Alternar(0)");
			$filename=file_get_contents($file);
			$replace=array("Alternar(1)");
			$data=str_replace($search, $replace, $filename);
			file_put_contents($file, $data);

			$search=array("Usuario:");
			$filename=file_get_contents($file);
			$replace=array("Usuario: $nomb");
			$data=str_replace($search, $replace, $filename);
			file_put_contents($file, $data);
			
			$file1='../html/titulo.php';
			$search1=array("main(1)");
			$filename1=file_get_contents($file1);
			$replace1=array("main(0)");
			$data1=str_replace($search1, $replace1, $filename1);
			file_put_contents($file1, $data1);
	}
	else {
		echo "Adios";
			$file='../html/menu.php';
/*			$search=array("Alternar(1)");
//			$filename=file_get_contents($file);
//			$replace=array("Alternar(0)");
//			$data=str_replace($search, $replace, $filename);
//			file_put_contents($file, $data);

//			$search=array("Usuario: $nombe");
//			$filename=file_get_contents($file);
//			$replace=array("Usuario:");
			$data=str_replace($search, $replace, $filename);*/
			$data=file_get_contents('../html/menu0.php');
			file_put_contents($file, $data);

			$file1='../html/titulo.php';
			$search1=array("main(0)");
			$filename1=file_get_contents($file1);
			$replace1=array("main(1)");
			$data1=str_replace($search1, $replace1, $filename1);
			file_put_contents($file1, $data1);
	}
}

function label_usuario($q_nom_user,$id_pi) {

	$nom_ape = mysql_query($q_nom_user, $id_pi);

	while($completo = mysql_fetch_row($nom_ape)) {
		foreach($completo as $nom_completo)
			$nom_final = $nom_final." ".$nom_completo;
	}
	return $nom_final;
}

function label_cierre() {
	link('_parent', procesa_cierre.php);
}
?>