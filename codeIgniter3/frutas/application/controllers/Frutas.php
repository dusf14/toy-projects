<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frutas extends CI_Controller {

	public function index() {
		$this->load->model('Frutas_model');
		$data['frutas'] = $this->Frutas_model->get_frutas();

		$this->load->view('frutas_view', $data);
	}
}
