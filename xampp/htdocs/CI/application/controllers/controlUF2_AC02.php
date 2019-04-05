<?php
//http://localhost/CI/index.php/controlUF2_AC02
//http://localhost/CI/index.php  <-- Modificar $route[default_controller] = 'controlUF2_AC02'
//http://localhost/CI  <-- Modificar $route[default_controller] = 'controlUF2_AC02'
//Modificar database.php: 'database' => 'aplicacion'
/*UF2.AC02.docx:
Proyecto:  
Despu�s de ver vuestros proyectos y trabajos a lo largo del a�o, desde Apple han valorado la opci�n de que se�is vosotros los que cre�is, su nueva web. C�mo ten�is dilatada experiencia en CodeIgniter y en Php, hab�is decidido utilizar este framework. 
La web tendr� una p�gina inicial en la que mostrar�n 4 fotograf�as de los 4 �LTIMOS modelos de sus terminales m�viles. Al clicar sobre cada uno de ellos, mostrar� una peque�a �review� del terminal en concreto mostrando sus principales caracter�sticas.
La web se realizar� con CodeIgniter, siguiendo la estructura MVC vista en clase.
Como m�nimo tiene que mostrar los 4 art�culos.
Como avanzado, que est� la opci�n de volver a la p�gina principal.
No es necesario que est�n almacenados en una base de datos, aunque en caso de hacerlo, se valorar� positivamente.
*/

//Crear Tabla Modelos de terminales m�viles Apple en BD aplicacion (misma que AC01):
// id (int, auto incremental y clave primaria PK)
// modelo (varchar 30)
// nombre (varchar 30)
// fecha_lanzamiento (date)
// descripcion (varchar 100)
// precio (int)
//Recupera terminales m�viles Apple de BD y muestra
//Pon Foto en cada una y a href a Mostrar principales caracter�sticas
//Opci�n de volver a la p�gina principal

defined('BASEPATH') OR exit('No direct script access allowed');
class ControlUF2_AC02 extends Ci_Controller { // OJO Mayuscula Herencia
   function __construct(){ //Constructor de clase
      parent::__construct(); //Constructor del Padre
      $this->load->helper('url'); //OJO No quitar xq da error en base_url('Apple.jpg') en homeUF2_AC02.php ; Eliminar _helper de mihelper_helper () ; D:\xampp\htdocs\CI\application\helpers\mihelper_helper.php ; Primero busca el helper en carpeta Application y si no lo encuentra lo buscar en carpeta System
   }

   function index(){
      //Cargo el modelo de Modelos de terminales m�viles Apple
      $this->load->model('tterminales'); // OJO Cargo $this->load->model ; D:\xampp\htdocs\CI\application\models\tterminales.php ; Database ; Tabla terminales

      //Base de Datos: Obtengo datos:
      $ListadoModelos = $this->tterminales->listar_modelos(); // OJO m�todo function listar_modelos en D:\xampp\htdocs\CI\application\models\tterminales.php ; tabla terminales en bd aplicacion

      /* FUNCIONA
      if($this->input->get()) {
        $id = $this->input->get('id');
          echo '<script type="text/javascript">alert("Id obtenido de GET: ' . $id . '")</script>';

         $datos_vista = array('rs_modelos' => $ListadoModelos, 'rs_parametro' => $id); // OJO foreach rs_modelos vista homeUF2_AC02
         $this->load->view('homeUF2_AC02_01', $datos_vista); // OJO $this->load->view vista ; D:\xampp\htdocs\CI\application\views\homeUF2_AC02.php
      }
      */
      if (isset($_GET['id'])) { //Ha seleccionado un terminal movil ; Ha recibido por URL parametro id
          $id = $_GET['id'];
          //echo '<script type="text/javascript">alert("Id obtenido de GET: ' . $id . '")</script>';

         $datos_vista = array('rs_modelos' => $ListadoModelos, 'rs_parametro' => $id); // OJO foreach rs_modelos vista homeUF2_AC02 ; rs_parametro es el id de la fotografia seleccionada
         $this->load->view('homeUF2_AC02_01', $datos_vista); // OJO $this->load->view vista ; D:\xampp\htdocs\CI\application\views\homeUF2_AC02.php
      }
      else { //No ha seleccionado un terminal movil ; No ha recibido por URL parametro id
         //Vista: Creo array con datos DataBase obtenidos: 
         $datos_vista = array('rs_modelos' => $ListadoModelos); // OJO foreach rs_modelos vista homeUF2_AC02
         $this->load->view('homeUF2_AC02', $datos_vista); // OJO $this->load->view vista ; D:\xampp\htdocs\CI\application\views\homeUF2_AC02.php
      }
   }
}
?>
