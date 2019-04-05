<?php
//Buscar debug Mío
function debug($lin_debug) //Mío
{
   //debug("public function debug($lin_debug)");
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto
}
?>