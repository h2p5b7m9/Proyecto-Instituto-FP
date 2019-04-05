<html>
   <!-- http://localhost/CI/index.php/controlProyectoInstitutoAsistencias -->
   <!-- Nombre de vistas empiezan por home porque son pagina inicial -->
   <!-- Recibe parametro de controlador -->
   <head>
      <title>Control de asistencias de alumnos</title>
   </head>
   <body>
   <center>
   <img id="Apple" src="<?php echo base_url('IFP.jpg'); ?>" length=125px width=125px /> <!-- OJO img no se cierra. Imagen. -->
   <h1><FONT COLOR=blue size=5>Control de asistencias de alumnos</FONT></h1>
   <!-- FONT COLOR=green size=4 -->
      <!-- p>Id Alumno</p -->
   <!-- /FONT -->
   <!-- img id="image1" src="<?php echo base_url('Alumno1.jpg'); ?>" length=100px width=100px /><br -->
   <!-- img id="image2" src="<?php echo base_url('Alumno2.jpg'); ?>" length=100px width=100px /><br -->
   <!-- img id="image3" src="<?php echo base_url('Alumno3.jpg'); ?>" length=100px width=100px /><br -->
   <!-- img id="image4" src="<?php echo base_url('Alumno4.jpg'); ?>" length=100px width=100px /><br -->

   <?php
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
            //echo "<FONT COLOR=green size=4><p>Asistencia del alumno " . $row->id_Alumno . "</p></FONT>";
            echo "<FONT COLOR=green size=4><p>Asistencia del alumno " . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->nombreAlumno . "</p></FONT>"; //  ; array_search(String_a_Buscar, Array)  ;  array_column(Array, Nombre_Campo_a_Buscar)
            echo '<table border="6" bgcolor=magenta align="center" cellpadding="5" cellspacing="0">'; // Tabla con header y 1 sola linea de detalle
            echo '<th>Id Asistencia</th>'; //Table header cabecera
            echo '<th>Id Alumno</th>';
            echo '<th>Nombre del Alumno</th>';
            echo '<th>Fecha de clase</th>';
            echo '<th>Hora de clase</th>';
            echo '<th>Id UF</th>';
            echo '<th>Descripción</th>';
            echo '<tr bgcolor=pink align="center">';
            //echo "<td>" . $row->id . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->id_Asistencia . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->id_Alumno . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->nombreAlumno . "</td>";
            //echo "<td>" . $row->fecha_Clase . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->fecha_Clase . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->hora_Clase . "</td>";
            //echo "<td>" . $row->id_UF . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->id_UF . "</td>";
            //echo "<td>" . $row->descripcion . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->descripcion . "</td>";
            echo '</tr>';
            //$foto = $row->fotografia;
            $foto = $array[0][array_search($rs_parametro, array_column($array[0], 'id_Asistencia'))]->fotografia;
         //}
      //}
      echo '</table>';

      echo "<br><img id='image5' src=" . base_url($foto) . " length=175px width=175px />";

      // Link a pagina principal Volver index
      echo "<br><br><br><a href='" . base_url() . "index.php/controlProyectoInstitutoAsistencias' title='Volver a página principal' />Volver a página principal"; // Enlace link en la misma pestaña ; title=Descripcion Emergente del enlace cuando pones el mouse encima  , / barra adelante
   ?>

   </center>
   </body>
</html>
