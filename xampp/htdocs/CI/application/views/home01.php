<html>
   <head>
      <title>CONTROL DE USUARIOS</title>
   </head>
   <body>
<h1>Bienvenido a mi web</h1>
   <p>Esta es la primera p�gina de mi web.</p>
   <p>Para poder continuar tendr�s que <a href="http://localhost/codeigniter/index.php/form">REGISTRARTE.</a></p>
   <p>o Iniciar sesi�n</p>
   <p>Listado de usuarios que pueden iniciar sesi�n</p>
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
