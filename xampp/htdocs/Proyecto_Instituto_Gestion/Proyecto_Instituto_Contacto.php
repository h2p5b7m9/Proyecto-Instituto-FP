<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
// Buscar session
// Ver UF1.AC01.HTML.docx.html
// Contacto
// Proyecto educativo
//Buscar .php .html .jpg Favicon
//Buscar header('Content-Type solo poner en hosting para acentos, en localhost no poner porque da error

include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<!DOCTYPE html>" . "\n";
echo "<html>" . "\n";
echo "<head>" . "\n";
header('Content-Type: text/html; charset=ISO-8859-1'); //En localhost van bien los acentos, pero el hosting 260mb.net no y necesita este header
echo "<title>Gestión de Instituto IFP - Contacto</title>" . "\n";
echo "<link rel='shortcut icon' href='Proyecto_Instituto_Imagenes/favicon.ico'>\n";
echo "<link rel='stylesheet' href='Proyecto_Instituto_CSS/Proyecto_Instituto_Estilos.css'>" . "\n";
echo "<style>" . "\n";
echo ".table1, th1, td1 {" . "\n";
echo "color: white;" . "\n";
echo "background-color: grey;" . "\n";
echo "}" . "\n";
echo ".p1 {" . "\n";
echo "margin-left:250px;" . "\n";
echo "margin-right:250px;" . "\n";
echo "}" . "\n";

echo ".ul1 {" . "\n";
echo "margin-left:680px;" . "\n";
echo "margin-right:250px;" . "\n";
echo "}" . "\n";

echo "</style>" . "\n";

echo "<table border=0 style='width:52%' align=right cellpadding='0px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'><img src='Proyecto_Instituto_Imagenes/IFP1.jpg'> </td>" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right>Logged in Usuario: " . $_SESSION['nombre'] . "\n"; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />" . "\n";
echo "<a href='salir.php'>Cerrar Sesión</a> </p>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

echo "<table border=0 style='width:78%' align=right cellpadding='0px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'> <center><FONT size=3 COLOR='#0000FF'><h2><b><u>Contacto</u></b></h2></FONT></center> </td>" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right> <a href='Proyecto_Instituto.php'>Inicio</a></p>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";
//echo "<center><FONT size=3 COLOR='#0000FF'><img src='Proyecto_Instituto_Imagenes/IFP1.jpg'> <!-- FONT size=3>2 -->" . "\n";
//echo "<h3><b><u>Contacto</u></b></h3></FONT></center>" . "\n";
//echo "<font align=right><p><a href='Proyecto_Instituto.html'>Inicio</a></p></font>" . "\n";
echo "</head>" . "\n";

echo "<body>" . "\n";
echo "<FONT COLOR='#800000'>" . "\n";
echo "<center><br><br><br><br><br><br><br><br><br>" . "\n";
echo "¿CÓMO TE PODEMOS AYUDAR?<br>" . "\n";
echo "Envíanos un mensaje a <address><a href='mailto:ignaciomacipe@ifp.com'>Ignacio Macipe</a></address><br> <!-- address mailto email italica -->" . "\n";
echo "<img src='Proyecto_Instituto_Imagenes/Email.png'>" . "\n";
echo "</center>" . "\n";
echo "<br>" . "\n";
echo "<hr><br>" . "\n";

echo "</FONT>" . "\n";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>" . "\n";
echo "<center><FONT size=3 color=red>iFP 2019 ©" . "\n";
echo "<address><a href='mailto:ignaciomacipe@ifp.com'>ignaciomacipe@ifp.com</a></address>" . "\n";
echo "</FONT>" . "\n";
echo "</center>" . "\n";

echo "</body>" . "\n";
echo "</html>" . "\n";
?>
