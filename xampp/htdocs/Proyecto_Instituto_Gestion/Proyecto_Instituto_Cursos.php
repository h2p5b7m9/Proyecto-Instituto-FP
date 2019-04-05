<?php
// Ver UF1.AC01.HTML.docx.html
//Proyecto educativo:
// - Ciclos que se imparten (indicando si son de grado superior o medio)
// - Que módulos componen cada ciclo. 
//Buscar .php .html

include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<!DOCTYPE html>" . "\n";
echo "<html>" . "\n";
echo "<head>" . "\n";
echo "<TITLE>Gestión de Instituto IFP, Cursos</TITLE>" . "\n";
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

echo "<table border=0 style='width:55%' align=right cellpadding='5px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'><img src='Proyecto_Instituto_Imagenes/IFP.jpg'> </td> <!-- -->" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right>Logged in Usuario: " . $_SESSION['nombre'] . "\n"; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />" . "\n";
echo "<a href='salir.php'>Cerrar Sesión</a> <!-- Link a salir.php --> </p>" . "\n";
echo "</td> <!-- -->" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";
//echo "<p class='color_azul' align=right>Logged in Usuario: " . $_SESSION["nombre"] . "\n"; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
//echo "<br />" . "\n";
//echo "<a href='salir.php'>Cerrar Sesion</a> <!-- Link a salir.php --> </p>" . "\n";
//echo "<center><FONT size=3 COLOR='#0000FF'><img src='Proyecto_Instituto_Imagenes/IFP.jpg'> <!-- OJO img no se cierra. Imagen. -->" . "\n";


echo "<table border=0 style='width:75%' align=right cellpadding='5px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'> <center><FONT size=3 COLOR='#0000FF'><h2><b><u>Cursos</u></b></h2></FONT></center> </td> <!-- -->" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right> <a href='Proyecto_Instituto.php'>Inicio</a></p>" . "\n";
echo "</td> <!-- -->" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";


//echo "<br><br><br><br><center><FONT size=3 COLOR='#0000FF'><h2><b><u>Cursos</u></b></h2></FONT></center>" . "\n";
//echo "<font align=right><p><a href='Proyecto_Instituto.php'>Inicio</a></p></font>" . "\n";

echo "</head>" . "\n";

echo "<body>" . "\n";
echo "<p align=center margin-left=0px margin-right=0px><br><br><br><br><br><br><br><br><br><br><FONT COLOR=purple>iFP pone a tu disposición una completa oferta de ciclos formativos con titulación oficial adaptada a las necesidades del mercado y las empresas.<br>" . "\n";
echo "</FONT><br><br></p>" . "\n";

