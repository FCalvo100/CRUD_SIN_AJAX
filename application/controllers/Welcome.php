<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Persona');
		
	}//end __construct

	public function index()
	{
		$datos['personas'] = $this->Persona->seleccionar_todo();
		$this->load->view('welcome_message', $datos);
	}
	public function agregar() {
		$persona['nombre'] = $this->input->post('nombre');
		$persona['apellido'] = $this->input->post('apellido');
		$persona['genero'] = $this->input->post('genero');
		
		$this->Persona->agregar($persona);
		redirect('welcome');
	}

	public function eliminar($id_persona) {
		$this->Persona->eliminar($id_persona);
		redirect('welcome');
	}

	public function editar($id_persona) {
		$persona['nombre'] = $this->input->post('nombre');
		$persona['apellido'] = $this->input->post('apellido');
		$persona['genero'] = $this->input->post('genero');

		$this->Persona->actualizar($persona, $id_persona);
		redirect('welcome');
	}
}
