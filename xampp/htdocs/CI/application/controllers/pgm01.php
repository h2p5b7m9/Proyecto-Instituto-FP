<?php
//http://localhost/CI/index.php/pgm01/holaMundo
//http://localhost/CI/index.php/pgm01
defined('BASEPATH') OR exit('No direct script access allowed');

class Pgm01 extends CI_Controller { //Clase en Mayusculas
   function __construct(){ //Constructor
      parent::__construct(); //Constructor del padre
      $this->load->helper('mihelper'); //Eliminar _helper de mihelper_helper () ; D:\xampp\htdocs\CI\application\helpers\mihelper_helper.php ; Primero busca el helper en carpeta Application y si no lo encuentra lo buscar en carpeta System
   }
	public function index() {
		//$this->load->view('01/pgm01_message'); // OJO Carga D:\xampp\htdocs\CI\application\views\01\pgm01_message.php ; Sin .PHP

		$dato['var01'] = 'Hola mundo';
		//$this->load->view('01/pgm01_message', $dato); // OJO Carga D:\xampp\htdocs\CI\application\views\01\pgm01_message.php ; Sin .PHP ; OJO Vistas son .PHP, No .html ; Carpeta 01 en views
		$this->load->view('01/pgm01_message01', $dato); // OJO Carga D:\xampp\htdocs\CI\application\views\01\pgm01_message01.php ; Sin .PHP ; OJO Vistas son .PHP, No .html ; Carpeta 01 en views
	}
	//En CodeIgniter se pueden cargar varias vistas. Esto es similar a lo que hacen otros frameworks como NodeJS o Rails con los templates.
	public function holaMundo() { //Ejecutar en Navegador: http://localhost/CI/index.php/pgm01/holaMundo
		$dato['var01'] = 'Hola mundo';
		//$this->load->view('01/pgm01_message', $dato); // OJO Carga D:\xampp\htdocs\CI\application\views\01\pgm01_message.php ; Sin .PHP ; OJO Vistas son .PHP, No .html ; Carpeta 01 en views
		$this->load->view('01/pgm01_headers'); // OJO Carga D:\xampp\htdocs\CI\application\views\01\pgm01_message.php ; Sin .PHP ; OJO Vistas son .PHP, No .html ; Carpeta 01 en views
		$this->load->view('01/pgm01_message01', $dato); // OJO Carga D:\xampp\htdocs\CI\application\views\01\pgm01_message.php ; Sin .PHP ; OJO Vistas son .PHP, No .html ; Carpeta 01 en views
   }
}
?>
