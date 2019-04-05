<?php
// /localhost/Proyecto_Instituto_Gestion/ProyectoProfesores_02.php
//Copiado de pgm085_02.php
//Con Alta cliente ed tiene todo Altas Bajas Modis Consulta/Búsqueda ACRUD
//Cliente --> Profesor , Jardineria --> Proyecto
//Ver pgm086.php
//Ver pgm082.php Sin Web
// Buscar mysqli Tienda Proyecto
//Como no hay llamadas a otros .php hago un form para cada grupo de cajas con boton: Mostrar Todos, Buscar/Consultar profesor, Eliminar profesor, Alta profesores.
//Buscar .php .html
/* UF3.AC02 - POO y MySql.docx:
Ejercicio 4:
Continuando con la base de datos del ejercicio anterior, se os pide crear una web con la que realizar la gestión de los empleados de la empresa.
Para ello, en una página web (.php), se mostrarán las siguientes opciones:
- Listar empleados (mostrará un listado con todos los empleados) (1 punto)
- Modificar empleados (a partir de un código de empleado, se podrán modificar sus datos) (1 punto)
- Eliminar empleados (dado un codigo empleado, se eliminará de la base de datos) (1 punto)
Se valorará el diseño (estilos) utilizado (1 punto)
Buscar en otros ficheros style estilo <style type="text/css">
OJO style estilo CSS: div id= #  vs  class .
*/

$msg = ""; // Blanquea cada vez el mensaje con Profesor = 2, No hay registros con la selección especificada. ; serialize
//$Id_Profesor = "";
//$habilitar_mostrar_todos = true;

