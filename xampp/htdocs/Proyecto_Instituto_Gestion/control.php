<?php
// http://localhost/Proyecto_Instituto_Gestion/index.php
//Ver pgm093.php, pgm092.php, pgm091.php
//Llamado por index.php
// Copiado de control.php, pgm066.php
// Validar Usuario/password Bucle lectura fichero Usr.txt, si password coincide con fichero autentificar
// Contiene: index.php, control.php, sesion.php, archivo-protegido-1.php, archivo-protegido2.php, salir.php, Proyecto_Instituto.php
// OJO un php puro No permite <!-- Comentario --> antes del <?php
/* UF3.AC01- Ficheros.docx Ejercicio 3
Crea una web, que validará usuarios antes de navegar por ella. Para ello, partiremos del ejemplo de sesiones que vimos en la UF1 (lo tenéis en "temarios y complementos" / "complementos del profesor" / "UF1" / "ejemplos sesiones".
En este ejemplo, solo validaba un usuario que estaba introducido "hardcode" en el código. Haz las modificaciones necesarias para que trabajemos con dos ficheros de la siguiente forma:
- Usr.txt: guardará usuario y contraseña (en distintas líneas).
- Registro.txt: guardará el número de intentos incorrectos de inicio de sesión (registro.txt), de forma que aunque cerremos el navegador no se resetee este número de intentos.
*/

//Variables globales:
$intentos_incorrectos_de_inicio_sesion = ""; // OJO global en la variable que está dentro de cada funcion, pero en la que va fuera No se pone global
$usuario_password_validado = false;
$usuarios_array = array(); // OJO array php sin new  vs  array js con new ;  Array Asociativo par clave_String=>Valor Nombre=>Password

//echo "Usuario a buscar: " . $usuario . "<br>";
//echo "Password a buscar: " . $password . "<br>";
//
//Guarda fichero en array, lee hasta el final del archivo en un bucle. Busca usuario password en array.
function guarda_fichero_en_array(){ //OJO Se tiene definir antes de llamarla si no casca
   $fichero = "Usr.txt"; //Pongo el nombre del fichero a abrir leer en una variable
   $fp = fopen($fichero, "r"); //r=Solo lectura
   $usuario = "";
   //$usuario = "Juan";
   $numero_registro = 1; //Detectar registros Pares
   global $usuarios_array; // OJO  // Array Asociativo par clave_String=>Valor Nombre=>Password ; global en la variable que está dentro de cada funcion, pero en la que va fuera No se pone global
   while (!feof($fp)) { //OJO while (!feof($fp)) ; Bucle de lectura. Lee línea a línea el fichero hasta llegar al final.
      $linea = fgets($fp); // OJO fgets(puntero_de_fichero)
      //echo $linea . "<br />"; //OJO Imprime <BR>, No \n
      if ($numero_registro % 2 == 0){ // Par  ;  % Resto de division
          //echo "$numero_registro es Par<br>";
          $usuarios_array[$usuario] = trim($linea); // Array Asociativo par clave_String=>Valor Nombre=>Password
      }
      else{ //Impar
         //echo "$numero_registro es Impar<br>";
         $usuario = trim($linea);
      }
   $numero_registro++; //Detectar registros Pares
   } //while
   fclose($fp); //Cierra identificador del fichero abierto
   
   //echo "Array:<br>";
   /*
   foreach($usuarios_array as $clave=>$valor) // Array Asociativo par clave_String=>Valor Nombre=>Password
   {
      echo($clave."=>".$valor . "<br>"); // Imprime
   }
   */
   // Buscar si existe usuario
   /*
   if(isset($usuarios_array[$_POST["NUsuario"]])){ //
      //echo("Existe usuario " . $_POST["NUsuario"] . "<br>");
   // Buscar si existe password
      if($usuarios_array[$_POST["NUsuario"]] == $_POST["UPass"]){ // OJO Password se busca solo si ha encontrado usuario en array ;  Existe password
         //echo("Existe password " . $_POST["UPass"] . "<br>");
         $usuario_password_validado = true;
      }
      else { //No existe password
         //echo("No existe password " . $_POST["UPass"] . "<br>");
      }
   }
   else { //No existe usuario
      //echo("No existe usuario " . $_POST["UPass"] . "<br>");
   }
   
   if($usuario_password_validado){
      //echo "Usuario a buscar: " . $_POST["NUsuario"] . "<br>";
      SESSION_START(); //No la pone al principio porque la linea anterior no usa $_SESSION
      $_SESSION["autentificado"] = TRUE; // setea session ; $_SESSION["nombre_cualquiera"]  ;  Validado Usuario/password contraseña  ;  true vs false
      $_SESSION["nombre"] = $_POST["NUsuario"]; // setea session ; $_SESSION["nombre_cualquiera"]
      //$_SESSION["nombre"] = $usuario; // setea session ;
      header("Location: archivo-protegido-1.php"); // header Llama a otro php  ;  Redirecciona a pagina sin enviar parametro ? , envia encabezado sin formato HTTP
   }
      else{ // Usuario/password No validado
         header("Location: index.php?error=si"); // Otro ejemplo: header("Location: http://www.example.com/") ;  Redirección del navegador. Vuelve a pagina inicial enviando parametro ?error=si
   	}
   */
   /*
      if (($_POST["NUsuario"] == "admin") && ($_POST["UPass"] == "1234")){ // index.php: form name="entrada" action="control.php" method="POST"  ;  input type="text" name="NUsuario"  ;   input type="text" name="UPass"   ;   Usuario/password validado admin 1234
      SESSION_START(); //No la pone al principio porque la linea anterior no usa $_SESSION
      $_SESSION["autentificado"] = TRUE; // setea session ; $_SESSION["nombre_cualquiera"]  ;  Validado Usuario/password contraseña  ;  true vs false
      $_SESSION["nombre"] = $_POST["NUsuario"]; // setea session ; $_SESSION["nombre_cualquiera"]
      header("Location: archivo-protegido-1.php"); // header Llama a otro php  ;  Redirecciona a pagina sin enviar parametro ? , envia encabezado sin formato HTTP
   	}
   	else{ // Usuario/password No validado
   		header("Location: index.php?error=si"); // Otro ejemplo: header("Location: http://www.example.com/") ;  Redirección del navegador. Vuelve a pagina inicial enviando parametro ?error=si
   	}
   */
   //return $suma;
}

