<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
// Ver UF1.AC01.HTML.docx.html
// Enlaces a empresas colaboradoras y otros enlaces de interés.
//Buscar .php .html .jpg Favicon
//Buscar header('Content-Type solo poner en hosting para acentos, en localhost no poner porque da error

include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
header('Content-Type: text/html; charset=ISO-8859-1'); //En localhost van bien los acentos, pero el hosting 260mb.net no y necesita este header
echo "<TITLE>Gestión de Instituto IFP - Empresas colaboradoras</TITLE>";
echo "<link rel='shortcut icon' href='Proyecto_Instituto_Imagenes/favicon.ico'>\n";
echo "<link rel='stylesheet' href='Proyecto_Instituto_CSS/Proyecto_Instituto_Estilos.css'>" . "\n";
echo "<p class='color_azul' align=right>Logged in Usuario: " . $_SESSION["nombre"] . "\n"; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />" . "\n";
echo "<a href='salir.php'>Cerrar Sesion</a> <!-- Link a salir.php --> </p>" . "\n";
echo "<center><FONT size=4 color=purple><img src='Proyecto_Instituto_Imagenes/IFP.jpg'> <!-- OJO img no se cierra. Imagen. -->";
echo "<h3><b><u>Empresas colaboradoras</u></b></h3></FONT></center>";
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
echo "<p align=justify><FONT size=3 color=purple>El respaldo del Grupo Planeta nos permite contar con más de 600 acuerdos de colaboración con empresas de diferentes sectores.";
echo "Gracias a ello, sabemos cuáles son las necesidades de cada sector y qué se espera de los futuros profesionales que forma la escuela.</FONT></p>";

echo "<hr>";

echo "<FONT size=4 color=purple><p><b>Integración con empresas colaboradoras</b></p></FONT>";
echo "<UL>";
echo "<LI><a href='https://www.altran.com/es/es'>Altran</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='http://www.tecnocom.es'>Tecnocom</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.microsoft.com'>Microsoft</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.intel.es'>Intel</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.asepeyo.es'>Asepeyo</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='http://www.aptean.com/es'>Aptean</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='http://aventurapark.com'>Aventura Park</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.caprabo.com/es/home'>Caprabo</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.eroski.es'>Eroski</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='http://www.gcelsa.com'>Celsa Group</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.cirsa.com'>Cirsa</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.clece.es/es'>Clece</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.casadellibro.com'>Casa del libro</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='http://www.mutuamontanesa.es/web'>Mutua Montañesa</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.nortia.com'>Nortia</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://dkv.isalud.com'>DKV Seguros</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='http://www.fundacioaymaripuig.org'>Aymar i Puig</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.unilever.es'>Unilever</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='http://www.linde.es'>Linde</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='http://sports.sportium.es/es'>Sportium</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.pcbox.com'>PCBox</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.racc.es'>RACC</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.emagister.com'>Emagister</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='https://www.afflelou.es'>Alain Afflelou</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "<LI><a href='http://www.simon.es'>Simon</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "</UL>";

echo "<p>Otros enlaces de interés:<br>";
echo "<UL>";
echo "<LI><a href='https://www.infoempleo.com/empleo-it/sector-it'>Sector IT</a></LI> <!-- Enlace link mediante texto en la misma pestaña -->";
echo "</UL>";
echo "</p>";

echo "<center><FONT size=3 color=red>iFP 2019 ©";
echo "<address><a href='mailto:ignaciomacipe@ifp.com'>ignaciomacipe@ifp.com</a></address>";
echo "</FONT>";
echo "</center>";

echo "</body>";
echo "</html>";
