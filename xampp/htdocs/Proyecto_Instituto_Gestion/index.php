<!-- http://localhost/Proyecto_Instituto_Gestion/index.php -->
<!-- Copiado de index01.php -->
<!-- Buscar .php -->
<!-- sesiones.zip Profe / sesiones3 -->
<!-- Contiene: index.php, control.php, sesion.php, archivo-protegido-1.php, archivo-protegido2.php, salir.php, Proyecto_Instituto.php -->
<!-- OJO Si lo depuras en Netbeans tienes que llamarlo index.php -->
<!-- UF3.AC01- Ficheros.docx Ejercicio 3
Crea una web, que validará usuarios antes de navegar por ella. Para ello, partiremos del ejemplo de sesiones que vimos en la UF1 (lo tenéis en "temarios y complementos" / "complementos del profesor" / "UF1" / "ejemplos sesiones".
En este ejemplo, solo validaba un usuario que estaba introducido "hardcode" en el código. Haz las modificaciones necesarias para que trabajemos con dos ficheros de la siguiente forma:
- Usr.txt: guardará usuario y contraseña (en distintas líneas).
- Registro.txt: guardará el número de intentos incorrectos de inicio de sesión (registro.txt), de forma que aunque cerremos el navegador no se resetee este número de intentos.
Creo que entra Examen
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Instituto IFP</TITLE>
        <link rel="shortcut icon" href="Proyecto_Instituto_Imagenes/favicon2.ico">
		<style> /* estilo CSS interno */
			form {
				margin:0 auto;
				text-align: center;
				width: 400px;
			}
			h1{
				color: blue;
			}
		</style>
		<link rel='stylesheet' href='Proyecto_Instituto_CSS/Proyecto_Instituto_Estilos.css'>
    </head>
    <body>
		<form name="entrada" action="control.php" method="post"> <!-- form method= action= ; post No get -->
    <center><img src="Proyecto_Instituto_Imagenes/IFP.jpg"> </center>
    <p class='color_azul' align=right> <a href='Proyecto_Instituto.php'>Inicio</a></p> <!-- http://ignaciomacipe.260mb.net -->
			<br /><br />
			<?php
				if(@$_GET['error'] == 'si'){  //$_GET lee parametro llamada recibido en la URL linea de direccion web  ;  control.php devuelve parametro error=si con header("Location: index.php?error=si")  ;  @ elimina warnings
					echo "<h1>Verifica tus datos</h1>"; //Error
				} else {
					echo "<h1>Introduce tus datos</h1>";
				}
			?>

			<label>Usuario: </label><input type="text" name="NUsuario" /> <br /><br /> <!-- label texto fijo literal -->
			<label>Password: </label><input type="text" name="UPass" /> <br /><br />
			<input type="submit" name="BEnviar" value="Entrar" /> <!-- Boton submit/enviar -->
		</form>
 </body>
 </html>