include("sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.

function mostrarTodosProfesores() {
   // Arrancar el servicio MySQL en XAMPP servidor phpmydmin
   $equipo = "localhost";
   $usuario = "root";
   $contra = "";
   $base_datos = "Proyecto"; // Proyecto.sql exportar en phpmyadmin xampp servidor

   @$conexion = new mysqli($equipo, $usuario, $contra, $base_datos); //schema bbdd ;  @delante para que no de errores warnings Unknown database
   $error = $conexion->connect_errno; // != null --> exit(0)
   if($error != null){ //
      echo "Error en la conexión a la BD.<br>";
      $msg = "Error en la conexión a la BD.<br>";
      exit(0); //Finaliza programa
   }
   else
   {
      if(!$conexion) //
      {
          echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
          $msg = "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
      }
      else {
         // Consulta
         $consulta = "SELECT * FROM PROFESORES ORDER BY Id_Profesor"; //Tabla Profesores
         $resultado = $conexion->query($consulta);
         //print mysqli_get_server_info($conexion) . "<BR><BR>"; //Imprime 5.5.5-10.1.30-MariaDB <-- Base de Datos servidor
         if($resultado == null) { //
            //$msg = "No existe tabla.";
            echo "No existe tabla.<br>";
         }
         else {
            if($resultado->num_rows > 0) { //Metodo num_rows ; Registros encontrados
                echo"<table border='3' align='center' style='width:98%'>
                 <tr bgcolor='turquoise'> <!-- #E6E6E6, turquoise, aquamarine, cyan, pink, cornsilk -->
                    <th>Código de Profesor</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Experiencia</th>
                    <th>Formación</th>
                    <th>Doctorado</th>
                    <th>Teléfono</th>
                    <th>Sexo</th>
                    <th>Dirección Lin. 1</th>
                    <th>Dirección Lin. 2</th>
                    <th>Ciudad</th>
                    <th>Región</th>
                    <th>País</th>
                    <th>Código Postal</th>
                </tr>";
               $row_color = array('grey', 'aquamarine'); //Colorea las filas, alternando gris y aquamarine en cada fila.
               $color_index = 0;
               while ($fila = $resultado->fetch_assoc()) { // array asociativo mas rapido que fetch_array() xq solo puedes acceder por clave, en cambio fetch_array() puedes acceder por indice o por clave y gasta mas recursos.
               //Diferencia entre fetch_assoc() y fetch_array(): fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]. And fetch_assoc() will return STRING INDEXED key array and no numeric array so you won't have an option here of using numeric keys like $row[0]. So fetch_assoc() is better in performance compared to fetch_array() and obviously using named indexes is far better compared to numeric indexes.
                   echo '<tr style="color: blue" bgcolor="' . $row_color[$color_index] . '">'; // tr Inicio fila row
                   echo "<td>".$fila["Id_Profesor"]."</td>";
                   echo "<td>".$fila["Nombre"]."</td>";
                   echo "<td>".$fila["Apellido"]."</td>";
                   echo "<td>".$fila["Experiencia"]."</td>";
                   echo "<td>".$fila["Formacion"]."</td>";
                   if($fila["Doctorado"]){
                      echo "<td>Sí</td>";
                   }
                   else {
                      echo "<td>No</td>";
                   }
                   //echo "<td>".$fila["Doctorado"]."</td>";
                   echo "<td>".$fila["Telefono"]."</td>";
                   echo "<td>".$fila["Sexo"]."</td>";
                   echo "<td>".$fila["LineaDireccion1"]."</td>";
                   echo "<td>".$fila["LineaDireccion2"]."</td>";
                   echo "<td>".$fila["Ciudad"]."</td>";
                   echo "<td>".$fila["Region"]."</td>";
                   echo "<td>".$fila["Pais"]."</td>";
                   echo "<td>".$fila["CodigoPostal"]."</td>";
                   echo "</tr>"; // /tr Fin fila row
                   $color_index = 1 - $color_index;
               }
               echo "</table>";
               mysqli_free_result($resultado); //Siempre se debe liberar el resultado con mysqli_free_result() cuando el objeto del resultado ya no es necesario.
            }
            else
            {
                echo "No hay registros con la selección especificada.";
                $msg = "No hay registros con la selección especificada.";
            }
         }
      //Cierra conexion MySqli
      $conexion->close();
      }
   }
} //mostrarTodosProfesores()

function altaProfesor() {
//$habilitar_mostrar_todos = false;
//$Id_Profesor = $_POST["Id_Profesor"];
   $msg = "";
   $campos_tabla_array = array("id_Profesor", "nombre", "apellido", "experiencia", "formacion", "doctorado", "telefono", "sexo", "lineaDireccion1", "lineaDireccion2", "ciudad", "region", "pais", "codigoPostal"); // Array
   $cabeceras_tabla_array = Array("Código de profesor", "Nombre de profesor", "Apellido", "Experiencia", "Formación", "Doctorado", "Teléfono", "Sexo", "Linea 1 Dirección", "Linea 2 Dirección", "Ciudad", "Región", "País", "Código Postal"); // Array

   // Arrancar el servicio MySQL en XAMPP servidor
   //$equipo = "localhost";
   //$usuario = "root";
   //$contra = "";
   //$base_datos = "Proyecto";

   //@$conexion = new mysqli($equipo, $usuario, $contra, $base_datos); //schema bbdd tienda ;  @delante para que no de errores warnings Unknown database tiendakk ; true = Ok, false No hay conexion
   //$error = $conexion->connect_errno; //
   //if($error != null){ //
   //   echo "Error en la conexión a la BD.<br>";
   //   $msg = "Error en la conexión a la BD.<br>";
   //   exit(0); //Finaliza programa
   //}
   //else
   //{
   //   if(!$conexion) //
   //   {
   //       echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
   //       $msg = "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
   //   }
   //   else {
         // Consulta
         //$consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"]; //Tabla Profesores
         //$resultado = $conexion->query($consulta);
         //print mysqli_get_server_info($conexion) . "<BR><BR>"; //Imprime 5.5.5-10.1.30-MariaDB <-- Base de Datos servidor
         //if($resultado == null) { //
            //$msg = "No existe tabla.";
            //echo "No existe tabla.<br>";
         //}
         //else {
            //if($resultado->num_rows > 0) { //

    echo '<form method="POST" action=' . $_SERVER["PHP_SELF"] . ">";

    echo "<table border='3' align='center'>"; // #E6E6E6, turquoise, aquamarine, cyan, pink, cornsilk
    echo "<tr bgcolor='turquoise'>";
    foreach ($cabeceras_tabla_array as $campo) { // Array titulos columnas headers tabla cabeceras
       echo "<th>" . trim($campo) . "</th>"; // Imprime titulos columnas headers tabla cabeceras
    }
    echo "</tr>";
    //while ($fila = $resultado->fetch_assoc()) { // array asociativo () mas rapido que fetch_array() xq solo puedes acceder por clave, en cambio fetch_array() puedes acceder por indice o por clave y gasta mas recursos.
    //Diferencia entre fetch_assoc() y fetch_array(): fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]. And fetch_assoc() will return STRING INDEXED key array and no numeric array so you won't have an option here of using numeric keys like $row[0]. So fetch_assoc() is better in performance compared to fetch_array() and obviously using named indexes is far better compared to numeric indexes.
        echo "<tr bgcolor='aquamarine'>"; // tr Inicio fila row
        echo '<td><input type="text" size="16" name="' . $campos_tabla_array[0] . '"></td>'; // OJO El value empieza por Mayuscula y el name por Minuscula ; Sustituyo name por array
        echo '<td><input type="text" size="16" name="' . $campos_tabla_array[1] . '"></td>';
        echo '<td><input type="text" size="8" name="' .  $campos_tabla_array[2] . '"></td>';
        echo '<td><input type="text" size="8" name="' .  $campos_tabla_array[3] . '"></td>';
        echo '<td><input type="text" size="8" name="' .  $campos_tabla_array[4] . '"></td>';
        echo '<td><input type="text" size="8" name="' .  $campos_tabla_array[5] . '"></td>';
        echo '<td><input type="text" size="8" name="' .  $campos_tabla_array[6] . '"></td>';
        echo '<td><input type="text" size="8" name="' .  $campos_tabla_array[7] . '"></td>';
        echo '<td><input type="text" size="14" name="' . $campos_tabla_array[8] . '"></td>';
        echo '<td><input type="text" size="14" name="' . $campos_tabla_array[9] . '"></td>';
        echo '<td><input type="text" size="8" name="' .  $campos_tabla_array[10] . '"></td>';
        echo '<td><input type="text" size="8" name="' .  $campos_tabla_array[11] . '"></td>';
        echo '<td><input type="text" size="8" name="' .  $campos_tabla_array[12] . '"></td>';
        echo '<td><input type="text" size="10" name="' . $campos_tabla_array[13] . '"></td>';
        //$msg = "nombre=" . $nombre;
    //}
    echo "</tr></table>";
    echo "<input type='hidden' name='accion' value='alta_profesor_1'>"; // input type hidden value sirve para if(isset($_POST['accion']) && $_POST['accion'] == 'alta_profesor_1'){
    echo "<input type='submit' value='Dar de alta el profesor' name='alta_profesor_1'> <br><br>"; // Boton
    echo "</form>";

   //foreach ($campos_tabla_array as $campo) { // Array 3 columnas Fechas de tabla cabecera
      //echo "<input type='hidden' name='Id_Profesor'>";
      //echo "pepeinput type='hidden' name='" . $campo . "'>";
      //echo "<input type='hidden' name='" . $campo . "'>";
      //echo "<th>" . trim($campo) . "</th>"; // Imprime 3 columnas cabeceras headers Fechas de tabla
   //}
                /********************************
                $resultado = $conexion->query($consulta); //Lo vuelvo a hacer para pruebas, Quitar luego
                echo"<table border='1' align='center'>
                 <tr bgcolor='turquoise'> <!-- #E6E6E6, turquoise, aquamarine, cyan, pink, cornsilk -->
                    <th>Código de Profesor</th>
                    <th>Nombre de Profesor</th>
                    <th>Apellido</th>
                    <th>Experiencia</th>
                    <th>Formación</th>
                    <th>Doctorado</th>
                    <th>Telefono</th>
                    <th>Sexo</th>
                    <th>Direccion Lin. 1</th>
                    <th>Direccion Lin. 2</th>
                    <th>Ciudad</th>
                    <th>Región</th>
                    <th>País</th>
                    <th>Código Postal</th>
                </tr><tr>";
               while ($fila = $resultado->fetch_assoc()) { // array asociativo mas rapido que fetch_array() xq solo puedes acceder por clave, en cambio fetch_array() puedes acceder por indice o por clave y gasta mas recursos.
               //Diferencia entre fetch_assoc() y fetch_array(): fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]. And fetch_assoc() will return STRING INDEXED key array and no numeric array so you won't have an option here of using numeric keys like $row[0]. So fetch_assoc() is better in performance compared to fetch_array() and obviously using named indexes is far better compared to numeric indexes.
                   echo "<tr bgcolor='aquamarine'> <!-- tr Inicio fila row -->
                   <td>".$fila["Id_Profesor"]."</td>";
                   echo "<td>".$fila["Nombre"]."</td>";
                   echo "<td>".$fila["Apellido"]."</td>";
                   echo "<td>".$fila["Experiencia"]."</td>";
                   echo "<td>".$fila["Formacion"]."</td>";
                   echo "<td>".$fila["Doctorado"]."</td>";
                   echo "<td>".$fila["Telefono"]."</td>";
                   echo "<td>".$fila["Sexo"]."</td>";
                   echo "<td>".$fila["LineaDireccion1"]."</td>";
                   echo "<td>".$fila["LineaDireccion2"]."</td>";
                   echo "<td>".$fila["Ciudad"]."</td>";
                   echo "<td>".$fila["Region"]."</td>";
                   echo "<td>".$fila["Pais"]."</td>";
                   echo "<td>".$fila["CodigoPostal"]."</td>";
                   echo "</tr>"; // /tr Fin fila row
               }
               echo "</table>";
               *****************************************/
               //mysqli_free_result($resultado); //Siempre se debe liberar el resultado con mysqli_free_result() cuando el objeto del resultado ya no es necesario.
               //UPDATE
               //if(isset($_POST['accion']) && $_POST['accion'] == 'modificar_profesor'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton MODIFICAR_PROFESOR
                  //modificarProfesor();
               //echo "nombre=" . $nombre;
               //echo $msg;
               //}
            //}
            //else
            //{
                //echo "No hay registros con la selección especificada.<br>";
                //$msg = "No hay registros con la selección especificada.";
                //$habilitar_mostrar_todos = true;
            //}
         //}
      //Cierra conexion MySqli
      //$conexion->close();
      //}
   //}
     //$Id_Profesor = $_POST["Id_Profesor"]; // input type="text" name="Id_Profesor"  ;  Guarda el profesor que el usuario ha entrado por teclado en el textbox en una variable.
     //echo "Id_Profesor = " . $Id_Profesor;
} //altaProfesor()

function altaProfesor_1() {
   //echo "id_Profesor = " . $_POST["id_Profesor"] . "<br>";
   //echo "nombre=" . $_POST["nombre"] . "<br>";
   //echo "apellido=" . $_POST["apellido"] . "<br>";
   //echo "experiencia=" . $_POST["experiencia"] . "<br>";
   //echo "formacion=" . $_POST["formacion"] . "<br>";
   //echo "doctorado=" . $_POST["doctorado"] . "<br>";
   //echo "telefono=" . $_POST["telefono"] . "<br>";
   //echo "sexo=" . $_POST["sexo"] . "<br>";
   //echo "lineaDireccion1=" . $_POST["lineaDireccion1"] . "<br>";
   //echo "lineaDireccion2=" . $_POST["lineaDireccion2"] . "<br>";
   //echo "ciudad=" . $_POST["ciudad"] . "<br>";
   //echo "region=" . $_POST["region"] . "<br>";
   //echo "pais=" . $_POST["pais"] . "<br>";
   //echo "codigoPostal=" . $_POST["codigoPostal"] . "<br>";

   //$msg="";
   //$campos_tabla_array = Array("Id_Profesor", "Nombre", "Apellido", "Experiencia", "Formación", "Doctorado", "Telefono", "Sexo", "LineaDireccion1", "LineaDireccion2", "Ciudad", "Region", "Pais", "CodigoPostal"); // Array
   //$cabeceras_tabla_array = Array("Código de profesor", "Nombre de profesor", "Apellido", "Experiencia", "Formación", "Doctorado", "Teléfono", "Sexo", "Linea 1 Dirección", "Linea 2 Dirección", "Ciudad", "Región", "País", "Código Postal"); // Array

   // Arrancar el servicio MySQL en XAMPP servidor
   $equipo = "localhost";
   $usuario = "root";
   $contra = "";
   $base_datos = "Proyecto";

   @$conexion = new mysqli($equipo, $usuario, $contra, $base_datos); //schema bbdd tienda ;  @delante para que no de errores warnings Unknown database tiendakk
   $error = $conexion->connect_errno; //
   if($error != null){
      echo "Error en la conexión a la BD.<br>";
      $msg = "Error en la conexión a la BD.<br>";
      exit(0); //Finaliza programa
   }
   else
   {
      if(!$conexion) //
      {
          echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
          $msg = "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
      }
      else {
         // Consulta
         //$consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"]; //Tabla profesores
         //$resultado = $conexion->query($consulta);
         //print mysqli_get_server_info($conexion) . "<BR><BR>"; //Imprime 5.5.5-10.1.30-MariaDB <-- Base de Datos servidor
         //if($resultado == null) { //
         //   $msg = "No existe tabla.";
         //   echo "No existe tabla.";
         //}
         //else {
            //if($resultado->num_rows > 0) { //

    //echo "<table border='1' align='center'>"; // #E6E6E6, turquoise, aquamarine, cyan, pink, cornsilk
    //echo "<tr bgcolor='turquoise'>";
    //foreach ($cabeceras_tabla_array as $campo) { // Array 3 columnas Fechas de tabla cabecera
    //   echo "<th>" . trim($campo) . "</th>"; // Imprime 3 columnas cabeceras headers Fechas de tabla
    //}
    //echo "</tr>";
    //while ($fila = $resultado->fetch_assoc()) { // array asociativo mas rapido que fetch_array() xq solo puedes acceder por clave, en cambio fetch_array() puedes acceder por indice o por clave y gasta mas recursos.
    //Diferencia entre fetch_assoc() y fetch_array(): fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]. And fetch_assoc() will return STRING INDEXED key array and no numeric array so you won't have an option here of using numeric keys like $row[0]. So fetch_assoc() is better in performance compared to fetch_array() and obviously using named indexes is far better compared to numeric indexes.
    //  Ver pgm086.php input table Tabla de entrada si varios registros
    //    echo "<tr bgcolor='aquamarine'>"; // tr Inicio fila row
    //    echo '<td><input type="text" value="' . $fila["Id_Profesor"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Nombre"] . '" name="nombre"></td>';
    //    echo '<td><input type="text" value="' . $fila["Apellido"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Experiencia"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Telefono"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Sexo"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["LineaDireccion1"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["LineaDireccion2"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Ciudad"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Region"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Pais"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["CodigoPostal"] . '"></td>';
    //    //$msg = "nombre=" . $nombre;
    //}
    //echo "</tr></table>";

    //echo "<input type='hidden' name='accion' value='modificar_profesor'>"; // hidden sirve para if(isset($_POST['accion']) && $_POST['accion'] == 'modificar_profesor'){

    //echo "<input type='submit' value='Modificar profesor' name='modificar_profesor'> <br><br>"; // Boton

                /********************************
                $resultado = $conexion->query($consulta); //Lo vuelvo a hacer para pruebas, Quitar luego
                echo"<table border='1' align='center'>
                 <tr bgcolor='turquoise'> <!-- #E6E6E6, turquoise, aquamarine, cyan, pink, cornsilk -->
                    <th>Código de profesor</th>
                    <th>Nombre de profesor</th>
                    <th>Apellido</th>
                    <th>Experiencia</th>
                    <th>Formación</th>
                    <th>Doctorado</th>
                    <th>Telefono</th>
                    <th>Sexo</th>
                    <th>Direccion Lin. 1</th>
                    <th>Direccion Lin. 2</th>
                    <th>Ciudad</th>
                    <th>Región</th>
                    <th>País</th>
                    <th>Código Postal</th>
                    <th>Codigo de Empleado Representante de Ventas</th>
                    <th>Limite de Credito</th>
                </tr><tr>";
               while ($fila = $resultado->fetch_assoc()) { // array asociativo mas rapido que fetch_array() xq solo puedes acceder por clave, en cambio fetch_array() puedes acceder por indice o por clave y gasta mas recursos.
               //Diferencia entre fetch_assoc() y fetch_array(): fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]. And fetch_assoc() will return STRING INDEXED key array and no numeric array so you won't have an option here of using numeric keys like $row[0]. So fetch_assoc() is better in performance compared to fetch_array() and obviously using named indexes is far better compared to numeric indexes.
                   echo "<tr bgcolor='aquamarine'> <!-- tr Inicio fila row -->
                   <td>".$fila["Id_Profesor"]."</td>";
                   echo "<td>".$fila["Nombre"]."</td>";
                   echo "<td>".$fila["Apellido"]."</td>";
                   echo "<td>".$fila["Experiencia"]."</td>";
                   echo "<td>".$fila["Telefono"]."</td>";
                   echo "<td>".$fila["Sexo"]."</td>";
                   echo "<td>".$fila["LineaDireccion1"]."</td>";
                   echo "<td>".$fila["LineaDireccion2"]."</td>";
                   echo "<td>".$fila["Ciudad"]."</td>";
                   echo "<td>".$fila["Region"]."</td>";
                   echo "<td>".$fila["Pais"]."</td>";
                   echo "<td>".$fila["CodigoPostal"]."</td>";
                   echo "</tr>"; // /tr Fin fila row
               }
               echo "</table>";
               *****************************************/
               //mysqli_free_result($resultado); //Siempre se debe liberar el resultado con mysqli_free_result() cuando el objeto del resultado ya no es necesario.
               //UPDATE
               //if(isset($_POST['accion']) && $_POST['accion'] == 'modificar_profesor'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton MODIFICAR_PROFESOR
                  //modificarProfesor();
               //echo "nombre=" . $nombre;
               //echo $msg;
               //}
               if ($_POST["doctorado"] != ''){
                  $doctorado = 'true'; //boolean
               }
               else {
                  $doctorado = 'false';
               }
               $consulta = "INSERT INTO PROFESORES VALUES(" . $_POST["id_Profesor"] . ", '" .
               //$consulta = "INSERT INTO PROFESORES1 VALUES(" . $_POST["id_Profesor"] . ", '" .
               $_POST["nombre"] . "', '" .
               $_POST["apellido"] . "', " .
               $_POST["experiencia"] . ", '" .
               $_POST["formacion"] . "', " .
               $doctorado . ", '" .
               $_POST["telefono"] . "', '" .
               $_POST["sexo"] . "', '" .
               $_POST["lineaDireccion1"] . "', '" .
               $_POST["lineaDireccion2"] . "', '" .
               $_POST["ciudad"] . "', '" .
               $_POST["region"] . "', '" .
               $_POST["pais"] . "', '" .
               $_POST["codigoPostal"] . "', '" .
               date('Y-m-d H:i:s') . "')"; // timestamp = fecha/hora actual = fecha_ultima_actualizacion
               //echo $consulta . "<br>";
               $resultado = $conexion->query($consulta);
               if($conexion->affected_rows < 1) {
               //if(!$resultado){
                  echo "No se ha podido insertar el registro con los datos especificados. Puede que ya exista este código de profesor.";
               }
               //echo "resultado = " . $resultado . "<br>";
               //mysqli_free_result($resultado); //Siempre se debe liberar el resultado con mysqli_free_result() cuando el objeto del resultado ya no es necesario.
            //}
            //else
            //{
            //    echo "No hay registros con la selección especificada.";
            //    $msg = "No hay registros con la selección especificada.";
            //}
      }
      //Cierra conexion MySqli
      $conexion->close();
   }
} //altaProfesor_1()

$campos_tabla_array = array("id_Profesor", "nombre", "apellido", "experiencia", "formacion", "doctorado", "telefono", "sexo", "lineaDireccion1", "lineaDireccion2", "ciudad", "region", "pais", "codigoPostal"); // Array

function buscarProfesor() {
//$habilitar_mostrar_todos = false;
//$Id_Profesor = $_POST["Id_Profesor"];
   $msg = "";
   global $campos_tabla_array;
   //$campos_tabla_array = array("id_Profesor", "nombre", "apellido", "experiencia", "formacion", "doctorado", "telefono", "sexo", "lineaDireccion1", "lineaDireccion2", "ciudad", "region", "pais", "codigoPostal"); // Array
   $cabeceras_tabla_array = Array("Código de profesor", "Nombre de profesor", "Apellido", "Experiencia", "Formación", "Doctorado", "Teléfono", "Sexo", "Linea 1 Dirección", "Linea 2 Dirección", "Ciudad", "Región", "País", "Código Postal"); // Array

   //echo "count(campos_tabla_array) = " . count($campos_tabla_array). "<br>";

   // Arrancar el servicio MySQL en XAMPP servidor
   $equipo = "localhost";
   $usuario = "root";
   $contra = "";
   $base_datos = "Proyecto";

   @$conexion = new mysqli($equipo, $usuario, $contra, $base_datos); //schema bbdd tienda ;  @delante para que no de errores warnings Unknown database tiendakk ; true = Ok, false No hay conexion
   $error = $conexion->connect_errno; //
   if($error != null){ //
      echo "Error en la conexión a la BD.<br>";
      $msg = "Error en la conexión a la BD.<br>";
      exit(0); //Finaliza programa
   }
   else
   {
      if(!$conexion) //
      {
          echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
          $msg = "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
      }
      else {
         // Consulta
         if ($_POST["Id_Profesor"] && $_POST["Nombre"] && $_POST["Apellido"] && $_POST["Experiencia"]) {
            $consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"] . " || Nombre = '" . $_POST["Nombre"] . "' || Apellido = '" . $_POST["Apellido"] . "' || Experiencia = " . $_POST["Experiencia"]; //Tabla Profesores
         }
         if ($_POST["Id_Profesor"] && $_POST["Nombre"] && $_POST["Apellido"] && !($_POST["Experiencia"])) {
            $consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"] . " || Nombre = '" . $_POST["Nombre"] . "' || Apellido = '" . $_POST["Apellido"] . "'"; //Tabla Profesores
         }
         if ($_POST["Id_Profesor"] && $_POST["Nombre"] && !($_POST["Apellido"]) && $_POST["Experiencia"]) {
            $consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"] . " || Nombre = '" . $_POST["Nombre"] . "' || Experiencia = " . $_POST["Experiencia"]; //Tabla Profesores
         }
         if ($_POST["Id_Profesor"] && $_POST["Nombre"] && !($_POST["Apellido"]) && !($_POST["Experiencia"])) {
            $consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"] . " || Nombre = '" . $_POST["Nombre"] . "'"; //Tabla Profesores
         }
         if (!($_POST["Id_Profesor"]) && $_POST["Nombre"] && $_POST["Apellido"] && $_POST["Experiencia"]) {
            $consulta = "SELECT * FROM PROFESORES WHERE Nombre = '" . $_POST["Nombre"] . "' || Apellido = '" . $_POST["Apellido"] . "' || Experiencia = " . $_POST["Experiencia"]; //Tabla Profesores
         }
         if (!($_POST["Id_Profesor"]) && $_POST["Nombre"] && $_POST["Apellido"] && !($_POST["Experiencia"])) {
            $consulta = "SELECT * FROM PROFESORES WHERE Nombre = '" . $_POST["Nombre"] . "' || Apellido = '" . $_POST["Apellido"] . "'"; //Tabla Profesores
         }
         if (!($_POST["Id_Profesor"]) && $_POST["Nombre"] && !($_POST["Apellido"]) && $_POST["Experiencia"]) {
            $consulta = "SELECT * FROM PROFESORES WHERE Nombre = '" . $_POST["Nombre"] . "' || Apellido = '" . $_POST["Apellido"] . "' || Experiencia = " . $_POST["Experiencia"]; //Tabla Profesores
         }
         if (!($_POST["Id_Profesor"]) && $_POST["Nombre"] && !($_POST["Apellido"]) && !($_POST["Experiencia"])) {
            $consulta = "SELECT * FROM PROFESORES WHERE Nombre = '" . $_POST["Nombre"] . "' || Apellido = '" . $_POST["Apellido"] . "'"; //Tabla Profesores
         }
         if ($_POST["Id_Profesor"] && !($_POST["Nombre"]) && $_POST["Apellido"] && $_POST["Experiencia"]) {
            $consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"] . " || Apellido = '" . $_POST["Apellido"] . "' || Experiencia = " . $_POST["Experiencia"]; //Tabla Profesores
         }
         if ($_POST["Id_Profesor"] && !($_POST["Nombre"]) && $_POST["Apellido"] && !($_POST["Experiencia"])) {
            $consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"] . " || Apellido = '" . $_POST["Apellido"] . "'"; //Tabla Profesores
         }
         if ($_POST["Id_Profesor"] && !($_POST["Nombre"]) && !($_POST["Apellido"]) && $_POST["Experiencia"]) {
            $consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"] . " || Experiencia = " . $_POST["Experiencia"]; //Tabla Profesores
         }
         if ($_POST["Id_Profesor"] && !($_POST["Nombre"]) && !($_POST["Apellido"]) && !($_POST["Experiencia"])) {
            $consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"]; //Tabla Profesores
         }
         if (!($_POST["Id_Profesor"]) && !($_POST["Nombre"]) && $_POST["Apellido"] && !($_POST["Experiencia"])) {
            $consulta = "SELECT * FROM PROFESORES WHERE Apellido = '" . $_POST["Apellido"] . "'"; //Tabla Profesores
         }
         if (!($_POST["Id_Profesor"]) && !($_POST["Nombre"]) && !($_POST["Apellido"]) && $_POST["Experiencia"]) {
            $consulta = "SELECT * FROM PROFESORES WHERE Experiencia = " . $_POST["Experiencia"]; //Tabla Profesores
         }
         if (!($_POST["Id_Profesor"]) && !($_POST["Nombre"]) && $_POST["Apellido"] && $_POST["Experiencia"]) {
            $consulta = "SELECT * FROM PROFESORES WHERE Apellido = '" . $_POST["Apellido"] . "' || Experiencia = " . $_POST["Experiencia"]; //Tabla Profesores
         }
         $consulta .= " ORDER BY Id_Profesor";
         //echo $consulta;
         $resultado = $conexion->query($consulta);
         //print mysqli_get_server_info($conexion) . "<BR><BR>"; //Imprime 5.5.5-10.1.30-MariaDB <-- Base de Datos servidor
         if($resultado == null) { //
            //$msg = "No existe tabla.";
            echo "No existe tabla.<br>";
         }
         else {
            if($resultado->num_rows > 0) { //

    echo '<form method="POST" action=' . $_SERVER["PHP_SELF"] . ">";
    echo "<table border='3' align='center' style='width:97%'>"; // #E6E6E6, turquoise, aquamarine, cyan, pink, cornsilk
    echo "<tr bgcolor='turquoise'>";
    foreach ($cabeceras_tabla_array as $campo) { // Array titulos columnas headers tabla cabeceras
       echo "<th>" . trim($campo) . "</th>"; // Imprime titulos columnas headers tabla cabeceras
    }
    echo "</tr>";
    $row_color = array('grey', 'aquamarine'); //Colorea las filas, alternando gris y aquamarine en cada fila.
    $color_index = 0;
    while ($fila = $resultado->fetch_assoc()) { // array asociativo () mas rapido que fetch_array() xq solo puedes acceder por clave, en cambio fetch_array() puedes acceder por indice o por clave y gasta mas recursos.
    //Diferencia entre fetch_assoc() y fetch_array(): fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]. And fetch_assoc() will return STRING INDEXED key array and no numeric array so you won't have an option here of using numeric keys like $row[0]. So fetch_assoc() is better in performance compared to fetch_array() and obviously using named indexes is far better compared to numeric indexes.
    // Ver pgm086.php input table Tabla de entrada si hay varios registros con Id_Profesor repetido
        echo '<tr bgcolor="' . $row_color[$color_index] . '">'; // tr Inicio fila row
        //echo "<tr bgcolor='aquamarine'>"; // tr Inicio fila row
        /*********
        echo '<td><input type="text" size="8" value="' . $fila["Id_Profesor"] . '" name="' . $campos_tabla_array[0] . '"></td>'; // OJO El value empieza por Mayuscula y el name por Minuscula ; Sustituyo name por array
        echo '<td><input type="text" size="8" value="' . $fila["Nombre"] . '" name="' . $campos_tabla_array[1] . '"></td>';
        echo '<td><input type="text" size="8" value="' . $fila["Apellido"] . '" name="' . $campos_tabla_array[2] . '"></td>';
        echo '<td><input type="text" size="8" value="' . $fila["Experiencia"] . '" name="' . $campos_tabla_array[3] . '"></td>';
        echo '<td><input type="text" size="8" value="' . $fila["Telefono"] . '" name="' . $campos_tabla_array[4] . '"></td>';
        echo '<td><input type="text" size="8" value="' . $fila["Sexo"] . '" name="' . $campos_tabla_array[5] . '"></td>';
        echo '<td><input type="text" size="8" value="' . $fila["LineaDireccion1"] . '" name="' . $campos_tabla_array[6] . '"></td>';
        echo '<td><input type="text" size="8" value="' . $fila["LineaDireccion2"] . '" name="' . $campos_tabla_array[7] . '"></td>';
        echo '<td><input type="text" size="8" value="' . $fila["Ciudad"] . '" name="' . $campos_tabla_array[8] . '"></td>';
        echo '<td><input type="text" size="8" value="' . $fila["Region"] . '" name="' . $campos_tabla_array[9] . '"></td>';
        echo '<td><input type="text" size="8" value="' . $fila["Pais"] . '" name="' . $campos_tabla_array[10] . '"></td>';
        echo '<td><input type="text" size="8" value="' . $fila["CodigoPostal"] . '" name="' . $campos_tabla_array[11] . '"></td>';
        *********/
        if($fila["Doctorado"]){
           $doctorado = "Sí";
        }
        else {
           $doctorado = "No";
        }
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="16" value="' . $fila["Id_Profesor"] . '" name="' . $campos_tabla_array[0] . "_" . $fila["Id_Profesor"] . '"></td>'; // OJO El value empieza por Mayuscula y el name por Minuscula ; Sustituyo name por array
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="16" value="' . $fila["Nombre"] . '" name="' . $campos_tabla_array[1] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="8" value="' .  $fila["Apellido"] . '" name="' . $campos_tabla_array[2] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="8" value="' .  $fila["Experiencia"] . '" name="' . $campos_tabla_array[3] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="8" value="' .  $fila["Formacion"] . '" name="' . $campos_tabla_array[4] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="8" value="' .  $doctorado . '" name="' . $campos_tabla_array[5] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="8" value="' .  $fila["Telefono"] . '" name="' . $campos_tabla_array[6] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="8" value="' .  $fila["Sexo"] . '" name="' . $campos_tabla_array[7] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="14" value="' . $fila["LineaDireccion1"] . '" name="' . $campos_tabla_array[8] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="14" value="' . $fila["LineaDireccion2"] . '" name="' . $campos_tabla_array[9] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="8" value="' .  $fila["Ciudad"] . '" name="' . $campos_tabla_array[10] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="8" value="' .  $fila["Region"] . '" name="' . $campos_tabla_array[11] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="8" value="' .  $fila["Pais"] . '" name="' . $campos_tabla_array[12] . "_" . $fila["Id_Profesor"] . '"></td>';
        echo '<td><input type="text" style="background-color:' . $row_color[$color_index] . '" size="10" value="' . $fila["CodigoPostal"] . '" name="' . $campos_tabla_array[13] . "_" . $fila["Id_Profesor"] . '"></td>';
        //$msg = "nombre=" . $nombre;
        echo "</tr>";
        $color_index = 1 - $color_index;
    }
    echo "</table>";
    echo "<input type='hidden' name='accion' value='modificar_profesor'><br>"; // input type hidden value sirve para if(isset($_POST['accion']) && $_POST['accion'] == 'modificar_profesor'){
    echo "<input type='submit' value='Modificar profesor' name='modificar_profesor'> <br><br>"; // Boton
    echo "</form>";

   //foreach ($campos_tabla_array as $campo) { // Array 3 columnas Fechas de tabla cabecera
      //echo "<input type='hidden' name='Id_Profesor'>";
      //echo "pepeinput type='hidden' name='" . $campo . "'>";
      //echo "<input type='hidden' name='" . $campo . "'>";
      //echo "<th>" . trim($campo) . "</th>"; // Imprime 3 columnas cabeceras headers Fechas de tabla
   //}
                /********************************
                $resultado = $conexion->query($consulta); //Lo vuelvo a hacer para pruebas, Quitar luego
                echo"<table border='1' align='center'>
                 <tr bgcolor='turquoise'> <!-- #E6E6E6, turquoise, aquamarine, cyan, pink, cornsilk -->
                    <th>Código de profesor</th>
                    <th>Nombre de profesor</th>
                    <th>Apellido</th>
                    <th>Experiencia</th>
                    <th>Formación</th>
                    <th>Doctorado</th>
                    <th>Telefono</th>
                    <th>Sexo</th>
                    <th>Direccion Lin. 1</th>
                    <th>Direccion Lin. 2</th>
                    <th>Ciudad</th>
                    <th>Región</th>
                    <th>País</th>
                    <th>Código Postal</th>
                </tr><tr>";
               while ($fila = $resultado->fetch_assoc()) { // array asociativo mas rapido que fetch_array() xq solo puedes acceder por clave, en cambio fetch_array() puedes acceder por indice o por clave y gasta mas recursos.
               //Diferencia entre fetch_assoc() y fetch_array(): fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]. And fetch_assoc() will return STRING INDEXED key array and no numeric array so you won't have an option here of using numeric keys like $row[0]. So fetch_assoc() is better in performance compared to fetch_array() and obviously using named indexes is far better compared to numeric indexes.
                   echo "<tr bgcolor='aquamarine'> <!-- tr Inicio fila row -->
                   <td>".$fila["Id_Profesor"]."</td>";
                   echo "<td>".$fila["Nombre"]."</td>";
                   echo "<td>".$fila["Apellido"]."</td>";
                   echo "<td>".$fila["Experiencia"]."</td>";
                   echo "<td>".$fila["Telefono"]."</td>";
                   echo "<td>".$fila["Sexo"]."</td>";
                   echo "<td>".$fila["LineaDireccion1"]."</td>";
                   echo "<td>".$fila["LineaDireccion2"]."</td>";
                   echo "<td>".$fila["Ciudad"]."</td>";
                   echo "<td>".$fila["Region"]."</td>";
                   echo "<td>".$fila["Pais"]."</td>";
                   echo "<td>".$fila["CodigoPostal"]."</td>";
                   echo "</tr>"; // /tr Fin fila row
               }
               echo "</table>";
               *****************************************/
               mysqli_free_result($resultado); //Siempre se debe liberar el resultado con mysqli_free_result() cuando el objeto del resultado ya no es necesario.
               //UPDATE
               //if(isset($_POST['accion']) && $_POST['accion'] == 'modificar_profesor'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton MODIFICAR_PROFESOR
                  //modificarProfesor();
               //echo "nombre=" . $nombre;
               //echo $msg;
               //}
            }
            else
            {
                echo "No hay registros con la selección especificada.<br>";
                //$msg = "No hay registros con la selección especificada.";
                //$habilitar_mostrar_todos = true;
            }
         }
      //Cierra conexion MySqli
      $conexion->close();
      }
   }
     //$Id_Profesor = $_POST["Id_Profesor"]; // input type="text" name="Id_Profesor"  ;  Guarda el profesor que el usuario ha entrado por teclado en el textbox en una variable.
     //echo "Id_Profesor = " . $Id_Profesor;
} //buscarProfesor()

function modificarProfesor() { //
   global $campos_tabla_array;
   //echo "id_Profesor = " . $_POST["id_Profesor"] . "<br>";
   //echo "nombre=" . $_POST["nombre"] . "<br>";
   //echo "apellido=" . $_POST["apellido"] . "<br>";
   //echo "experiencia=" . $_POST["experiencia"] . "<br>";
   //echo "telefono=" . $_POST["telefono"] . "<br>";
   //echo "sexo=" . $_POST["sexo"] . "<br>";
   //echo "lineaDireccion1=" . $_POST["lineaDireccion1"] . "<br>";
   //echo "lineaDireccion2=" . $_POST["lineaDireccion2"] . "<br>";
   //echo "ciudad=" . $_POST["ciudad"] . "<br>";
   //echo "region=" . $_POST["region"] . "<br>";
   //echo "pais=" . $_POST["pais"] . "<br>";
   //echo "codigoPostal=" . $_POST["codigoPostal"] . "<br>";

   //$msg="";
   //$campos_tabla_array = Array("Id_Profesor", "Nombre", "Apellido", "Experiencia", "Telefono", "Sexo", "LineaDireccion1", "LineaDireccion2", "Ciudad", "Region", "Pais", "CodigoPostal"); // Array
   //$cabeceras_tabla_array = Array("Código de profesor", "Nombre de profesor", "Apellido", "Experiencia", "Formación", "Doctorado", "Teléfono", "Sexo", "Linea 1 Dirección", "Linea 2 Dirección", "Ciudad", "Región", "País", "Código Postal"); // Array

   // Arrancar el servicio MySQL en XAMPP servidor
   $equipo = "localhost";
   $usuario = "root";
   $contra = "";
   $base_datos = "Proyecto";

   @$conexion = new mysqli($equipo, $usuario, $contra, $base_datos); //schema bbdd tienda ;  @delante para que no de errores warnings Unknown database tiendakk
   $error = $conexion->connect_errno; //
   if($error != null){
      echo "Error en la conexión a la BD.<br>";
      $msg = "Error en la conexión a la BD.<br>";
      exit(0); //Finaliza programa
   }
   else
   {
      if(!$conexion) //
      {
          echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
          $msg = "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
      }
      else {
         // Consulta
         //$consulta = "SELECT * FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"]; //Tabla profesores
         //$resultado = $conexion->query($consulta);
         //print mysqli_get_server_info($conexion) . "<BR><BR>"; //Imprime 5.5.5-10.1.30-MariaDB <-- Base de Datos servidor
         //if($resultado == null) { //
         //   $msg = "No existe tabla.";
         //   echo "No existe tabla.";
         //}
         //else {
            //if($resultado->num_rows > 0) { //

    //echo "<table border='1' align='center'>"; // #E6E6E6, turquoise, aquamarine, cyan, pink, cornsilk
    //echo "<tr bgcolor='turquoise'>";
    //foreach ($cabeceras_tabla_array as $campo) { // Array 3 columnas Fechas de tabla cabecera
    //   echo "<th>" . trim($campo) . "</th>"; // Imprime 3 columnas cabeceras headers Fechas de tabla
    //}
    //echo "</tr>";
    //while ($fila = $resultado->fetch_assoc()) { // array asociativo mas rapido que fetch_array() xq solo puedes acceder por clave, en cambio fetch_array() puedes acceder por indice o por clave y gasta mas recursos.
    //Diferencia entre fetch_assoc() y fetch_array(): fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]. And fetch_assoc() will return STRING INDEXED key array and no numeric array so you won't have an option here of using numeric keys like $row[0]. So fetch_assoc() is better in performance compared to fetch_array() and obviously using named indexes is far better compared to numeric indexes.
    //   Ver pgm086.php input table Tabla de entrada si varios registros
    //    echo "<tr bgcolor='aquamarine'>"; // tr Inicio fila row
    //    echo '<td><input type="text" value="' . $fila["Id_Profesor"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Nombre"] . '" name="nombre"></td>';
    //    echo '<td><input type="text" value="' . $fila["Apellido"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Experiencia"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Telefono"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Sexo"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["LineaDireccion1"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["LineaDireccion2"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Ciudad"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Region"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["Pais"] . '"></td>';
    //    echo '<td><input type="text" value="' . $fila["CodigoPostal"] . '"></td>';
    //    //$msg = "nombre=" . $nombre;
    //}
    //echo "</tr></table>";

    //echo "<input type='hidden' name='accion' value='modificar_profesor'>"; // hidden sirve para if(isset($_POST['accion']) && $_POST['accion'] == 'modificar_profesor'){

    //echo "<input type='submit' value='Modificar profesor' name='modificar_profesor'> <br><br>"; // Boton

                /********************************
                $resultado = $conexion->query($consulta); //Lo vuelvo a hacer para pruebas, Quitar luego
                echo"<table border='1' align='center'>
                 <tr bgcolor='turquoise'> <!-- #E6E6E6, turquoise, aquamarine, cyan, pink, cornsilk -->
                    <th>Código de profesor</th>
                    <th>Nombre de profesor</th>
                    <th>Apellido</th>
                    <th>Experiencia</th>
                    <th>Formación</th>
                    <th>Doctorado</th>
                    <th>Telefono</th>
                    <th>Sexo</th>
                    <th>Direccion Lin. 1</th>
                    <th>Direccion Lin. 2</th>
                    <th>Ciudad</th>
                    <th>Región</th>
                    <th>País</th>
                    <th>Código Postal</th>
                </tr><tr>";
               while ($fila = $resultado->fetch_assoc()) { // array asociativo mas rapido que fetch_array() xq solo puedes acceder por clave, en cambio fetch_array() puedes acceder por indice o por clave y gasta mas recursos.
               //Diferencia entre fetch_assoc() y fetch_array(): fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]. And fetch_assoc() will return STRING INDEXED key array and no numeric array so you won't have an option here of using numeric keys like $row[0]. So fetch_assoc() is better in performance compared to fetch_array() and obviously using named indexes is far better compared to numeric indexes.
                   echo "<tr bgcolor='aquamarine'> <!-- tr Inicio fila row -->
                   <td>".$fila["Id_Profesor"]."</td>";
                   echo "<td>".$fila["Nombre"]."</td>";
                   echo "<td>".$fila["Apellido"]."</td>";
                   echo "<td>".$fila["Experiencia"]."</td>";
                   echo "<td>".$fila["Telefono"]."</td>";
                   echo "<td>".$fila["Sexo"]."</td>";
                   echo "<td>".$fila["LineaDireccion1"]."</td>";
                   echo "<td>".$fila["LineaDireccion2"]."</td>";
                   echo "<td>".$fila["Ciudad"]."</td>";
                   echo "<td>".$fila["Region"]."</td>";
                   echo "<td>".$fila["Pais"]."</td>";
                   echo "<td>".$fila["CodigoPostal"]."</td>";
                   echo "</tr>"; // /tr Fin fila row
               }
               echo "</table>";
               *****************************************/
               //echo "<br>";
               //echo "count(campos_tabla_array) = " . count($campos_tabla_array) . "<br>";
               //echo "_POST[id_Profesor_1] = " . $_POST["id_Profesor_1"] . "<br>";
               //echo "_POST[nombre_1] = " . $_POST["nombre_1"] . "<br>";
               //echo "_POST[apellido_1] = " . $_POST["apellido_1"] . "<br>";
               $contador = 1;
               foreach ($_POST as $k => $v){ // OJO foreach _POST Clave Valor <--> Clave = NYC_value1_01/01/2012 Valor = 1 ; 2 input text CabeceraLinea CabeceraColumna
                  $input = explode("_", $k); //explode Convierte un string a un array eliminando separador _  ; $input es el array con_value1_ _value2_
                  if ($k != "submit" && $k != "hidden" && $input[0] != "accion" && $input[0] != "modificar") {
                      // split the form input on _
                      //echo "input[0]: " . $input[0] . "<br>";
                      //echo "Value: " . $v . "<br>";
                      //echo "k = " . $k . "<br>";
                      //echo "Value: " . $k[2] . "<br>";
                      //echo "_POST[id_Profesor]: " . $_POST["id_Profesor_1"] . "<br>";
                      //$cod = "id_Profesor_" . $_POST["id_Profesor_1"];
                      //$c = "id_Profesor_" . $_POST["id_Profesor_1"];
                      //$cod = "id_Profesor_" . $v;
                      //echo "_POST[id_Profesor_=" . $_POST[$cod] . "<br>";
                      //echo "_POST[nombre]: " . $_POST["nombre_1"] . "<br>";
                      //echo "input[1]: " . $input[1] . "<br>;
                      //echo "<BR>Region: " . $input[0]; //Imprime Region: NYC
                      //echo "<BR>Date: " . $input[2]; //Imprime 01/01/2012
                      //if($input[1] == "value1"){
                      //    echo "<BR>Value 1: " . $v; //Imprime Value 1: 1
                      //}
                      //elseif($input[1] == "value2"){
                      //     echo "<BR>Value 2: " . $v; //Imprime Value 2: 2
                      //}
                  }
                  echo "<br/>";
                  if ($contador == count($campos_tabla_array)) {
                     $cod = substr(strrchr($k, "_"), 1); // En la ultima posicion está el cod profesor ; strrchr Busca la última aparición de un caracter en un string
                     //$cod = substr ($k, strlen($k) - 1, strlen($k)); // substring (string, posicion_desde, posicion_hasta) ; strlen($) Longit string
                     //echo "cod = " . $cod . "<br>";
                     $consulta = "UPDATE PROFESORES SET Id_Profesor = " . $_POST["id_Profesor_" . $cod] . ", " .
                     //$consulta = "UPDATE PROFESORES1 SET Id_Profesor = " . $_POST["id_Profesor_" . $cod] . ", " .
                     "Nombre = '" . $_POST["nombre_" . $cod] . "', " .
                     "Apellido = '" . $_POST["apellido_" . $cod] . "', " .
                     "Experiencia = " . $_POST["experiencia_" . $cod] . ", " .
                     "Formacion = '" . $_POST["formacion_" . $cod] . "', " .
                     "Doctorado = " . $_POST["doctorado_" . $cod] . ", " .
                     "Telefono = '" . $_POST["telefono_" . $cod] . "', " .
                     "Sexo = '" . $_POST["sexo_" . $cod] . "', " .
                     "LineaDireccion1 = '" . $_POST["lineaDireccion1_" . $cod] . "', " .
                     "LineaDireccion2 = '" . $_POST["lineaDireccion2_" . $cod] . "', " .
                     "Ciudad = '" . $_POST["ciudad_" . $cod] . "', " .
                     "Region = '" . $_POST["region_" . $cod] . "', " .
                     "Pais = '" . $_POST["pais_" . $cod] . "', " .
                     "CodigoPostal = '" . $_POST["codigoPostal_" . $cod] . "' " .
                     "WHERE Id_Profesor = " . $_POST["id_Profesor_" . $cod];
                     echo $consulta . "<br>";
                     $resultado = $conexion->query($consulta);
                     //echo "resultado = " . $resultado . "<br>";
                     if($conexion->affected_rows < 1) {
                     //if(!$resultado){
                        echo "No se ha podido actualizar el registro con los datos especificados.";
                     }
                     //mysqli_free_result($resultado); //Siempre se debe liberar el resultado con mysqli_free_result() cuando el objeto del resultado ya no es necesario. Creo que mysqli_free_result sólo funciona si has hecho antes $fila = $resultado->fetch_assoc().
                     $contador = 1;
                  }
                  else {
                     $contador++;
                  }
               }

               //mysqli_free_result($resultado); //Siempre se debe liberar el resultado con mysqli_free_result() cuando el objeto del resultado ya no es necesario.
               //UPDATE
               //if(isset($_POST['accion']) && $_POST['accion'] == 'modificar_profesor'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton MODIFICAR_PROFESOR
                  //modificarProfesor();
               //echo "nombre=" . $nombre;
               //echo $msg;
               //}
               /****
               $consulta = "UPDATE PROFESORES1 SET Id_Profesor = " . $_POST["id_Profesor"] . ", " .
               "Nombre = '" . $_POST["nombre"] . "', " .
               "Apellido = '" . $_POST["apellido"] . "', " .
               "Experiencia = " . $_POST["experiencia"] . ", " .
               "Telefono = '" . $_POST["telefono"] . "', " .
               "Sexo = '" . $_POST["sexo"] . "', " .
               "LineaDireccion1 = '" . $_POST["lineaDireccion1"] . "', " .
               "LineaDireccion2 = '" . $_POST["lineaDireccion2"] . "', " .
               "Ciudad = '" . $_POST["ciudad"] . "', " .
               "Region = '" . $_POST["region"] . "', " .
               "Pais = '" . $_POST["pais"] . "', " .
               "CodigoPostal = '" . $_POST["codigoPostal"] . "' " .
               "WHERE Id_Profesor = " . $_POST["id_Profesor"];
               ****/
               //echo $consulta . "<br>";
               //$resultado = $conexion->query($consulta);
               //mysqli_free_result($resultado); //Siempre se debe liberar el resultado con mysqli_free_result() cuando el objeto del resultado ya no es necesario.
            //}
            //else
            //{
            //    echo "No hay registros con la selección especificada.";
            //    $msg = "No hay registros con la selección especificada.";
            //}
      }
      //Cierra conexion MySqli
      $conexion->close();
   }
} //modificarProfesor()

function eliminarProfesor() {
   // Arrancar el servicio MySQL en XAMPP servidor
   $equipo = "localhost";
   $usuario = "root";
   $contra = "";
   $base_datos = "Proyecto";

   $BD = new mysqli($equipo, $usuario, $contra, $base_datos); //schema bbdd FUNCIONA  ;  @delante para que no de errores warnings ed si la tabla no existe da warning
   $error = $BD->connect_errno; //Funciona
   if($error != null){ //
      echo "Error en la conexión a la BD.<br>";
      $msg = "Error en la conexión a la BD.<br>";
      exit(0); //Finaliza programa
   }
   else
   {
      // DELETE
      $delete = "DELETE FROM PROFESORES WHERE Id_Profesor = " . $_POST["Id_Profesor"];
      //$delete = "DELETE FROM PROFESORES1 WHERE Id_Profesor = " . $_POST["Id_Profesor"];
      $consulta = $BD->query($delete); //Tabla profesores ; true ok
      if($consulta) { //Funciona
         if($BD->affected_rows > 0) { //Funciona
            print "<p>Se han borrado correctamente " . $BD->affected_rows . " registros.</p>"; // Funciona
            $msg = "<p>Se han borrado correctamente " . $BD->affected_rows . " registros.</p>"; // Funciona
         }
         if($BD->affected_rows == 0) { //Funciona
            print "<p>No se ha borrado ningún registro con la seleccion especificada.</p>"; // Funciona
            //$msg = "<p>No se ha borrado ningún registro con la seleccion especificada.</p>"; // Funciona
         }
      }
      else {
         print "<p>No existe la tabla.</p>"; // Funciona
         //$msg = "<p>No existe la tabla.</p>"; // Funciona
      }
      $BD->close();
   }
} // eliminarProfesor()

?>

<?php
echo "<!DOCTYPE html>" . "\n";
echo "<html>" . "\n";
echo "<head>" . "\n";
echo "<meta charset='UTF-8'>" . "\n";
echo "<title>Gestión de Instituto IFP - Control de faltas de asistencia por UF</title>" . "\n";
echo "<!-- title>Instituto Sant Francesc - Control de faltas de asistencia por UF</title -->" . "\n";
echo "<link rel='stylesheet' href='Proyecto_Instituto_CSS/Proyecto_Instituto_Estilos.css'>" . "\n";
echo "</head>" . "\n";
echo "<body class='body_1'>" . "\n";
echo "<p class='color_azul' align=right>Logged in Usuario: " . $_SESSION["nombre"]; // $_SESSION Corchete  ; Muestra session nombre guardado en control.php
echo "<br />" . "\n";
echo "<a href='salir.php'>Cerrar Sesion</a> <!-- Link a salir.php --> </p>" . "\n";
echo "<br />" . "\n";
echo "<FONT COLOR=purple size=4>" . "\n";
echo "<center>" . "\n";
echo "<img src='Proyecto_Instituto_Imagenes/IFP.jpg' /> <!-- Imagen. -->" . "\n";
echo "<!-- h5 id='font_size_1' class='color_azul h_5'>IFP</h5> <!-- Asigno varias clases en un mismo elemento: Ambas dentro de los mismas comillas separadas por espacio -->" . "\n";
echo "<h5 id='font_size_1' class='color_purpura h_5'>Control de faltas de asistencia por UF</h4> <!-- Asigno varias clases en un mismo elemento: Ambas dentro de los mismas comillas separadas por espacio -->" . "\n";
echo "<!-- h4 id='font_size_1'>Instituto Sant Francesc - Control de faltas de asistencia por UF</h4 -->" . "\n";
echo "<p align=right><a href='Proyecto_Instituto.html'><FONT size=4 color=green>Inicio</FONT></a></p> <!-- Enlace link mediante texto en la misma pestaña , Primero el link y despues el texto -->" . "\n";
echo "<p id='font_size_2'><u>Mantenimiento de profesores</u></p>" . "\n";
echo "</center>" . "\n";
echo "</FONT>" . "\n";

echo "<label>" . "\n";
                //if (!$_POST){ // Si no ha pulsado clicado ningun boton
                //   echo "<b>Mensaje inicial</b><br><br>"; //
                //}
                echo $msg;
echo "</label>" . "\n";


echo "<form method='POST' action=" . $_SERVER['PHP_SELF'] . ">" . "\n";
echo "<input type='hidden' name='accion' value='mostrar_todos'> <!-- hidden sirve para if(isset(_POST['name=accion']) && _POST['name=accion'] == 'value=mostrar_todos'){ -->" . "\n";
echo "<input type='hidden' name='msg' value=" . htmlspecialchars(serialize($msg)) . " /> <!-- OJO unserialize(_POST['clase'])  ;  Google: storing php objects on form -> https://stackoverflow.com/questions/4842140/storing-php-objects-on-html-form-element-and-passing-php-objects-through-get-met -->" . "\n";
echo "<input type='submit' value='Mostrar todos' class='color_azul' /><br> <!-- Boton -->" . "\n";
echo "</form>" . "\n";

?>
<?php
//OJO Pongo las llamadas a las funciones dentro del primer form para que los echo's salgan detras de la cabecera
if (!$_POST){ // Si no ha pulsado clicado ningun boton
   //$msg = "";
}
else{ // Si ha pulsado clicado ningun boton
   //$msg = unserialize($_POST['msg']); // OJO unserialize($_POST['clase'])  ;  Google: storing php objects on form --> https://stackoverflow.com/questions/4842140/storing-php-objects-on-html-form-element-and-passing-php-objects-through-get-met
   if(isset($_POST['accion']) && $_POST['accion'] == 'mostrar_todos'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton MOSTRAR_TODOS
      mostrarTodosProfesores();
   }
   if(isset($_POST['accion']) && $_POST['accion'] == 'alta_profesor'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton ALTA_PROFESOR
      altaProfesor();
   }
   if(isset($_POST['accion']) && $_POST['accion'] == 'buscar_profesor'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton BUSCAR_PROFESOR
      if($_POST["Id_Profesor"] || $_POST["Nombre"] || $_POST["Apellido"] || $_POST["Experiencia"]) {
         buscarProfesor();
      }
      else {
         //echo "Introducir código de profesor.<br>";
         echo "Introducir el código de profesor, nombre de profesor ó nombre de contacto.<br>";
      }
   }
   if(isset($_POST['accion']) && $_POST['accion'] == 'eliminar_profesor'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton ELIMINAR_PROFESOR
      eliminarProfesor();
   }
}
?>
<?php
/*
   if(isset($_POST['accion']) && $_POST['accion'] == 'buscar_profesor'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton BUSCAR_PROFESOR
   //if(isset($_POST['accion']) && $_POST['accion'] == 'buscar_profesor' && $habilitar_mostrar_todos){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton BUSCAR_PROFESOR
      echo '<input type="submit" value="Mostrar todos" disabled /><br><br> <!-- Boton -->';
   }
   else {
      echo '<input type="submit" value="Mostrar todos" /><br><br> <!-- Boton -->';
   }
*/

/*       <!--
       <form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
          Código de Profesor: <input type="text" name="Id_Profesor"> <!-- id es para el foreach posterior
          <input type="hidden" name="accion" value="buscar_profesor"> // hidden sirve para if(isset($_POST['accion']) && $_POST['accion'] == 'name'){
          <input type="hidden" name="msg" value="<?php echo htmlspecialchars(serialize($msg), ENT_QUOTES); ?>" /> <!--  // OJO unserialize($_POST['clase'])  ;  Google: storing php objects on form -> https://stackoverflow.com/questions/4842140/storing-php-objects-on-html-form-element-and-passing-php-objects-through-get-met
          <input type="submit" value="Bus" /><br><br> <!-- Boton
       </form>
       --> */

echo "<form method='POST' action=" . $_SERVER['PHP_SELF'] . ">" . "\n";
echo "<br><input type='hidden' name='accion' value='alta_profesor'> <!-- hidden sirve para if(isset(_POST['name=accion']) && _POST['name=accion'] == 'value=alta_profesor'){ -->" . "\n";
echo "<input type='hidden' name='msg' value=" . htmlspecialchars(serialize($msg), ENT_QUOTES) . " />" . "\n"; // <!-- OJO unserialize(_POST['clase'])  ;  Google: storing php objects on form -> https://stackoverflow.com/questions/4842140/storing-php-objects-on-html-form-element-and-passing-php-objects-through-get-met -->
echo "<input type='submit' value='Alta de profesor' class='color_verde' /><br><br> <!-- Boton -->" . "\n";
echo "</form>" . "\n";

   if(isset($_POST['accion']) && $_POST['accion'] == 'alta_profesor_1'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton ALTA_PROFESOR_1
      altaProfesor_1(); //Llamada
   }

echo "<form method='POST' action=" . $_SERVER["PHP_SELF"] . ">" . "\n";
echo "<!-- form name='buscar_profesor_form' id='buscar_profesor_form' method='post' action='' -->" . "\n";
echo "Código de profesor: <input type='text' name='Id_Profesor' size='5'> <!-- id es para el foreach posterior -->" . "\n";
echo "&nbsp; Nombre de profesor: <input type='text' name='Nombre'> <!-- -->" . "\n";
echo "&nbsp; Apellido: <input type='text' name='Apellido'> <!-- -->" . "\n";
echo "&nbsp; Experiencia: <input type='text' name='Experiencia'> &nbsp; <!-- -->" . "\n";

echo "<input type='hidden' name='accion' value='buscar_profesor'> <!-- hidden sirve para if(isset(_POST['name=accion']) && _POST['name=accion'] == 'value=buscar_profesor'){  -->" . "\n";
echo "<input type='hidden' name='msg' value='" . htmlspecialchars(serialize($msg), ENT_QUOTES) . "' /> <!-- OJO unserialize(_POST['clase'])  ;  Google: storing php objects on form -> https://stackoverflow.com/questions/4842140/storing-php-objects-on-html-form-element-and-passing-php-objects-through-get-met -->" . "\n";
echo "<input type='submit' value='Buscar profesor' name='buscar_profesor' class='color_marron' /> <br><br> <!-- Boton -->" . "\n";

   if(isset($_POST['accion']) && $_POST['accion'] == 'modificar_profesor'){ // input type="hidden" name="accion"  ;  Si ha pulsado clicado boton MODIFICAR_PROFESOR
      modificarProfesor(); //Llamada
   }

//          <!-- input type="hidden" name="accion1" value="modificar_profesor"> <!-- hidden sirve para if(isset(_POST['name=accion']) && _POST['name=accion'] == 'value=modificar_profesor'){ -->
//          <!-- input type="hidden" name="msg" value="<?php echo htmlspecialchars(serialize($msg), ENT_QUOTES); ?>" /> <!--  // OJO unserialize(_POST['clase'])  ;  Google: storing php objects on form -> https://stackoverflow.com/questions/4842140/storing-php-objects-on-html-form-element-and-passing-php-objects-through-get-met -->
//          <!-- input type="submit" value="Modificar profesor" name="modificar_profesor"> <br><br> <!-- Boton -->
echo "</form>" . "\n";

echo "<form method='POST' action=" . $_SERVER["PHP_SELF"] . ">" . "\n";
echo "Código de profesor: <input type='text' name='Id_Profesor'> &nbsp; <!-- id es para el foreach posterior -->" . "\n";
echo "<input type='hidden' name='accion' value='eliminar_profesor'> <!-- hidden sirve para if(isset(_POST['name=accion']) && _POST['name=accion'] == 'value=eliminar_profesor'){ -->" . "\n";
echo "<input type='hidden' name='msg' value=" . htmlspecialchars(serialize($msg), ENT_QUOTES) . " /> <!--  // OJO unserialize(_POST['clase'])  ;  Google: storing php objects on form -> https://stackoverflow.com/questions/4842140/storing-php-objects-on-html-form-element-and-passing-php-objects-through-get-met -->" . "\n";
echo "<input type='submit' value='Eliminar profesor' class='color_rojo' /><br><br> <!-- Boton -->" . "\n";

echo "<center><FONT size=3 color=blue><br><br><br><br><br>iFP 2019 ©" . "\n";
echo "<address><a href='mailto:ignaciomacipe@ifp.com?subject=Consulta informativa sobre un curso'>ignaciomacipe@ifp.com</a></address> <!-- address mailto email italica -->" . "\n";
echo "</FONT></center>" . "\n";
echo "</form>" . "\n";

echo "</body>" . "\n";
echo "</html>" . "\n";
?>
