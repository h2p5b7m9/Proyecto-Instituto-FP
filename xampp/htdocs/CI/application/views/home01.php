<html>
   <head>
      <title>CONTROL DE USUARIOS</title>
   </head>
   <body>
<h1>Bienvenido a mi web</h1>
   <p>Esta es la primera página de mi web.</p>
   <p>Para poder continuar tendrás que <a href="http://localhost/codeigniter/index.php/form">REGISTRARTE.</a></p>
   <p>o Iniciar sesión</p>
   <p>Listado de usuarios que pueden iniciar sesión</p>
   <?php
      foreach ($rs_usuarios->result() as $row) { //$datos_vista = array('rs_usuarios' => $ListadoUsuarios) en controlUsuarios01.php
         echo '<p>';
         echo $row->id . " ";
         echo $row->nombre . " ";
         echo $row->apellidos . " ";
         echo '</p>';
      }
   ?>
   </body>
</html>