//Busca valida usuario password en array.
function busca_usuario_password_en_array(){ //OJO Se tiene definir antes de llamarla si no casca
   global $usuario_password_validado; // OJO global en la variable que está dentro de cada funcion, pero en la que va fuera No se pone global
   global $usuarios_array; // Array Asociativo par clave_String=>Valor Nombre=>Password
   
   /*
   echo "Array:<br>";
   foreach($usuarios_array as $clave=>$valor) // Array Asociativo par clave_String=>Valor Nombre=>Password
   {
      echo($clave."=>".$valor . "<br>"); // Imprime
   }
   */
   //echo("POST NUsuario: " . $_POST["NUsuario"] . "<br>");
   // Buscar si existe usuario
   if(isset($usuarios_array[$_POST["NUsuario"]])){ // OJO Si existe en el array asociativo el usuario entrado ;  Array Asociativo par clave_String=>Valor Nombre=>Password
      //echo("Existe usuario " . $_POST["NUsuario"] . "<br>");
   // Buscar si existe password
      if($usuarios_array[$_POST["NUsuario"]] == $_POST["UPass"]){ // OJO Password se busca solo si ha encontrado usuario en array ;  Existe password
         //echo("Existe password " . $_POST["UPass"] . "<br>");
         $usuario_password_validado = true;
      }
      else { //No coincide password
         //echo("No coincide password " . $_POST["UPass"] . "<br>");
      }
   }
   else { //No existe usuario
      //echo("No existe usuario " . $_POST["UPass"] . "<br>");
   }
}

function setea_session(){
//global $usuario_password_validado;
//if($usuario_password_validado){
   //echo "Usuario a buscar: " . $_POST["NUsuario"] . "<br>";
   SESSION_START(); //OJO Parentesis ; No la pone al principio porque la linea anterior no usa $_SESSION
   $_SESSION["autentificado"] = TRUE; // OJO setea $_SESSION[""] Corchetes ; $_SESSION["nombre_cualquiera"]  ;  Validado Usuario/password contraseña  ;  true vs false
   $_SESSION["nombre"] = $_POST["NUsuario"]; // setea session ; $_SESSION["nombre_cualquiera"]
   //$_SESSION["nombre"] = $usuario; // setea session ;
   header("Location: Proyecto_Instituto.php"); // header Llama a otro php  ;  Redirecciona a pagina sin enviar parametro ? , envia encabezado sin formato HTTP
//}
//   else{ // Usuario/password No validado
//      header("Location: index.php?error=si"); // Otro ejemplo: header("Location: http://www.example.com/") ;  Redirección del navegador. Vuelve a pagina inicial enviando parametro ?error=si
//	}
/*
   if (($_POST["NUsuario"] == "admin") && ($_POST["UPass"] == "1234")){ // index.php: form name="entrada" action="control.php" method="POST"  ;  input type="text" name="NUsuario"  ;   input type="text" name="UPass"   ;   Usuario/password validado admin 1234
   SESSION_START(); //No la pone al principio porque la linea anterior no usa $_SESSION
   $_SESSION["autentificado"] = TRUE; // setea session ; $_SESSION["nombre_cualquiera"]  ;  Validado Usuario/password contraseña  ;  true vs false
   $_SESSION["nombre"] = $_POST["NUsuario"]; // setea session ; $_SESSION["nombre_cualquiera"]
   header("Location: Proyecto_Instituto.php"); // header Llama a otro php  ;  Redirecciona a pagina sin enviar parametro ? , envia encabezado sin formato HTTP
	}
	else{ // Usuario/password No validado
		header("Location: index.php?error=si"); // Otro ejemplo: header("Location: http://www.example.com/") ;  Redirección del navegador. Vuelve a pagina inicial enviando parametro ?error=si
	}
*/
//return $suma;
}

