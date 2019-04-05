<?php
// Ver UF1.AC01.HTML.docx.html
// Proyecto educativo:
// - Ciclos que se imparten (indicando si son de grado superior o medio)
// - Que módulos componen cada ciclo. 
// Buscar header('Content-Type solo poner en hosting para acentos, en localhost no poner porque da error
// Buscar .html .php .jpg Favicon

include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<!DOCTYPE html>\n";
echo "<html>\n";
echo "<head>\n";
header('Content-Type: text/html; charset=ISO-8859-1'); //En localhost van bien los acentos, pero el hosting 260mb.net no y necesita este header
echo "<title>Instituto IFP, Cursos</title>\n";
echo "<link rel='shortcut icon' href='Proyecto_Instituto_Imagenes/favicon.ico'>\n";
echo "<link rel='stylesheet' href='Proyecto_Instituto_CSS/Proyecto_Instituto_Estilos.css'>" . "\n";

echo "<style>\n";
echo "table1, th1, td1 {\n";
echo "color: white;\n";
echo "background-color: grey;\n";
echo "}\n";
echo "</style>\n";

echo "<table border=0 style='width:54%' align=right cellpadding='0px' cellspacing='0px'>\n";
echo "<tr>\n";
echo "<td bgcolor='#ffffff'><img src='Proyecto_Instituto_Imagenes/IFP.jpg'> </td>\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right>Logged in Usuario: " . trim($_SESSION['nombre']) . "\n"; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />\n";
echo "<a href='salir.php'>Cerrar Sesión</a> </p>\n";
echo "</td>\n";
echo "</tr>\n";
echo "</table>\n";

echo "<table border=0 style='width:75%' align=right cellpadding='0px' cellspacing='0px'>\n";
echo "<tr>\n";
echo "<td bgcolor='#ffffff'> <center><FONT size=3 COLOR='#0000FF'><h2><b><u>Cursos</u></b></h2></FONT></center> </td>\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right> <a href='Proyecto_Instituto.php'>Inicio</a></p>\n";
echo "</td>\n";
//echo "</tr>\n";
echo "</table>\n";

echo "</head>\n";
echo "<body>\n";

echo "<p><br><br><br><br><br><br><br><br><FONT size=5 COLOR=purple><center><b>PLAN DE ESTUDIOS</b></center></FONT><br><br>\n";

echo "<table class='table1' border=6 style='background-color: grey;width:30%' align=center cellpadding='5px' cellspacing='0px'>\n";
echo "<tr>\n";
echo "<td class='td1'><p><FONT size=4 color=blue><center><b>COMERCIO INTERNACIONAL</center></FONT></p>\n";
echo "</td>\n";
echo "</tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3 color=blue><center><b>PRIMER AÑO</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Gestión administrativa del comercio internacional</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Financiación internacional</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Gestión económica y financiera de la empresa</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Transporte internacional de mercancías</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Logística de almacenamiento</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Negociación internacional</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Inglés I</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Segunda lengua extranjera</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Formación y orientación laboral</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3 color=blue><center><b>SEGUNDO AÑO</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Gestión administrativa del comercio internacional</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Medios de pago internacionales</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Marketing internacional</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Sistema de información de mercados</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Comercio digital internacional</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Inglés II</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Segunda lengua extranjera</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>Proyecto de comercio internacional</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "  <tr>\n";
echo "    <td class='td1'><p><FONT size=3><center><b>FCT</center></FONT></p>\n";
echo "    </td>\n";
echo "  </tr>\n";
echo "</table>\n";

echo "<br><br>\n";
echo "<br><br><br>\n";
echo "<center><p><FONT size=5 COLOR=purple><b>Campus virtual</b></FONT></p>\n";
echo "<br><img src='Proyecto_Instituto_Imagenes/Bienvenido al campus virtual.jpg'>\n";
echo "<br><br>\n";
echo "<FONT size=3>La mejor herramienta del mercado para facilitar tu aprendizaje y accedas a los contenidos cuando y donde quieras.</FONT>\n";

echo "<br><br><br><br><br><br><br>\n";
echo " <FONT size=3>iFP 2019 ©\n";
echo " <address><a href='mailto:ignaciomacipe@ifp.com'>ignaciomacipe@ifp.com</a></address>\n";
echo "</FONT>\n";
echo "</center>\n";

echo "</body>\n";
echo "</html>\n";
?>
