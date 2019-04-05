<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Aplicacion extends CI_Model { // OJO Mayusculas ; extends CI_Model carga database ; Ver D:\xampp\htdocs\application\config\database.php
   function listar_usuarios(){ //getPost
    	return $this->db->get($this->aplicacion);
      //return $this->db->get('aplicacion');
   }
}
?>
