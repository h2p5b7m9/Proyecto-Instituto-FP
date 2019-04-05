<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
// Ver UF1.AC01.HTML.docx.html
// Equipo o Miembros del centro (Profesores, Jefe de estudios, Director, Secretaria,…)
//Buscar .php .html .jpg Favicon
//Buscar header('Content-Type solo poner en hosting para acentos, en localhost no poner porque da error

include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<!DOCTYPE html>" . "\n";
echo "<html>" . "\n";
echo "<head>" . "\n";
header('Content-Type: text/html; charset=ISO-8859-1'); //En localhost van bien los acentos, pero el hosting 260mb.net no y necesita este header
echo "<TITLE>Gestión de Instituto IFP - Miembros del equipo del centro</TITLE>" . "\n";
echo "<link rel='shortcut icon' href='Proyecto_Instituto_Imagenes/favicon.ico'>\n";
echo "<link rel='stylesheet' href='Proyecto_Instituto_CSS/Proyecto_Instituto_Estilos.css'>" . "\n";
echo "<p class='color_azul' align=right>Logged in Usuario: " . $_SESSION["nombre"] . "\n"; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />" . "\n";
echo "<a href='salir.php'>Cerrar Sesión</a> <!-- Link a salir.php --> </p>" . "\n";
echo "<center><FONT size=3><img src='Proyecto_Instituto_Imagenes/IFP.jpg'> <!-- OJO img no se cierra. Imagen. -->";
echo "<FONT color=purple>";
echo "<h3><b><u>Miembros del equipo del centro</u></b></h3></FONT></center>";
echo "</FONT>";
echo "<font align=right><p><a href='Proyecto_Instituto.php'>Inicio</a></p></font>";

echo "<style>";
echo "p {";
echo "margin-left: 250px;";
echo "margin-right: 250px;";
echo "}";
echo "li {";
echo "margin-left: 250px;";
echo "margin-right: 250px;";
echo "}";
echo "</style>";
echo "</head>";

echo "<body>";
echo "<FONT color=purple>";
echo "<p>PROFESORES DESTACADOS</p>";
echo "<center><img src='Proyecto_Instituto_Imagenes/Profesores destacados.jpg'></center> <!-- OJO img no se cierra. Imagen. -->";
echo "<p>Profesores:</p>";
echo "<UL>";
echo "<LI>Jorge Peris</LI>";
echo "<LI>Jose María Izquierdo</LI>";
echo "<LI>Joaquín Arenós</LI>";
echo "<LI>Martin Valentí Rechter</LI>";
echo "<LI>Jorge Bardou</LI>";
echo "<LI>Felipe Minanbres</LI>";
echo "</UL>";

echo "<hr>";
echo "<p>Jefe de estudios:</p>";
echo "<UL>";
echo "<LI>Jose Carcedo</LI>";
echo "<LI>Marta Posa (adjunta)</LI>";
echo "</UL>";
echo "<hr>";

echo "<p>Director: Mario Pascual Henares</p>";
echo "<hr>";
echo "<p>Secretarias:</p>";
echo "<UL>";
echo "<LI>Sonia Ramon (Estudios)</LI>";
echo "<LI>Luis Funes (Dirección)</LI>";
echo "</UL>";

echo "</FONT>";

echo "<center><FONT size=3 color=red>iFP 2019 ©";
echo "<address><a href='mailto:ignaciomacipe@ifp.com'>ignaciomacipe@ifp.com</a></address>";
echo "</FONT>";
echo "</center>";

echo "</body>";
echo "</html>";
?>
