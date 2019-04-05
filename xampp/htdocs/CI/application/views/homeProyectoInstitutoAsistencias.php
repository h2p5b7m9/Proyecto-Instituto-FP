<html>
   <!-- http://localhost/CI/index.php/controlProyectoInstitutoAsistencias -->
   <!-- Nombre de vistas empiezan por home porque son pagina inicial -->
   <head>
      <title>Control de asistencias de los alumnos</title>
   </head>
   <body>
   <center>
   <img id="Apple" src="<?php echo base_url('IFP.jpg'); ?>" length=125px width=125px /> <!-- OJO img no se cierra. Imagen. -->
   <h1><FONT COLOR=blue size=4>Control de asistencias de los alumnos</FONT></h1>
   <FONT COLOR=green size=3>
      <p>Listado de las asistencias de los alumnos por orden de fecha descendente</p>
   </FONT>
   <!-- img id="image1" src="<?php echo base_url('Alumno1.jpg'); ?>" length=100px width=100px /><br -->
   <!-- img id="image2" src="<?php echo base_url('Alumno2.jpg'); ?>" length=100px width=100px /><br -->
   <!-- img id="image3" src="<?php echo base_url('Alumno3.jpg'); ?>" length=100px width=100px /><br -->
   <!-- img id="image4" src="<?php echo base_url('Alumno4.jpg'); ?>" length=100px width=100px /><br -->

   <p align=right><a href="http://localhost/Proyecto_Instituto_Gestion/Proyecto_Instituto.php"><FONT size=4 color=green>Inicio</FONT></a></p> <!-- Enlace link mediante texto en la misma pestaña , Primero el link y despues el texto -->

   <?php
      //echo "base_url = " . base_url() . "<br>";
      echo '<table border="6" bgcolor=magenta align="center" cellpadding="5" cellspacing="0">'; //Tabla
      echo '<th>Fotografía</th>'; //Table header cabecera
      echo '<th>Nombre del alumno</th>';
      echo '<th>Fecha de asistencia a clase</th>';
      echo '<th>Hora de asistencia a clase</th>';
      foreach ($rs_modelos->result() as $row) { //$datos_vista = array('rs_modelos' => $ListaAsistencias) en ControlProyectoInstitutoAsistencias.php
         echo '<tr bgcolor=pink align="center">';
         //echo "<td>" . $row->fotografia . "</td>";
         //echo "<td><a href='html002.html'><img id='image5' src=" . base_url($row->fotografia) . "  length=100px width=100px/></td>";
         echo "<td><a href='" . base_url() . "index.php/controlProyectoInstitutoAsistencias?id_Asistencia=" .  $row->id_Asistencia . "' title='" .  $row->descripcion . "' />" . 
         "<img id='image5' src=" . base_url($row->fotografia) . " length=80px width=80px/></td>"; // OJO a href Enlace link en misma pestaña ; title=Descripcion Emergente del enlace cuando pones el mouse encima  , / barra adelante;  Nombre de fichero de foto sin espacios
         //$a1 = 'base_url(' . "'" . base_url() . $row->fotografia . "');";
         //echo $a1;
         //echo '<td><img id="image5" src="' . $a1 . '" /></td>';
         echo "<td>" . $row->nombreAlumno . "</td>";
         echo "<td>" . $row->fecha_Clase . "</td>";
         echo "<td>" . $row->hora_Clase . "</td>";
         echo '</tr>';
      }
      echo '</table>';
      echo '<br>Número total de asistencias: ' . $rs_modelos->num_rows();
   ?>

   <!-- FUNCIONA TABLE -->
   <!--
   <?php
      echo '<table border="6" bgcolor=magenta align="center" cellpadding="5" cellspacing="0">';
      echo '<th>Id</th>';
      echo '<th>Modelo</th>';
      echo '<th>Nombre</th>';
      echo '<th>Fecha de lanzamiento</th>';
      echo '<th>Descripción</th>';
      echo '<th>Precio (€)</th>';
      foreach ($rs_modelos->result() as $row) { //$datos_vista = array('rs_modelos' => $ListaAsistencias) en ControlProyectoInstitutoAsistencias.php
         echo '<tr bgcolor=pink>';
         echo "<td>" . $row->id . "</td>";
         echo "<td>" . $row->modelo . "</td>";
         echo "<td>" . $row->nombre . "</td>";
         echo "<td>" . $row->fecha_Clase . "</td>";
         echo "<td>" . $row->descripcion . "</td>";
         echo "<td>" . $row->precio . "</td>";
         echo '</tr>';
      }
      echo '</table>';
   ?>
   -->
   </center>
   </body>
</html>
