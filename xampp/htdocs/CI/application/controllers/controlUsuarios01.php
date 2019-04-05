<?php
//http://localhost/CI/index.php/ControlUsuarios01
//http://localhost/CI/index.php  <-- Modificar $route[default_controller] = 'ControlUsuarios01'
//http://localhost/CI  <-- Modificar $route[default_controller] = 'ControlUsuarios01'
//UF2.AC01.doc

defined('BASEPATH') OR exit('No direct script access allowed');
class ControlUsuarios01 extends Ci_Controller { // OJO Mayuscula
   function index(){
      //cargo el modelo de usuarios
      $this->load->model('tusuarios'); // OJO $this->load->model

      //llamo al método listar usuarios
      $ListadoUsuarios = $this->tusuarios->listar_usuarios(); // OJO function listar_usuarios en tusuarios.php

      //creo el array con datos de configuración para la vista
      $datos_vista = array('rs_usuarios' => $ListadoUsuarios); // OJO rs_usuarios foreach vista home01

      $this->load->view('home01', $datos_vista); // OJO $this->load->view ; D:\xampp\htdocs\CI\application\views\home01.php
   }
}
?>
