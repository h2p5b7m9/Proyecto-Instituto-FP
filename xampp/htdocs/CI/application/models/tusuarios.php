<?php
//http://localhost/CI/index.php/ControlUsuarios01
//Se llama tusuarios porque t=tabla usuarios
defined('BASEPATH') OR exit('No direct script access allowed');
class Tusuarios extends CI_Model { // OJO Mayusculas ; extends CI_Model carga database ; Ver D:\xampp\htdocs\application\config\database.php
   function __construct(){
      parent::__construct();
   }
   function listar_usuarios(){ // OJO $ListadoUsuarios = $this->tusuarios->listar_usuarios() en controlUsuarios01.php
      $this->load->database(); // OJO
      //$this->load->model('model_name', '', TRUE);
      $ssql = "select * from usuarios order by id";
      return $this->db->query($ssql); // OJO
   }
}
?>
