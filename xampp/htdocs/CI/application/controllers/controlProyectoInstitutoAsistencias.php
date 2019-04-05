<?php
// http://localhost/CI/index.php
// http://localhost/Proyecto_Instituto_Gestion/Proyecto_Instituto.php
// http://localhost/CI/index.php/controlProyectoInstitutoAsistencias
// Asistencias de alumnos del Proyecto Instituto de FP
// http://localhost/CI/index.php  <-- Modificar $route[default_controller] = 'controlProyectoInstitutoAsistencias'
// http://localhost/CI  <-- Modificar $route[default_controller] = 'controlProyectoInstitutoAsistencias'
/* Ver UF2.AC02.docx:
Proyecto:  
Después de ver vuestros proyectos y trabajos a lo largo del año, desde Apple han valorado la opción de que seáis vosotros los que creéis, su nueva web. Cómo tenéis dilatada experiencia en CodeIgniter y en Php, habéis decidido utilizar este framework. 
La web tendrá una página inicial en la que mostrarán 4 fotografías de los 4 ÚLTIMOS modelos de sus terminales móviles. Al clicar sobre cada uno de ellos, mostrará una pequeña “review” del terminal en concreto mostrando sus principales características.
La web se realizará con CodeIgniter, siguiendo la estructura MVC vista en clase.
Como mínimo tiene que mostrar los 4 artículos.
Como avanzado, que esté la opción de volver a la página principal.
No es necesario que estén almacenados en una base de datos, aunque en caso de hacerlo, se valorará positivamente.
*/
//Crear Tabla Modelos de terminales móviles Apple en BD aplicacion (misma que AC01):
// id (int, auto incremental y clave primaria PK)
// modelo (varchar 30)
// nombre (varchar 30)
// fecha_lanzamiento (date)
// descripcion (varchar 100)
// precio (int)
//Recupera terminales móviles Apple de BD y muestra
//Pon Foto en cada una y a href a Mostrar principales características
//Opción de volver a la página principal

defined('BASEPATH') OR exit('No direct script access allowed');
class ControlProyectoInstitutoAsistencias extends Ci_Controller { // OJO Mayuscula Herencia
   function __construct(){ //Constructor de clase
   parent::debug("controlProyectoInstitutoAsistencias.php - function __construct()");
      parent::__construct(); //Constructor del Padre
      $this->load->helper('url'); //OJO No quitar xq da error en base_url('Apple.jpg') en homeProyectoInstitutoAsistencias.php ; Eliminar _helper de mihelper_helper () ; D:\xampp\htdocs\CI\application\helpers\mihelper_helper.php ; Primero busca el helper en carpeta Application y si no lo encuentra lo buscar en carpeta System
   }

   function index(){
      //Cargo el modelo de Asistencias
      $this->load->model('tAsistencias'); // OJO Cargo $this->load->model ; D:\xampp\htdocs\CI\application\models\tAsistencias.php ; Database ; Tabla Asistencias

      //Base de Datos: Obtengo datos:
      $ListaAsistencias = $this->tAsistencias->listarAsistencias(); // OJO método function listarAsistencias en D:\xampp\htdocs\CI\application\models\tAsistencias.php ; tabla Asistencias en bd proyecto

      /* FUNCIONA
      if($this->input->get()) {
        $id_Asistencia = $this->input->get('id_Asistencia');
          echo '<script type="text/javascript">alert("id_Asistencia obtenido de GET: ' . $id_Asistencia . '")</script>';

         $datos_vista = array('rs_modelos' => $ListaAsistencias, 'rs_parametro' => $id_Asistencia); // OJO foreach rs_modelos vista homeProyectoInstitutoAsistencias
         $this->load->view('homeProyectoInstitutoAsistencias_03', $datos_vista); // OJO $this->load->view vista ; D:\xampp\htdocs\CI\application\views\homeProyectoInstitutoAsistencias_03.php
      }
      */
      if (isset($_GET['id_Asistencia'])) { //Ha seleccionado una asistencia ; Ha recibido por URL parametro id_Asistencia
          $id_Asistencia = $_GET['id_Asistencia'];
          //echo '<script type="text/javascript">alert("id_Asistencia obtenido de GET: ' . $id_Asistencia . '")</script>';

         $datos_vista = array('rs_modelos' => $ListaAsistencias, 'rs_parametro' => $id_Asistencia); // OJO foreach rs_modelos vista homeProyectoInstitutoAsistencias ; rs_parametro es el id_Asistencia seleccionado
         $this->load->view('homeProyectoInstitutoAsistencias_03', $datos_vista); // OJO $this->load->view vista ; D:\xampp\htdocs\CI\application\views\homeProyectoInstitutoAsistencias_03.php
      }
      else { //No ha seleccionado una asistencia ; No ha recibido por URL parametro id_Asistencia
         //Vista: Creo array con datos DataBase obtenidos: 
         $datos_vista = array('rs_modelos' => $ListaAsistencias); // OJO foreach rs_modelos vista homeProyectoInstitutoAsistencias
         //include("../Proyecto_Instituto_Gestion/sesion.php"); // SESSION_START(); Si no session autentificado redirecciona a index.php  ;  Formas incluir código: 1) include(): Copia codigo directam 2) require(): En caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR que detiene el script, mientras que include sólo emite una advertencia E_WARNING lo cual permite continuar el script.  3) require_once(): es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         $this->load->view('homeProyectoInstitutoAsistencias_02', $datos_vista); // OJO $this->load->view vista ; D:\xampp\htdocs\CI\application\views\homeProyectoInstitutoAsistencias_02.php
      }
   }
}
?>
