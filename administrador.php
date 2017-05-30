<?php 
session_start();
include_once "includes/GestionBD.new.class.php";
require("secure/hash.class.php");
$DBGestion = new GestionBD('AGENDAMIENTO');

@$usuario = (!empty($_POST["user"]))?  $_POST["user"] : "";
@$password = (!empty($_POST["password"]))?  $_POST["password"] : "";
if(@$usuario != ""){
	$password=Hash::calcSHA($password);	
	echo $sql="SELECT
			usuario.USUARIO,						
			usuario.CONTRASENA						
			FROM usuario WHERE USUARIO = '".$usuario."' and CONTRASENA ='".$password."' and ACTIVO = 'Y'";	
		
	$DBGestion->ConsultaArray($sql);
	$usuario_consulta=$DBGestion->datos;				
	foreach (@$usuario_consulta as $datos2){					
		$usuario2=$datos2['USUARIO'];
		$password=$datos2['CONTRASENA'];					
	}								
		@$usu = $usuario2;			
	if(@$usu != "" ){				
		$_SESSION["username"] = $usu;
		$_SESSION["active"]=2;				
		header("location:plantas.php");   
	}else{
		?>
			<script type="text/javascript">
			alert('Usuario y/o Password Incorrecto\n\t Intente nuevamente');
			window.location.href = 'index.html';
			</script>						
		<?php
	}		
}else{					
	?>
			<script type="text/javascript">
			alert('Usuario y/o Password Incorrecto\n\t Intente nuevamente');
			window.location.href = 'index.html';
			</script>						
		<?php
	}				
?>
