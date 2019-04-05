<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
//Llamado por archivo-protegido-1.php y archivo-protegido2-1.php
// Profe sesiones.zip / sesiones3
// Usuario/password admin 1234
// Carpeta sesiones3 contiene: index.php, control.php, sesion.php, archivo-protegido-1.php, archivo-protegido2.php, salir.php
// OJO un php puro No permite <!-- Comentario --> antes del <?php
	SESSION_START(); // Antes de cualquier session

	IF(!$_SESSION["autentificado"]) { // Se setea en control.php  ;  No autentificado  ;  $_SESSION["nombre_cualquiera"]
		header("Location: index.php"); // header Llama a otro php ; Vuelve a pagina inicial sin enviar parametro ?error=si ; envia encabezado sin formato HTTP
		echo "No autentificado<br>";
	}
?>