echo "<table class='table1' border=8 style='width:80%' align=center cellpadding='5px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td class='td1'><center><b><FONT size=3><a href='Proyecto_Instituto_Cursos_Comercio_Internacional.html'>COMERCIO INTERNACIONAL</a></FONT><BR><FONT size=1>GRADO SUPERIOR</FONT></b></center> <!-- -->" . "\n";
echo "</td>" . "\n";
echo "<td class='td1'><center><b><FONT size=3><a href='Proyecto_Instituto_Cursos_Transporte_y_Logística.html'>TRANSPORTE Y LOGÍSTICA</a></FONT><BR><FONT size=1>GRADO SUPERIOR</FONT></b></center> <!-- -->" . "\n";
echo "</td>" . "\n";
echo "<td class='td1'><br><center><b><FONT size=3><a href='Proyecto_Instituto_Cursos_Comercio_Internacional.html'>COMERCIO INTERNACIONAL</a> + <a href='Proyecto_Instituto_Cursos_Transporte_y_Logística.html'>TRANSPORTE Y LOGÍSTICA</a></FONT><BR><FONT size=1>DOBLE GRADO SUPERIOR</FONT></b></center><br> <!-- -->" . "\n";
echo "</td>" . "\n";
echo "<td class='td1'><center><b><FONT size=3><a href='Proyecto_Instituto_Cursos_Administración_y_Finanzas.html'>ADMINISTRACIÓN Y FINANZAS</a></FONT><BR><FONT size=1>GRADO SUPERIOR</FONT></b></center> <!-- -->" . "\n";
echo "</td>" . "\n";
echo "<td class='td1'><center><b><FONT size=3><a href='Proyecto_Instituto_Cursos_Sistemas_Microinformaticos_y_Redes.html'>SISTEMAS MICROINFORMÁTICOS Y REDES</a></FONT><BR><FONT size=1>GRADO MEDIO</FONT></b></center> <!-- -->" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "<tr>" . "\n";
echo "<td class='td1'><br><center><b><FONT size=3><a href='Proyecto_Instituto_Cursos_Desarrollo_de_Aplicaciones_Web.html'>DESARROLLO DE APLICACIONES WEB</a></FONT><BR><FONT size=1>GRADO SUPERIOR</FONT></b></center><br> <!-- -->" . "\n";
echo "</td>" . "\n";
echo "<td class='td1'><center><b><FONT size=3><a href='Proyecto_Instituto_Cursos_Desarrollo_de_Aplicaciones_Web.html'>DESARROLLO DE APLICACIONES WEB</a> + <a href='Proyecto_Instituto_Cursos_Desarrollo_de_Aplicaciones_Multiplataforma.html'>DESARROLLO DE APLICACIONES MULTIPLATAFORMA</a></FONT><BR><FONT size=1>DOBLE GRADO SUPERIOR</FONT></b></center> <!-- -->" . "\n";
echo "</td>" . "\n";
echo "<td class='td1'><center><b><FONT size=3><a href='Proyecto_Instituto_Cursos_Desarrollo_de_Aplicaciones_Multiplataforma.html'>DESARROLLO DE APLICACIONES MULTIPLATAFORMA</a></FONT><BR><FONT size=1>GRADO SUPERIOR</FONT></b></center> <!-- -->" . "\n";
echo "</td>" . "\n";
echo "<td class='td1'><center><b><FONT size=3><a href='Proyecto_Instituto_Cursos_Videojuegos_y_Ocio_Digital.html'>VIDEOJUEGOS Y OCIO DIGITAL</a></FONT><BR><FONT size=1>GRADO SUPERIOR</FONT></b></center> <!-- -->" . "\n";
echo "</td>" . "\n";
echo "<td class='td1'><center><b><FONT size=3><a href='Proyecto_Instituto_Cursos_Produccion_de_Audiovisuales.html'>PRODUCCION DE AUDIOVISUALES Y ESPECTACULOS ATRESMEDIA</a></FONT><BR><FONT size=1>GRADO SUPERIOR</FONT></b></center> <!-- -->" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

echo "<br><br>" . "\n";
echo "<br><br><br>" . "\n";
echo "<!-- p><h2><FONT COLOR=purple><b>Campus virtual</b></FONT><h2-->" . "\n";
echo "<p><FONT size=5 COLOR=purple><b>Campus virtual</b></FONT>" . "\n";
echo "</p>" . "\n";

echo "<p>" . "\n";
echo "<FONT size=3>La mejor herramienta del mercado para facilitar tu aprendizaje y accedas a los contenidos cuando y donde quieras.</FONT><br><br>" . "\n";
echo "</p>" . "\n";
echo "<center><img src='Proyecto_Instituto_Imagenes/Bienvenido al campus virtual.jpg'> <!-- OJO img no se cierra. Imagen. -->" . "\n";
echo "</center>" . "\n";

echo "<br><br><br><br><br><br><br>" . "\n";
echo "<center><FONT size=3>iFP 2019 ©" . "\n";
echo "<address><a href='mailto:ignaciomacipe@ifp.com'>ignaciomacipe@ifp.com</a></address>" . "\n";
echo "</FONT>" . "\n";
echo "</center>" . "\n";

echo "</body>" . "\n";
echo "</html>" . "\n";
