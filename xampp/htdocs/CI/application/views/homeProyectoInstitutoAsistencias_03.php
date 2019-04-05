<?php
// http://localhost/CI/index.php/controlProyectoInstitutoAsistencias
// http://ignaciomacipe.260mb.net/CI/index.php/controlProyectoInstitutoAsistencias
// http://localhost/CI/index.php
//Copia de homeProyectoInstitutoAsistencias_01.php añadiendo session.

include("../Proyecto_Instituto_Gestion/sesion1.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
echo "<html>\n";
// Nombre de vistas empiezan por home porque son pagina inicial
// Recibe parametro de controlador
echo "<head>\n";
echo "<title>Control de asistencias de alumnos</title>\n";

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
//echo "<img id='Apple' src=" . base_url('IFP.jpg') . " length=125px width=125px />\n";
//echo "<h1><FONT COLOR=blue size=5>Control de asistencias de los alumnos</FONT></h1>\n";
/********
   <!-- FONT COLOR=green size=4 -->
      <!-- p>Id Alumno</p -->
   <!-- /FONT -->
   <!-- img id="image1" src="<?php echo base_url('Alumno1.jpg'); ?>" length=100px width=100px /><br -->
   <!-- img id="image2" src="<?php echo base_url('Alumno2.jpg'); ?>" length=100px width=100px /><br -->
   <!-- img id="image3" src="<?php echo base_url('Alumno3.jpg'); ?>" length=100px width=100px /><br -->
   <!-- img id="image4" src="<?php echo base_url('Alumno4.jpg'); ?>" length=100px width=100px /><br -->
****/
      //echo "base_url = " . base_url() . "<br>"; //Imprime base_url = http://localhost/CI/
      //echo "rs_parametro = " . $rs_parametro; // OJO Recibe parametro
      $array = array_values(array($rs_modelos->result())); //array_values — Devuelve todos los valores de un array
      //print_r ($array);
      //print_r ($array[0][0]);
      //print_r ($array[0][0]->id_Alumno);
      //print_r (array_search($rs_parametro, array_column($array[0], 'id_Asistencia')) . "PPP");
      //print_r ( $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->id_Alumno);
      //var_dump ($array);
      //foreach ($rs_modelos->result() as $row) { //$datos_vista = array('rs_modelos' => $ListadoModelos) en controlProyectoInstitutoAsistencias.php
         //if ($row->id == $rs_parametro){
            //echo "<FONT COLOR=green size=4><p>Asistencia del alumno " . $row->id_Alumno . "</p></FONT>\n";
            echo "<FONT COLOR=green size=4><p><br><br><br><br><br><br>Asistencia del alumno " . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->nombreAlumno . "<br><br></p></FONT>\n"; //  array_search(String_a_Buscar, Array)  ;  array_column(Array, Nombre_Campo_a_Buscar)
            echo "<table border='6' bgcolor=magenta align='center' cellpadding='5' cellspacing='0'>\n"; // Tabla con header y 1 sola linea de detalle
            echo "<th>Id Asistencia</th>\n"; //Table header cabecera
            echo "<th>Id Alumno</th>\n";
            echo "<th>Nombre del Alumno</th>\n";
            echo "<th>Fecha de clase</th>\n";
            echo "<th>Hora de clase</th>\n";
            echo "<th>Id UF</th>\n";
            echo "<th>Descripción</th>\n";
            echo "<tr bgcolor=pink align='center'\n>";
            //echo "<td>" . $row->id . "</td>\n";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->id_Asistencia . "</td>\n";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->id_Alumno . "</td>\n";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->nombreAlumno . "</td>\n";
            //echo "<td>" . $row->fecha_Clase . "</td>\n";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->fecha_Clase . "</td>\n";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->hora_Clase . "</td>\n";
            //echo "<td>" . $row->id_UF . "</td>\n";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->id_UF . "</td>\n";
            //echo "<td>" . $row->descripcion . "</td>\n";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->descripcion . "</td>\n";
            echo "</tr>\n";
            //$foto = $row->fotografia;
            $foto = $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->fotografia;
         //}
      //}
      echo "</table>\n";

      echo "<br><img id='image5' src=" . base_url($foto) . " length=175px width=175px />\n";

      // Link a pagina principal Volver index
      echo "<br><br><br><a href='" . base_url() . "index.php/controlProyectoInstitutoAsistencias' title='Volver a página principal' />Volver a página principal\n"; // Enlace link en la misma pestaña ; title=Descripcion Emergente del enlace cuando pones el mouse encima  , / barra adelante

echo "</center>\n";
echo "</body>\n";
echo "</html>\n";
?>
