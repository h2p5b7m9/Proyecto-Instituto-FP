<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
// Contiene: index.php, control.php, sesion.php, archivo-protegido-1.php, archivo-protegido2.php, salir.php, Proyecto_Instituto.php
// Ver UF1.AC01.HTML.docx.html
// table
// Expande celda 3 columnas: <td colspan="3" bgcolor="#ffffff" Background color Blanco>  ,  colspan Celda que abarca varias columnas vs rowspan Celda que abarca varias filas , Va en td no en tr
// cellspacing > cellpadding
// address mailto email
// Buscar .html .php .jpg Favicon
//Buscar header('Content-Type solo poner en hosting para acentos, en localhost no poner porque da error

include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<!DOCTYPE html>\n";
echo "<html>" . "\n";
echo "<head>" . "\n";
echo "<meta charset='ISO-8859-1' />\n";
//echo "<meta charset='UTF-8' />\n";
header('Content-Type: text/html; charset=ISO-8859-1'); //En localhost van bien los acentos, pero el hosting 260mb.net no y necesita este header
echo "<title>Gestión interna - Instituto IFP</title>" . "\n";
echo "<link rel='shortcut icon' href='Proyecto_Instituto_Imagenes/favicon.ico'>\n";
echo "<link rel='stylesheet' href='Proyecto_Instituto_CSS/Proyecto_Instituto_Estilos.css'>" . "\n";
echo "</head>" . "\n";
echo "<body>" . "\n";
echo "<p class='color_azul' align=right>Logged in Usuario: " . $_SESSION["nombre"]; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />" . "\n";
echo "<a href='salir.php'>Cerrar Sesión</a> <!-- Link a salir.php --> </p>" . "\n";
echo "<br />" . "\n";
echo "<table border=6 width=80% height=80% align=center cellpadding='10px' cellspacing='2px' bgcolor='lightblue'> <!-- style='width:80%' hace lo mismo que width=80% Relativo , bgcolor=grey -->" . "\n";
echo "<tr> <!-- table row Fila 1 , bgcolor=grey -->" . "\n";
echo "<td colspan='3' bgcolor='teal'><center><FONT size=3><p><img src='Proyecto_Instituto_Imagenes/IFP.jpg'> <!-- OJO img no se cierra. Imagen. , colspan='3' expande celda 3 columnas , bgcolor color de Fondo como Background Azul --> </p></FONT></center></td>" . "\n";
echo "</tr>" . "\n";
echo "<tr>" . "\n";
echo "<td colspan='3' bgcolor='blue'><center><FONT size=2 class='color_marfil'><b>ES MÁS QUE FP</b></FONT></center></td> <!-- Linea 2 -->" . "\n";
echo "<!--td colspan='3'> <center><FONT size=2><img src='Proyecto_Instituto_Imagenes/Innovacion en FP.jpg'></FONT></center></td> <!-- Linea 2 -->" . "\n";
echo "</tr>" . "\n";
echo "<tr>" . "\n";
echo "<td>" . "\n";
echo "<UL> <!-- Menú de Navegación Lateral sin id. Ver Ejercicio Nuevo_01 UF1.AC01 Profe.html. UL Lista desordenada Unordered List. -->" . "\n";
echo "<LI><a href='Proyecto_Instituto.php'><FONT size=2 class='color_marron'>Inicio</FONT></a></LI> <!-- Linea 3 Col 1. Enlace link mediante texto en la misma pestaña , Primero el link y despues el texto -->" . "\n";
echo "<LI><a href='Proyecto_Instituto_Cursos_01.php'><FONT size=2 class='color_marron'>Cursos</FONT></a></LI> <!-- Linea 3 Col 1. Enlace link mediante texto en la misma pestaña -->" . "\n";
echo "<LI><a href='Proyecto_Instituto_Empresas_colaboradoras.php'><FONT size=2 class='color_marron'>Empresas colaboradoras</FONT></a></LI> <!-- Linea 3 Col 1. Enlace link mediante texto en la misma pestaña -->" . "\n";
echo "<LI><a href='Proyecto_Instituto_Equipo.php'><FONT size=2 class='color_marron'>Equipo</FONT></a></LI> <!-- Linea 3 Col 1. Enlace link mediante texto en la misma pestaña -->" . "\n";
echo "<LI><a href='Proyecto_Instituto_Metodologia.php'><FONT size=2 class='color_marron'>Metodología</FONT></a></LI> <!-- Linea 3 Col 1. Enlace link mediante texto en la misma pestaña -->" . "\n";
echo "<LI><a href='Proyecto_Instituto_Antiguos_Alumnos.php'><FONT size=2 class='color_marron'>Antiguos alumnos</FONT></a></LI> <!-- Linea 3 Col 1. Enlace link mediante texto en la misma pestaña -->" . "\n";
echo "<LI><a href='Proyecto_Instituto_Donde_estamos.php'><FONT size=2 class='color_marron'>Dónde estamos</FONT></a></LI> <!-- Linea 3 Col 1. Enlace link mediante texto en la misma pestaña -->" . "\n";
echo "<LI><a href='Proyecto_Instituto_Contacto.php'><FONT size=2 class='color_marron'>Contacto</FONT></a></LI> <!-- Linea 3 Col 1. Enlace link mediante texto en la misma pestaña -->" . "\n";
echo "<LI><a href='ProyectoProfesores_05.php'><FONT size=2 class='color_azul'>Gestión Profesores</FONT></a></LI> <!-- Linea 3 Col 1. Enlace link mediante texto en la misma pestaña -->" . "\n";
echo "<LI><a href='../CI/index.php/controlProyectoInstitutoAsistencias'><FONT size=2 class='color_azul'>Gestión Asistencias</FONT></a></LI> <!-- http://localhost/CI/index.php/controlProyectoInstitutoAsistencias ; Enlace link mediante texto en la misma pestaña -->" . "\n";
echo "</UL>" . "\n";
echo "<!-- br><center><img src='Proyecto_Instituto_Imagenes/MasQueFP.jpg'></center -->";
echo "<br><center><a href='https://twitter.com/search?q=%23MasQueFP'><img src='Proyecto_Instituto_Imagenes/MasQueFP.jpg'></a></center>" . "\n";
echo "</td>" . "\n";
echo "<td><p><FONT size=2 class='color_purpura'><center><b>Inicio</b></center></FONT></p> <!-- Linea 3 Col 2 -->" . "\n";
echo "<FONT size=2 class='color_purpura'><p><b>Conoce iFP</b></p>" . "\n";
echo "<p> iFP (Innovación en Formación Profesional) es un centro oficial de Formación Profesional de primer nivel, innovador, funcional y moderno.<br> <!-- Salto de linea. -->
           Ofrecemos una formación de calidad para formar auténticos profesionales combinando:<br>
             <UL>
              <LI>Metodología innovadora que complementa la formación básica curricular.<br></LI>
              <LI>Profesores expertos con experiencia profesional.<br></LI>
              <LI>La colaboración de las mejores empresas que enriquecen los contenidos y facilitan prácticas.<br><br></LI>
             </UL>
        </p>" . "\n";
