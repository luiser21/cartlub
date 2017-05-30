<?php 
header('Content-Type: text/html; charset=ISO-8859-1'); 
include_once "includes/GestionBD.new.class.php";
$DBGestion = new GestionBD('AGENDAMIENTO');	
session_start();
//imprimir($_POST);
if(isset($_POST['planta']) && $_POST['planta']=='del' && isset($_POST['id']) && @$_SESSION["username"]!==''){
	$sql="DELETE FROM PLANTA WHERE CODPLANTA=".$_POST['id'];		
	$DBGestion->Consulta($sql);
	echo 'Registro de Planta Eliminada..';
}
if(isset($_POST['planta']) && $_POST['planta']=='udp' && isset($_POST['id']) && @$_SESSION["username"]!==''){
	$sql="UPDATE PLANTA SET 
			NOMPLANTA='".$_POST['nomplanta']."',
			CODIGOEMPRESA='".$_POST['codempre']."',
			CONSECUTIVO='".$_POST['consecu']."'
		WHERE CODPLANTA=".$_POST['id'];		
	$DBGestion->Consulta($sql);
	echo 'Registro de Planta Actualizado..';
}
if(isset($_POST['planta']) && $_POST['planta']=='ins' && @$_SESSION["username"]!=='' && $_POST['nomplanta']!='' && $_POST['codempre']!=''){
	
	$sql="INSERT INTO PLANTA (NOMPLANTA,CODIGOEMPRESA,CONSECUTIVO) VALUES ('".$_POST['nomplanta']."','".$_POST['codempre']."','".$_POST['consecu']."')";
	$DBGestion->Consulta($sql);
	echo 'Planta Registrada..';
}
?>