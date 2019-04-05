<?php
//Copia de homeProyectoInstitutoAsistencias.php añadiendo session.
//Buscar session

include("../Proyecto_Instituto_Gestion/sesion1.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<html>\n";
echo "<!-- http://localhost/CI/index.php/controlProyectoInstitutoAsistencias -->"; //http://ignaciomacipe.260mb.net/CI/index.php/controlProyectoInstitutoAsistencias
echo "<!-- Nombre de vistas empiezan por home porque son pagina inicial -->";
echo "<head>\n";
echo "<title>Control de asistencias de los alumnos</title>\n";
echo "<link rel='stylesheet' href='Proyecto_Instituto_CSS/Proyecto_Instituto_Estilos.css'>" . "\n";

echo "<table border=0 style='width:54%' align=right cellpadding='0px' cellspacing='0px'>" . "\n";
echo "<tr>\n";
echo "<td bgcolor='#ffffff'><img id='Apple' src=" . base_url('IFP.jpg') . " length=125px width=125px> </td>\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right>Logged in Usuario: " . $_SESSION['nombre'] . "\n"; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />" . "\n";
echo "<a href='http://localhost/Proyecto_Instituto_Gestion/salir.php'>Cerrar Sesión</a> </p>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

echo "<table border=0 style='width:93%' align=right cellpadding='0px' cellspacing='0px'>" . "\n";
echo "<tr>" . "\n";
echo "<td bgcolor='#ffffff'> <center><FONT size=4 COLOR=blue><h2><b><u>Control de asistencias de los alumnos</u></b></h2></FONT></center> </td>" . "\n";
echo "<td bgcolor='#ffffff'> <p class='color_azul' align=right> <a href='http://localhost/Proyecto_Instituto_Gestion/Proyecto_Instituto.php'>Inicio</a></p>" . "\n";
echo "</td>" . "\n";
echo "</tr>" . "\n";
echo "</table>" . "\n";

echo "</head>\n";
echo "<body>\n";
echo "<center>\n";
echo "<FONT COLOR=green size=3>\n";
echo "<p><br><br><br><br><br><br>Listado de las asistencias de los alumnos por orden de fecha descendente<br><br><br></p>\n";
echo "</FONT>\n";
echo "<!-- img id='image1' src=base_url('Alumno1.jpg') length=100px width=100px /><br -->\n";
echo "<!-- img id='image2' src=base_url('Alumno2.jpg') length=100px width=100px /><br -->\n";
echo "<!-- img id='image3' src=base_url('Alumno3.jpg') length=100px width=100px /><br -->\n";
echo "<!-- img id='image4' src=base_url('Alumno4.jpg') length=100px width=100px /><br -->\n";

echo "<!-- p align=right><a href='http://localhost/Proyecto_Instituto_Gestion/Proyecto_Instituto.php'><FONT size=4 color=green>Inicio</FONT></a></p -->\n";

      //echo "base_url = " . base_url() . "<br>";
      echo "<table border='6' bgcolor=magenta align='center' cellpadding='5' cellspacing='0'>\n"; //Tabla
      echo "<th>Fotografía</th>\n"; //Table header cabecera
      echo "<th>Nombre del alumno</th>\n";
      echo "<th>Fecha de asistencia a clase</th>\n";
      echo "<th>Hora de asistencia a clase</th>\n";
      foreach ($rs_modelos->result() as $row) { //$datos_vista = array('rs_modelos' => $ListaAsistencias) en ControlProyectoInstitutoAsistencias.php
         echo "<tr bgcolor=pink align='center'>\n";
         //echo "<td>" . $row->fotografia . "</td>\n";
         //echo "<td><a href='html002.html'><img id='image5' src=" . base_url($row->fotografia) . "  length=100px width=100px/></td>";
         echo "<td><a href='" . base_url() . "index.php/controlProyectoInstitutoAsistencias?id_Asistencia=" .  $row->id_Asistencia . "' title='" .  $row->descripcion . "' />" . 
         "<img id='image5' src=" . base_url($row->fotografia) . " length=80px width=80px/></td>\n"; // OJO a href Enlace link en misma pestaña ; title=Descripcion Emergente del enlace cuando pones el mouse encima  , / barra adelante;  Nombre de fichero de foto sin espacios
         //$a1 = 'base_url(' . "'" . base_url() . $row->fotografia . "');";
         //echo $a1;
         //echo "<td><img id='image5' src='" . $a1 . "' /></td>";
         echo "<td>" . $row->nombreAlumno . "</td>\n";
         echo "<td>" . $row->fecha_Clase . "</td>\n";
         echo "<td>" . $row->hora_Clase . "</td>\n";
         echo "</tr>\n";
      }
      echo "</table>\n";
      echo "<br>Número total de asistencias: " . $rs_modelos->num_rows() . "\n";

    echo "<!-- FUNCIONA TABLE -->\n";
    /*******
      echo "<table border='6' bgcolor=magenta align='center' cellpadding='5' cellspacing='0'>\n";
      echo "<th>Id</th>\n";
      echo "<th>Modelo</th>\n";
      echo "<th>Nombre</th>\n";
      echo "<th>Fecha de lanzamiento</th>\n";
      echo "<th>Descripción</th>\n";
      echo "<th>Precio (€)</th>\n";
      foreach ($rs_modelos->result() as $row) { //$datos_vista = array('rs_modelos' => $ListaAsistencias) en ControlProyectoInstitutoAsistencias.php
         echo "<tr bgcolor=pink>\n";
         echo "<td>" . $row->id . "</td>\n";
         echo "<td>" . $row->modelo . "</td>\n";
         echo "<td>" . $row->nombre . "</td>\n";
         echo "<td>" . $row->fecha_Clase . "</td>\n";
         echo "<td>" . $row->descripcion . "</td>\n";
         echo "<td>" . $row->precio . "</td>\n";
         echo "</tr>\n";
      }
      echo "</table>\n";
   *******/
echo "</center>\n";
echo "</body>\n";
echo "</html>\n";
?>
