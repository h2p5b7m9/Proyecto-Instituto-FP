<?php
//http://localhost/CI/index.php/controlProyectoInstitutoAsistencias
//Modelo = DataBase Base de datos
//Se llama tAsistencias porque t=tabla de 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once BASEPATH . 'core/Model.php'; //D:\xampp\htdocs\CI\system\core\Model.php
class TAsistencias extends CI_Model { // OJO Mayusculas ; extends CI_Model carga Database ; Ver D:\xampp\htdocs\application\config\database.php
   function __construct(){ //Constructor
      parent::__construct(); //Constructor del Padre
   }
   function listarAsistencias(){ // OJO $ListaAsistencias = $this->tAsistencias->listarAsistencias() en controlProyectoInstitutoAsistencias.php
      $this->load->database(); // OJO Modificar $db['default'] = array(database=>) en D:\xampp\htdocs\CI\application\config\database.php
      //$this->load->model('model_name', '', TRUE);
      $ssql = "select * from `Asistencias` order by Fecha_Clase desc"; // OJO Ordena por fecha desc=Descendiente para que muestre primero las últimas asistencias de los alumnos
      return $this->db->query($ssql); // OJO
   }
}
?>
