<?php
//http://localhost/CI/index.php/Control01
//http://localhost/CI/index.php  <-- Modificar $route[default_controller] = 'ControlUsuarios01'
//http://localhost/CI  <-- Modificar $route[default_controller] = 'ControlUsuarios01'

//https://www.youtube.com/watch?v=NJdEU-Tl1SU
//Tutorial CodeIgniter #11 Modelos
//KKK No funciona

defined('BASEPATH') OR exit('No direct script access allowed');
class Control01 extends Ci_Controller {
   function index(){
   /*
      $data = array('titulo' => 'Home');
      $this->load->view("head", $data); //D:\xampp\htdocs\CI\application\views\home01.php
      $data = array('app' => 'Blog');
      $this->load->view("nav", $data); //D:\xampp\htdocs\CI\application\views\home01.php
      $data = array('aplicacion' => 'Blog', 'descripcion' => 'Bienvenido a mi pa'); //post
      $this->load->view("header", $data); //D:\xampp\htdocs\CI\application\views\home01.php
      */
      $this->load->model('aplicacion'); //post
      $result = $this->aplicacion->listar_usuarios(); //getPost
      /*
      $result = $this->db->get('aplicacion'); //post
      $data = array('consulta' => 'Result');
      $this->load->view("content", $data); //D:\xampp\htdocs\CI\application\views\home01.php
      $this->load->view("footer", $data); //D:\xampp\htdocs\CI\application\views\home01.php
      */
	}
}
?>
