<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
// Llamado por archivo-protegido-1.php y archivo-protegido2.php
// Usuario/password admin 1234
// Profe sesiones.zip / sesiones3
// Carpeta sesiones3 contiene: index.php, sesion.php, control.php, archivo-protegido-1.php, archivo-protegido2.php, salir.php
// OJO un php puro No permite <!-- Comentario --> antes del <?php
	//Borramos la sesión
	SESSION_START(); //OJO Tambien se pone en la pagina de cerrar sesion xq se usa SESSION_*
	SESSION_UNSET(); //OJO
	SESSION_DESTROY(); //OJO

	header("Location:index.php"); // header llama a otro php  ;  Vuelve a pagina inicial sin enviar parametro error=si  ;  envia encabezado sin formato HTTP
?>