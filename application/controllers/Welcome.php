<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	  {
	    parent::__construct();
      $this->load->library('email');
      $this->load->helper('url');
	  }

	public function index()
	{
		$this->load->view('index');
	}

	public function aviso(){
		$this->load->view('aviso-de-privacidad');
	}
	public function gracias(){
		$this->load->helper('url');
		$datos=$_POST;
		if(!empty($datos)) {
      $this->validarDatos($datos);
			$this->enviarCorreov($datos);
			$this->load->view('gracias');
      //$this->load->limpiarDatos($datos);
		}else{
			$this->load->view('gracias');
		}
	}

	 public function NotFound(){
    $data['page'] = "notfound";
    $this->load->view('notfound');
  	}

  public function validarDatos($datos)
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nombre', 'nombre', 'required', array(
      'required' => 'El campo nombre es requerido'
    ));
    $this->form_validation->set_rules('empresa', 'empresa', 'required', array(
      'required' => 'El campo empresa es requerido'
    ));
    $this->form_validation->set_rules('correo', 'correo', 'required|valid_email', array(
      'required' => 'El campo correo es requerido',
      'valid_emai' => 'Debes ingresar un correo valido'
    ));
    $this->form_validation->set_rules('telefono', 'telefono', 'required|integer', array(
      'required' => 'El campo telefono es requerido',
      'integer' => 'El telefono solo debe contener números'
    ));
	$this->form_validation->set_rules('servicio', 'servicio', 'required', array(
		'required' => 'El campo servicio es requerido'
	  ));

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', validation_errors('<li>', '</li>'));
      return false;
    } else {
      return true;
    }
  }

  private function limpiarDatos($datos)
  {

    foreach ($datos as $dato => $value) {
      $datos[$dato] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
      $datos[$dato] = filter_var($value, FILTER_SANITIZE_URL);
      $datos[$dato] = trim($value);
      $datos[$dato] = htmlspecialchars($value);
    }
    return $datos;
  }

  // ENVIAR CORREOS
  public function enviarCorreov($datos){
      $to = "blanca.cruz@olozfera.com";
      $subject = "Nuevo contacto Monlog";
  
      $mensaje = "<p>Nuevo contacto Monlog<p>";
      $mensaje .= "<ul>";
      $campos = array("nombre", "telefono", "correo", "empresa", "servicio", "mensaje", "utm_source", "utm_medium", "utm_campaign", "utm_term", "utm_content");
      foreach ($campos as $value) {
        $mensaje .= "<li>$value: $datos[$value]</li>";
      }
      $mensaje .= "</ul>";
  
      // 
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
    // 
      $headers .= 'From: Olozfera <noreply@monlog.mx>' . "\r\n";
    // $headers .= 'Cc: antonio.luz@olozfera.com' . "\r\n";
      $headers .= 'Cc: blanca.cruz@olozfera.com, antonio.luz@olozfera.com' . "\r\n";
    //$headers .= 'From: blanca.cruz@olozfera.com' . "\r\n";
    mail($to,$subject,$mensaje,$headers);

 }
  // debugMail

  // public function debugMail()
  // {
  //   $configMail =  array(
  //     'charset' => 'utf-8',
  //     'mailtype' => 'html'
  //   );
  //   $this->email->initialize($configMail);
  //   $this->email->from('noreplay@nest.com.mx', 'Notificacion Olozfera');
  //   $this->email->to('luis.mendoza@olozfera.com');
  //   $this->email->subject("test");
  //   $this->email->message("<h1>Prueba áéíóú@ñ</h1>");
  //   $this->email->send();
  // }
  // private function enviarCorreo($datos)
  // {
  //   $mensaje = "<p>Este contacto viene de nest.com.mx/preventa/consultorios </p>";
  //   $mensaje .= "<ul>";
  //   $campos = null;
  //     $campos = array("nombre", "telefono", "correo", "metraje", "utm_source", "utm_medium", "utm_campaign", "utm_term", "utm_content");

  //   foreach ($campos as $value) {
  //     $mensaje .= "<li>$value: $datos[$value]</li>";
  //   }
  //   $mensaje .= "</ul>";

  //   $configMail =  array(
  //     'charset' => 'utf-8',
  //     'mailtype' => 'html'
  //   );
  //   $this->email->initialize($configMail);
  //   $this->email->from('noreplay@nest.com.mx', 'Notificacion Olozfera');
  //     $this->email->to('alejandrog@nest.com.mx, misael@nest.com.mx, adan.soto@olozfera.com');
   
  //   $this->email->cc('blanca.cruz@olozfera.com,antonio.luz@olozfera.com');
  //   $this->email->subject("Nueva contacto F1RST | CARE");
  //   $this->email->message($mensaje);
  //   $this->email->send();
  // }
}
