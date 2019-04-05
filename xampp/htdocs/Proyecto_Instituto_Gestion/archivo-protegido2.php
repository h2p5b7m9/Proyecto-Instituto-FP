<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
//Llamado por archivo-protegido-1.php
// Profe sesiones.zip / sesiones3
// Usuario admin 1234
// Contiene: index.php, control.php, sesion.php, archivo-protegido-1.php, archivo-protegido2.php, salir.php
// OJO un php puro No permite <!-- Comentario --> antes del <?php
//Buscar .php
	include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php
	echo "Bienvenido " . $_SESSION["nombre"]; //Muestra session nombre guardado en control.php
	echo "<br /><br />";
	echo "Estas en una pagina protegida Numero2";
	echo "<br /><br />";
	echo "<a href='archivo-protegido-1.php'>Ir a la primera pagina protegida</a>"; // Link a archivo-protegido-1.php
	echo "<br /><br />";
	echo "<a href='salir.php'>Cerrar Sesion</a>"; // Link a salir.php
?>
