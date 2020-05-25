<?php 

	
	require_once("php/pago.php");

	$obj =new Pago();
    $obj->alta("2","5000","2020-05-25","Transferencia","Bien");
	$res = $obj->consulta();
	while($fila = $res->fetch_assoc()){
		echo $fila["IDpago"]." ".$fila["sal"]." ".$fila["met_pag"]." ".$fila["des"]."<br>";
	}

 ?>