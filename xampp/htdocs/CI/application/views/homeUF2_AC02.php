<html>
   <!-- http://localhost/CI/index.php/controlUF2_AC02 -->
   <!-- Nombre de vistas empiezan por home porque son pagina inicial -->
   <head>
      <title>Control de los últimos modelos de terminales móviles Apple</title>
   </head>
   <body>
   <center>
   <img id="Apple" src="<?php echo base_url('Apple.jpg'); ?>" length=25px width=25px /> <!-- OJO img no se cierra. Imagen. -->
   <h1><FONT COLOR=blue size=4>Control de los últimos modelos de terminales móviles Apple</FONT></h1>
   <FONT COLOR=green size=3>
      <p>Listado de los últimos modelos de terminales móviles Apple</p>
   </FONT>
   <!-- img id="image1" src="<?php echo base_url('iPhone7.png'); ?>" length=100px width=100px /><br -->
   <!-- img id="image2" src="<?php echo base_url('iPhone7-2.png'); ?>" length=100px width=100px /><br -->
   <!-- img id="image3" src="<?php echo base_url('iPhone7-3.png'); ?>" length=100px width=100px /><br -->
   <!-- img id="image4" src="<?php echo base_url('iPhone7-4.png'); ?>" length=100px width=100px /><br -->

   <?php
      //echo "base_url = " . base_url() . "<br>";
      echo '<table border="6" bgcolor=magenta align="center" cellpadding="5" cellspacing="0">'; //Tabla
      echo '<th>Fotografía</th>'; //Table header cabecera
      echo '<th>Fecha de lanzamiento</th>';
      foreach ($rs_modelos->result() as $row) { //$datos_vista = array('rs_modelos' => $ListadoModelos) en ControlUF2_AC02.php
         echo '<tr bgcolor=pink align="center">';
         //echo "<td>" . $row->fotografia . "</td>";
         //echo "<td><a href='html002.html'><img id='image5' src=" . base_url($row->fotografia) . "  length=100px width=100px/></td>";
         echo "<td><a href='" . base_url() . "index.php/controlUF2_AC02?id=" .  $row->id . "' title='" .  $row->modelo . "' />" . 
         "<img id='image5' src=" . base_url($row->fotografia) . " length=100px width=100px/></td>"; // OJO a href Enlace link en misma pestaña ; title=Descripcion Emergente del enlace cuando pones el mouse encima  , / barra adelante;  Nombre de fichero de foto sin espacios
         //$a1 = 'base_url(' . "'" . base_url() . $row->fotografia . "');";
         //echo $a1;
         //echo '<td><img id="image5" src="' . $a1 . '" /></td>';
         echo "<td>" . $row->fecha_lanzamiento . "</td>";
         echo '</tr>';
      }
      echo '</table>';
      echo '<br>Número total de terminales móviles Apple: ' . $rs_modelos->num_rows();
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
      foreach ($rs_modelos->result() as $row) { //$datos_vista = array('rs_modelos' => $ListadoModelos) en ControlUF2_AC02.php
         echo '<tr bgcolor=pink>';
         echo "<td>" . $row->id . "</td>";
         echo "<td>" . $row->modelo . "</td>";
         echo "<td>" . $row->nombre . "</td>";
         echo "<td>" . $row->fecha_lanzamiento . "</td>";
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
