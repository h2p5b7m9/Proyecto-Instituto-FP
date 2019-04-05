<html>
   <!-- http://localhost/CI/index.php/controlUF2_AC02 -->
   <!-- Nombre de vistas empiezan por home porque son pagina inicial -->
   <!-- Recibe parametro de controlador -->
   <head>
      <title>Control de modelos de terminales móviles Apple</title>
   </head>
   <body>
   <center>
   <img id="Apple" src="<?php echo base_url('Apple.jpg'); ?>" length=50px width=50px /> <!-- OJO img no se cierra. Imagen. -->
   <h1><FONT COLOR=blue size=5>Control de modelos de terminales móviles Apple</FONT></h1>
   <!-- FONT COLOR=green size=4 -->
      <!-- p>Modelo de terminal móvil</p -->
   <!-- /FONT -->
   <!-- img id="image1" src="<?php echo base_url('iPhone7.png'); ?>" length=100px width=100px /><br -->
   <!-- img id="image2" src="<?php echo base_url('iPhone7-2.png'); ?>" length=100px width=100px /><br -->
   <!-- img id="image3" src="<?php echo base_url('iPhone7-3.png'); ?>" length=100px width=100px /><br -->
   <!-- img id="image4" src="<?php echo base_url('iPhone7-4.png'); ?>" length=100px width=100px /><br -->

   <?php
      //echo "base_url = " . base_url() . "<br>"; //Imprime base_url = http://localhost/CI/
      //echo "rs_parametro = " . $rs_parametro; // OJO Recibe parametro
      $array = array_values(array($rs_modelos->result())); //array_values — Devuelve todos los valores de un array
      //print_r ($array);
      //print_r ($array[0][0]);
      //print_r ($array[0][0]->modelo);
      //print_r (array_search($rs_parametro, array_column($array[0], 'id')) . "PPP");
      //print_r ( $array[0][array_search($rs_parametro, array_column($array[0], 'id'))]->modelo);
      //var_dump ($array);
      //foreach ($rs_modelos->result() as $row) { //$datos_vista = array('rs_modelos' => $ListadoModelos) en ControlUF2_AC02.php
         //if ($row->id == $rs_parametro){
            //echo "<FONT COLOR=green size=4><p>Modelo de terminal móvil " . $row->modelo . "</p></FONT>";
            echo "<FONT COLOR=green size=4><p>Modelo de terminal móvil " . $array[0][array_search($rs_parametro, array_column($array[0], 'id'))]->modelo . "</p></FONT>"; //  ; array_search(String_a_Buscar, Array)  ;  array_column(Array, Nombre_Campo_a_Buscar)
            echo '<table border="6" bgcolor=magenta align="center" cellpadding="5" cellspacing="0">'; // Tabla con header y 1 sola linea de detalle
            echo '<th>Id</th>'; //Table header cabecera
            echo '<th>Modelo</th>';
            echo '<th>Nombre</th>';
            echo '<th>Fecha de lanzamiento</th>';
            echo '<th>Descripción</th>';
            echo '<th>Precio (€)</th>';
            echo '<tr bgcolor=pink align="center">';
            //echo "<td>" . $row->id . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id'))]->id . "</td>";
            //echo "<td>" . $row->modelo . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id'))]->modelo . "</td>";
            //echo "<td>" . $row->nombre . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id'))]->nombre . "</td>";
            //echo "<td>" . $row->fecha_lanzamiento . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id'))]->fecha_lanzamiento . "</td>";
            //echo "<td>" . $row->descripcion . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id'))]->descripcion . "</td>";
            //echo "<td>" . $row->precio . "</td>";
            echo "<td>" . $array[0][array_search($rs_parametro, array_column($array[0], 'id'))]->precio . "</td>";
            echo '</tr>';
            //$foto = $row->fotografia;
            $foto = $array[0][array_search($rs_parametro, array_column($array[0], 'id'))]->fotografia;
         //}
      //}
      echo '</table>';

      echo "<br><img id='image5' src=" . base_url($foto) . " />";

      // Link a pagina principal Volver index
      echo "<br><br><br><a href='" . base_url() . "index.php/controlUF2_AC02' title='Volver a página principal' />Volver a página principal"; // Enlace link en la misma pestaña ; title=Descripcion Emergente del enlace cuando pones el mouse encima  , / barra adelante
   ?>

   </center>
   </body>
</html>
