<?php
//http://localhost/CI/index.php/ControlUsuarios
//http://localhost/CI/index.php  <-- Modificar $route[default_controller] = 'ControlUsuarios'
//http://localhost/CI  <-- Modificar $route[default_controller] = 'ControlUsuarios'
//UF2.AC01.doc
class ControlUsuarios extends CI_Controller { // OJO Mayuscula
   function index(){
      $this->load->view('home');
   }
}
?>