echo "<p align=justify>" . "\n";
echo "<b>Instalaciones y equipamiento</b><br><br> <!-- b bold negrita -->" . "\n";
echo "Nuestro centro de formación se encuentra en el centro de Barcelona, junto a la estación de Sants, perfectamente comunicado por transporte público.<br>" . "\n";
echo "Inaugurado en Abril del 2015, contamos con instalaciones modernas, funcionales y dotadas de la tecnología y los recursos necesarios para facilitar tu aprendizaje y la realización de talleres prácticos.<br>" . "\n";
echo "</p>" . "\n";
echo "</FONT>" . "\n";
echo "</td>" . "\n";
echo "<td> <center> <!-- Linea 3 Col 3 -->" . "\n";
echo "<FONT size=2 class='color_marron'>" . "\n";
echo "<p> Llámanos<br><br> <!-- por Skype -->" . "\n";
echo "<a href='skype:YourSkypeName?900-494834'><img src='Proyecto_Instituto_Imagenes/Skype02.jpg' height='42' 5idth='32'> <!-- OJO img no se cierra. Imagen. --> <!-- Skype --> </a>" . "\n";
echo "<!-- a href='skype:YourSkypeName?900-494834'><img src='Proyecto_Instituto_Imagenes/Telefono2.jpg'> <!-- OJO img no se cierra. Imagen. --> <!-- Skype --> </a>" . "\n";
echo "<hr> <!-- Horizontal row , No cerrar -->" . "\n";
echo "Te llamamos<br>" . "\n";
echo "</p> </center>" . "\n";
echo "</FONT>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "<tr>" . "\n";
echo "<td colspan='3' bgcolor='blue'><center><FONT size=3 class='color_marfil'>iFP 2019 © <!-- colspan='3' expande celda 3 columnas --> <!-- Linea 4. Background bgcolor Fondo Verde. -->" . "\n";
echo "<address><a class='color_marfil' href='mailto:ignaciomacipe@ifp.com?subject=Consulta informativa sobre un curso'>ignaciomacipe@ifp.com</a></address> <!-- address mailto email italica -->" . "\n";
echo "</FONT>" . "\n";
echo "</center>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

echo "</body>" . "\n";
echo "</html>" . "\n";
?>
