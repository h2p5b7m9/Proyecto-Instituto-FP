<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
// Buscar session
// Ver UF1.AC01.HTML.docx.html
// Dónde estamos
// Proyecto educativo
//Buscar .php .html .jpg Favicon
//Buscar header('Content-Type solo poner en hosting para acentos, en localhost no poner porque da error

include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<!DOCTYPE html>" . "\n";
echo "<html>" . "\n";
echo "<head>" . "\n";
header('Content-Type: text/html; charset=ISO-8859-1'); //En localhost van bien los acentos, pero el hosting 260mb.net no y necesita este header
echo "<title>Gestión de Instituto IFP, Dónde estamos</title>" . "\n";
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

//echo "<style>";
//echo "p {";
//echo "margin-left: 250px;";
//echo "margin-right: 250px;";
//echo "}";
//echo "li {";
//echo "margin-left: 250px;";
//echo "margin-right: 250px;";
//echo "}";
//echo "</style>";


echo "<table border=0 style='width:52%' align=right cellpadding='0px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'><img src='Proyecto_Instituto_Imagenes/IFP1.jpg'> </td>" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right>Logged in Usuario: " . $_SESSION['nombre'] . "\n"; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />" . "\n";
echo "<a href='salir.php'>Cerrar Sesión</a> </p>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

echo "<table border=0 style='width:83%' align=right cellpadding='0px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'> <center><FONT size=3 COLOR='#0000FF'><h2><b><u>Dónde estamos</u></b></h2></FONT></center> </td>" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right> <a href='Proyecto_Instituto.php'>Inicio</a></p>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

//echo "<center><FONT size=3 COLOR='#0000FF'><img src='Proyecto_Instituto_Imagenes/IFP1.jpg'>";
//echo "<h2><b><u>Dónde estamos</u></b></h2></FONT></center>";
//echo "<font align=right><p><a href='Proyecto_Instituto.html'>Inicio</a></p></font>";

echo "</head>" . "\n";


echo "<body>" . "\n";
echo "<FONT color=purple>" . "\n";
echo "<br><br><br><br><br><br><br><br><br><br>" . "\n";
echo "<p class='p1' align=justify>" . "\n";
echo "Nuestro centro de formación se encuentra en el centro de Barcelona, junto a la estación de Sants, perfectamente comunicado por transporte público. Inaugurado en Abril del 2015, contamos con instalaciones modernas, funcionales y dotadas de la más moderna tecnología y los recursos necesarios para facilitar tu aprendizaje y la realización de talleres prácticos.<br>" . "\n";
echo "</p><br>" . "\n";

echo "<center><FONT size=4 COLOR='#0000FF'>" . "\n";
echo "CENTROS PRESENCIALES" . "\n";
echo "</FONT></center><br>" . "\n";

echo "<table border=11 width=80% align=center cellpadding='5px' cellspacing='0px'> <!-- cellspacing > cellpadding , width=80% Relativo -->" . "\n";
echo "<tr>" . "\n";
echo "<td><center><img src='Proyecto_Instituto_Imagenes/Mapa ifp Madrid.jpg'><br><FONT size=3><br>C/Julián Camarillo, 6a<br>28037 Madrid<br>Tel. 911992560<br>9am - 9pm<br>lunes - viernes</FONT></center>" . "\n";
echo "</td>" . "\n";
echo "<td><br><center><img src='Proyecto_Instituto_Imagenes/Mapa ifp Hospitalet.jpg'><br><FONT size=3><br>Avda. Josep Tarradellas i Joan 171 - 177 L'Hospitalet de Llobregat<br>08901 Barcelona<br>Tel. 932912700<br>9am - 9pm<br>lunes - viernes</FONT></center><br>" . "\n";
echo "</td>" . "\n";
echo "<td><center><img src='Proyecto_Instituto_Imagenes/Mapa ifp Llançà.jpg'><br><FONT size=3><br>Carrer de Llança, 51<br>08015 Barcelona<br>Tel. 932812360<br>9am - 9pm<br>lunes - viernes</FONT></center>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

echo "<br>" . "\n";
echo "<p align=center><b>Localización:</b>" . "\n";
echo "<UL class='ul1'>" . "\n";
echo "<LI><a href='https://www.google.com/maps?q=41.3805,2.1445'>Localización en Google Maps</a></LI>" . "\n";
echo "<LI><a href='https://www.ifp.es/instalaciones'>Instalaciones</a></LI>" . "\n";
echo "</UL></p>" . "\n";
echo "</FONT>" . "\n";

echo "<br><br><br><br><br><br><br><br><br><br>" . "\n";
echo "<center><FONT size=3 color=red>iFP 2019 ©" . "\n";
echo "<address><a href='mailto:ignaciomacipe@ifp.com'>ignaciomacipe@ifp.com</a></address>" . "\n";
echo "</FONT>" . "\n";
echo "</center>" . "\n";

echo "</body>" . "\n";
echo "</html>" . "\n";
?>
