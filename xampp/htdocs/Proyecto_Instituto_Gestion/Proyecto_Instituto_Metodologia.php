<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
// Buscar session
// Ver UF1.AC01.HTML.docx.html
// Metodología
// Proyecto educativo
//Buscar .php .html .jpg Favicon
//Buscar header('Content-Type solo poner en hosting para acentos, en localhost no poner porque da error

include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<!DOCTYPE html>" . "\n";
echo "<html>" . "\n";
echo "<head>" . "\n";
header('Content-Type: text/html; charset=ISO-8859-1'); //En localhost van bien los acentos, pero el hosting 260mb.net no y necesita este header
echo "<title>Gestión de Instituto IFP, Metodología</title>" . "\n";
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

echo "<table border=0 style='width:52%' align=right cellpadding='0px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'><img src='Proyecto_Instituto_Imagenes/IFP1.jpg'> </td>" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right>Logged in Usuario: " . $_SESSION['nombre'] . "\n"; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />" . "\n";
echo "<a href='salir.php'>Cerrar Sesión</a> </p>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

echo "<table border=0 style='width:81%' align=right cellpadding='0px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'> <center><FONT size=3 COLOR='#0000FF'><h2><b><u>Metodología</u></b></h2></FONT></center> </td>" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right> <a href='Proyecto_Instituto.php'>Inicio</a></p>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";
//echo "<center><FONT size=3 COLOR='#0000FF'><img src='Proyecto_Instituto_Imagenes/IFP1.jpg'>" . "\n";
//echo "<h3><b><u>Metodología</u></b></h3></FONT></center>" . "\n";
//echo "<font align=right><p><a href='Proyecto_Instituto.php'>Inicio</a></p></font>" . "\n";

echo "</head>" . "\n";

echo "<body>" . "\n";

echo "<FONT COLOR=green>" . "\n";
echo "<p align=justify class='p1'><br><br><br><br><br><br><br><br><br>" . "\n";
echo "iFP (Innovación en Formación Profesional) es un centro oficial de Formación Profesional de primer nivel, innovador, funcional y moderno." . "\n";
echo "Ofrecemos una formación de calidad combinando una metodología innovadora, profesores expertos y la colaboración de las mejores empresas que enriquecen los contenidos y facilitan prácticas." . "\n";
echo "</p></FONT><br>" . "\n";

echo "<br>" . "\n";
echo "<FONT size=4 COLOR='#0000FF'><p align=center class='p1'><b>Sólo títulos oficiales</b></p></FONT>" . "\n";
echo "<FONT COLOR=green>" . "\n";
echo "<p align=justify class='p1'>" . "\n";
echo "Todos nuestros títulos son oficiales y tus titulaciones serán completamente válidas en todo el territorio nacional y reconocidas por la Unión Europea. Somos centro oficial autorizado de la Generalitat de Catalunya y centro oficial autorizado de la Comunidad de Madrid.<br>" . "\n";
echo "</p></FONT><br>" . "\n";

echo "<br>" . "\n";
echo "<FONT size=4 COLOR='#0000FF'><p align=center class='p1'><b>Evaluación continua</b></p></FONT>" . "\n";
echo "<FONT COLOR=green>" . "\n";
echo "<p align=justify class='p1'>" . "\n";
echo "Evaluación continua y progresiva: te permite ir aprobando tus asignaturas progresivamente. Todos los módulos que apruebes, quedarán reflejados en tu expediente académico sin necesidad de volver a cursarlos.<br>" . "\n";
echo "</p></FONT><br>" . "\n";

echo "<br>" . "\n";
echo "<FONT size=4 COLOR='#0000FF'><p align=center class='p1'><b>Seguimiento personalizado</b></p></FONT>" . "\n";
echo "<FONT COLOR=green>" . "\n";
echo "<p align=justify class='p1'>" . "\n";
echo "Identificamos tus capacidades y áreas de mejora con el fin de orientar y desarrollar todo tu potencial personal y profesional para la consecución de tus oportunidades laborales.<br>" . "\n";
echo "</p></FONT><br>" . "\n";

