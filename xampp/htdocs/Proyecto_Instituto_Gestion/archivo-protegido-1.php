<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
//Llamado por control.php
// Profe sesiones.zip / sesiones3
// Usuario admin 1234
// Contiene: index.php, control.php, sesion.php, archivo-protegido-1.php, archivo-protegido2.php, salir.php
// OJO un php puro No permite <!-- Comentario --> antes del <?php
//Buscar .php
	include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
	echo "Bienvenido " . $_SESSION["nombre"]; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
	echo "<br /><br />";
	echo "Estas en una pagina protegida";
	echo "<br /><br />";
	echo "<a href='archivo-protegido2.php'>Ir a la siguiente pagina protegida</a>"; // Link a archivo-protegido2.php
	echo "<br /><br />";
	echo "<a href='salir.php'>Cerrar Sesion</a>"; // Link a salir.php
?>