// Lee Intento incorrecto de inicio de sesión
function lee_intentos_incorrectos_de_inicio_sesion() { // OJO Function devuelve return pero no se pone tipo delante
   $fichero = "Registro.txt"; //Pongo el nombre del fichero a abrir leer en una variable
   if (file_exists($fichero)) { // OJO file_exists($fichero) Si el fichero existe lo lee, sino luego lo grabará con intentos = 1
      $fp = fopen($fichero, "r"); //$fp identificador de fichero ; r=Sólo para lectura
      global $intentos_incorrectos_de_inicio_sesion; // OJO Se pone global en la variable que está Dentro de cada funcion, pero en la que va fuera No se pone global
      //echo "intentos_incorrectos_de_inicio_sesion = " . $intentos_incorrectos_de_inicio_sesion;
      $intentos_incorrectos_de_inicio_sesion = trim(fgets($fp)); //trim elimina blancos delante detras
      //echo "Intentos incorrectos de inicio de sesión: " . $intentos_incorrectos_de_inicio_sesion . "<br />"; //OJO Imprime <BR>, No \n
      //echo "Intentos incorrectos de inicio de sesión: " . trim($linea) . "<br />"; //OJO Imprime <BR>, No \n
      fclose($fp); //Cierra identificador del fichero abierto
      //return $intentos_incorrectos_de_inicio_sesion;
   }
}

// Actualiza Intentos incorrectos de inicio de sesión. Actualiza fichero registro.txt
function actualiza_intentos_incorrectos_de_inicio_sesion() {
   global $intentos_incorrectos_de_inicio_sesion;
   //echo "intentos_incorrectos_de_inicio_sesion = " . $intentos_incorrectos_de_inicio_sesion . "<br>";
   $fichero = "Registro.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "w"); //w Sólo escritura
   global $intentos_incorrectos_de_inicio_sesion;
   //echo "Intentos incorrectos de inicio de sesión: " . $intentos_incorrectos_de_inicio_sesion . "<br />"; //OJO Imprime <BR>, No \n
   $intentos_incorrectos_de_inicio_sesion++;
   //$intentos_incorrectos_de_inicio_sesion = $intentos_incorrectos_de_inicio_sesion + 1;
   //echo "Intentos incorrectos de inicio de sesión: " . $intentos_incorrectos_de_inicio_sesion . "<br />"; //OJO Imprime <BR>, No \n
   fputs($fp, $intentos_incorrectos_de_inicio_sesion);
   fclose($fp); //Cierra identificador del fichero abierto
}

//busca_usuario_password_en_fichero();
$primera_vez = true; //Primera vez
if ($primera_vez) {
   guarda_fichero_en_array();
   //echo "Lee fichero de numero de intentos incorrectos de inicio sesion.<br>"; //Sólo lee 1 vez el fichero de numero de intentos incorrectos de inicio sesion
   global $intentos_incorrectos_de_inicio_sesion;
   lee_intentos_incorrectos_de_inicio_sesion(); //OJO Funcion Parentesis ; Punto y coma final ;
   //$intentos_incorrectos_de_inicio_sesion = lee_intentos_incorrectos_de_inicio_sesion();
   $primera_vez = false;
}
busca_usuario_password_en_array();
if($usuario_password_validado){
   setea_session();
}
else{ // Usuario/password No validado
   header("Location: index.php?error=si"); // Otro ejemplo: header("Location: http://www.example.com/") ;  Redirección del navegador. Vuelve a pagina inicial enviando parametro ?error=si
}

//actualiza_intentos_incorrectos_de_inicio_sesion($intentos_incorrectos_de_inicio_sesion);
actualiza_intentos_incorrectos_de_inicio_sesion(); //Actualiza fichero registro.txt

?>
