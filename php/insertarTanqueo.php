<?php 
session_start();
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");


$sql= "call insertarTanqueo (".$_POST['idConten'].",".$_POST['masStock'].",".$_POST['idUser'].",'".$_POST['obs']."' )";


if ($llamadoSQL = $conection->query($sql)) { //Ejecución mas compleja con retorno de dato de sql del procedure.
	/* obtener el array de objetos */
	while ($resultado = $llamadoSQL->fetch_row()) {
		echo $resultado[0]; //Retorna los resultados via post del procedure
	}
	/* liberar el conjunto de resultados */
	$llamadoSQL->close();
}else{echo '0';}



?>