echo "<br>" . "\n";
echo "<FONT size=4 COLOR='#0000FF'><p align=center class='p1'><b>Educación en competencias e inglés</b></p></FONT>" . "\n";
echo "<FONT COLOR=green>" . "\n";
echo "<p align=justify class='p1'>" . "\n";
echo "A través de actividades online y sesiones presenciales adquirirás habilidades y aptitudes clave para tu vida personal y profesional (trabajo en equipo, comunicación, gestión del tiempo, creatividad, toma de decisión, inteligencia emocional, negociación, empatía y networking)." . "\n";
echo "Además recibirás + de 1000h de ingles online y con sesiones presenciales para que mejores y amplíes tu conocimiento de esta lengua.<br>" . "\n";
echo "</p></FONT><br>" . "\n";

echo "<br>" . "\n";
echo "<FONT size=4 COLOR='#0000FF'><p align=center class='p1'><b>Certificación MOS</b></p></FONT>" . "\n";
echo "<FONT COLOR=green>" . "\n";
echo "<p align=justify class='p1'>" . "\n";
echo "iFP es una Microsoft IT Academy - facilitamos acceso a una licencia de Office 365 para tus estudios y clases y materiales para que obtengas la certificación oficial MOS (Microsoft Office Specialist).<br>" . "\n";
echo "</p></FONT><br>" . "\n";

echo "<br>" . "\n";
echo "<FONT size=4 COLOR='#0000FF'><p align=center class='p1'><b>Profesorado en activo</b></p></FONT>" . "\n";
echo "<FONT COLOR=green>" . "\n";
echo "<p align=justify class='p1'>" . "\n";
echo "Las clases son impartidas por profesionales en activo de empresas con amplia experiencia y reconocimiento junto a nuestro equipo de más de 200 profesores expertos y cualificados.<br>" . "\n";
echo "</p></FONT><br>" . "\n";

echo "<br>" . "\n";
echo "<FONT size=4 COLOR='#0000FF'><p align=center class='p1'><b>Campus virtual</b></p></FONT>" . "\n";
echo "<FONT COLOR=green>" . "\n";
echo "<p align=justify class='p1'>" . "\n";
echo "Te facilitamos acceso 24/7 a los contenidos videoconferencias, prácticas, foros y pruebas de evaluación.<br>" . "\n";
echo "</p></FONT><br>" . "\n";

echo "<br>" . "\n";
echo "<FONT size=4 COLOR='#0000FF'><p align=center class='p1'><b>Integración con empresas</b></p></FONT>" . "\n";
echo "<FONT COLOR=green>" . "\n";
echo "<p align=justify class='p1'>" . "\n";
echo "Facilitamos y coordinamos la realización de prácticas obligatorias (FCT) con las más de 600 empresas con las que tenemos convenio y promovemos la realización de prácticas en las empresas.<br>" . "\n";
echo "</p></FONT><br>" . "\n";

echo "<br>" . "\n";
echo "<FONT size=4 COLOR='#0000FF'><p align=center class='p1'><b>Prácticas en empresas</b></p></FONT>" . "\n";
echo "<FONT COLOR=green>" . "\n";
echo "<p align=justify class='p1'>" . "\n";
echo "Promovemos y te facilitamos el acceso a todas las oportunidades profesionales de nuestra red de empresas colaboradoras.<br>" . "\n";
echo "</p></FONT><br>" . "\n";

echo "<br><br><br><br><br>" . "\n";
echo "<center><FONT size=3 color=red>iFP 2019 ©" . "\n";
echo "<address><a href='mailto:ignaciomacipe@ifp.com'>ignaciomacipe@ifp.com</a></address>" . "\n";
echo "</FONT>" . "\n";
echo "</center>" . "\n";

echo "</body>" . "\n";
echo "</html>" . "\n";
?>
