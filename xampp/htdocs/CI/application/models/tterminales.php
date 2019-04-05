<?php
//http://localhost/CI/index.php/controlUF2_AC02
//Modelo = DataBase Base de datos
//Se llama tterminales porque t=tabla de terminales moviles de Apple
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'D:\xampp\htdocs\CI\system\core\Model.php';
class Tterminales extends CI_Model { // OJO Mayusculas ; extends CI_Model carga Database ; Ver D:\xampp\htdocs\application\config\database.php
   function __construct(){ //Constructor
      parent::__construct(); //Constructor del Padre
   }
   function listar_modelos(){ // OJO $ListadoModelos = $this->tterminales->listar_modelos() en controlUf2_ac02.php
      $this->load->database(); // OJO Modificar $db['default'] = array(database=>) en D:\xampp\htdocs\CI\application\config\database.php
      //$this->load->model('model_name', '', TRUE);
      $ssql = "select * from terminales order by fecha_lanzamiento desc"; // OJO Ordena por fecha desc=Descendiente enunciado ejerc dice últimos modelos de terminales móviles Apple
      return $this->db->query($ssql); // OJO
   }
}
?>
