<?php 
session_start();
include_once "includes/GestionBD.new.class.php";
require("secure/hash.class.php");
$DBGestion = new GestionBD('AGENDAMIENTO');
	// Si la sesion no está activa y/o autenticada ingresa a este paso
	if (@$_SESSION["active"] != 2)
	{		
			@$usuario = (!empty($_POST["log"]))?  $_POST["log"] : "";
			@$password = (!empty($_POST["pwd"]))?  $_POST["pwd"] : "";
            if(@$usuario != ""){
				$password=Hash::calcSHA($password);	
				$sql="SELECT
						usuario.USUARIO,
						usuario.PERMISO,						
						usuario.CONTRASENA						
						FROM usuario WHERE USUARIO = '".$usuario."' and CONTRASENA ='".$password."' and ACTIVO = 'Y'";				
				$DBGestion->ConsultaArray($sql);
				$usuario_consulta=$DBGestion->datos;				
				foreach (@$usuario_consulta as $datos2){					
					$usuario=$datos2['USUARIO'];
					$password=$datos2['CONTRASENA'];
					$per=$datos2['PERMISO'];
					
				}								
					@$usu = $usuario;			
				if(@$usu != "" ){				
				    $_SESSION["username"] = $usu;
					$_SESSION["active"] = 2;
					$_SESSION["permiso"] = $per;
				
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
					// Registra sesion activa no autenticada y recarga "administrador.php" con las credenciales
				//	session_register("id");
				//	session_register("id");
					@$_SESSION["username"] =  $usu;
					@$_SESSION["active"] = 1;
				//	header('Location: administrador.php');	   
				}			
	}		
	// Si la sesion está activa y autenticada ingresa a este paso
	else{		
		// toma las variables de sesion y de edicion de contenidos
		@$usuario = $_SESSION["username"];
		@$per = $_SESSION["permiso"];			
		if(!empty($usuario)){
			if(@$usuario != ""){
				header('Location: plantas.php');	    
			}
		}
	}
?>
