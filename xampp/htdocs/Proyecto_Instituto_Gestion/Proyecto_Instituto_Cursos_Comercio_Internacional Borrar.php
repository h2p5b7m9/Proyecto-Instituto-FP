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
//echo "<link rel='stylesheet' href='Proyecto_Instituto_CSS/Proyecto_Instituto_Estilos.css'>\n";

echo "<style>\n";
echo "table1, th1, td1 {\n";
echo "color: white;\n";
echo "background-color: grey;\n";
echo "}\n";
echo "</style>\n";

echo "<table class='table1' border=6 align=center cellpadding='5px' cellspacing='0px'>\n";
echo "<tr>\n";
echo "<td class='td1'><p><FONT size=4 color=yellow><center><b>COMERCIO INTERNACIONAL</center></FONT></p>\n";
echo "</td>\n";
echo "</tr>\n";
echo "</table>\n";

echo "</head>\n";
echo "</html>\n";
?>
