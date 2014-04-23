<?
include('acceso.inc.php');
include('datos.inc.php');
session_name('PIcontenidos');
session_id($id = $dni);

procesa_fichas(0,$nomb);

session_destroy();
header('Location: http://localhost/');
?>