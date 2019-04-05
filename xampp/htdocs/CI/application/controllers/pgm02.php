<?php
//http://localhost/CI/index.php/pgm02
defined('BASEPATH') OR exit('No direct script access allowed');

class Pgm02 extends CI_Controller { //Clase en Mayusculas ; Buscar class CI_Controller en D:\xampp\htdocs\CI\system\core\Controller.php
   function __construct(){ //Constructor
   parent::debug("pgm02.php - function __construct()");
      parent::__construct(); //Constructor del padre
      $this->load->helper('mihelper'); //Eliminar _helper de mihelper_helper () ; D:\xampp\htdocs\CI\application\helpers\mihelper_helper.php ; Primero busca el helper en carpeta Application y si no lo encuentra lo busca en carpeta System
   }
	public function index() {
	   //Library
	   //Crea una lista <li>
		$this->load->library('menu', array('Inicio', 'Contacto', 'Cursos', 'Acerca de')); // OJO Carga D:\xampp\htdocs\CI\application\libraries\Menu.php ; Sin .PHP
		$data['mi_menu'] = $this->menu->construirMenu();

		$dato['var01'] = 'Hola mundo';
		$this->load->view('01/pgm02_message01', $data); // OJO Carga D:\xampp\htdocs\CI\application\views\01\pgm02_message01.php ; Sin .PHP ; OJO Vistas son .PHP, No .html ; Carpeta 01 en views
	}
}
?>
