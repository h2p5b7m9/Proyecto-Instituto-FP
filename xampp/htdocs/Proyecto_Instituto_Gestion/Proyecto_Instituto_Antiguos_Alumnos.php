<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
// Buscar session
// Ver UF1.AC01.HTML.docx.html
// Página de Antiguos Alumnos con fotografías de los mismos.
// Proyecto educativo
//Buscar .php .html .jpg Favicon
//Buscar header('Content-Type solo poner en hosting para acentos, en localhost no poner porque da error

include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<!DOCTYPE html>" . "\n";
echo "<html>" . "\n";
echo "<head>" . "\n";
header('Content-Type: text/html; charset=ISO-8859-1'); //En localhost van bien los acentos, pero el hosting 260mb.net no y necesita este header
echo "<title>Gestión de Instituto IFP, Antiguos Alumnos</title>" . "\n";
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
echo "</style>" . "\n";

echo "<table border=0 style='width:53%' align=right cellpadding='0px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'><img src='Proyecto_Instituto_Imagenes/IFP1.jpg'> </td>" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right>Logged in Usuario: " . trim($_SESSION['nombre']) . "\n"; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />" . "\n";
echo "<a href='salir.php'>Cerrar Sesión</a> </p>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

echo "<table border=0 style='width:77%' align=right cellpadding='0px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'> <center><FONT size=3 COLOR='#0000FF'><h2><b><u>Alumni</u></b></h2></FONT></center> </td>" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right> <a href='Proyecto_Instituto.php'>Inicio</a></p>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

//echo "<center><img src='Proyecto_Instituto_Imagenes/IFP1.jpg'><br>" . "\n";
//echo "<img src='Proyecto_Instituto_Imagenes/The Alumni.jpg'><br>" . "\n";

echo "<center><img src='Proyecto_Instituto_Imagenes/Alumni.jpg'>" . "\n";
echo "</center><br>" . "\n";
//echo "<font align=right><p><a href='Proyecto_Instituto.html'>Inicio</a></p></font>" . "\n";

//echo "<style>" . "\n";
//echo "p {" . "\n";
//echo "margin-left: 250px;" . "\n";
//echo "margin-right: 250px;" . "\n";
//echo "}" . "\n";
//echo "img {" . "\n";
//echo "margin-left: 200px;" . "\n";
//echo "margin-right: 300px;" . "\n";
//echo "}" . "\n";
//echo "</style>" . "\n";

echo "</head>" . "\n";

echo "<body>" . "\n";
echo "<FONT COLOR='#800000'>" . "\n";
echo "<p align=justify class='p1'> iFP Alumni se creó en 2017 para servir a la comunidad de alumnos de la escuela, una extensa red de ex participantes que mantienen activamente sus relaciones con la institución y con sus compañeros. Desde la fundación de la escuela, la red ha crecido continuamente y se enorgullece de contar actualmente con más de 120.000 alumnos, de más de 17 nacionalidades, que han pasado por nuestras aulas.</p><br>" . "\n";
echo "</FONT><br>" . "\n";

echo "<center>" . "\n";
echo "<img src='Proyecto_Instituto_Imagenes/Alumnos IFP.jpg' Width=600 Height=500><br><br><br>" . "\n";
echo "<img src='Proyecto_Instituto_Imagenes/Alumnos.jpg' Width=1000 Height=300><br><br><br>" . "\n";
echo "<img src='Proyecto_Instituto_Imagenes/Alumnos1.jpg' Width=1000 Height=300><br>" . "\n";

echo "<br><br><br><br><br><br><br><br><br><br><br><br>" . "\n";
echo "<FONT size=3 color=red>iFP 2019 ©" . "\n";
echo "<address><a href='mailto:ignaciomacipe@ifp.com'>ignaciomacipe@ifp.com</a></address> <!-- email italica -->" . "\n";
echo "</FONT>" . "\n";
echo "</center>" . "\n";

echo "</body>" . "\n";
echo "</html>" . "\n";
