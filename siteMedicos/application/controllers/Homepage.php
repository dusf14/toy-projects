<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	//http://localhost/toy_projects/codeIgniter/siteBolachas/index.php/homepage
	
	public function homepage(){
		//echo "estás na homepage.";
		$this->load->view('comuns/header');
		$this->load->view('homepage');
		$this->load->view('comuns/footer');
	}
	
	public function medicos(){
		$this->load->view('medicos');
		$this->load->view('comuns/footer');
		$this->load->database('medicos'); // carregar a DB
		$this->load->model('Medicos_model'); // carregar o model
	}
	
	public function agendamentos(){
		$this->load->view('agendamentos');
		$this->load->view('comuns/footer');
		$this->load->database('medicos');
		//$this->load->model('agendamentos_model');
	}
	
	public function teste(){
		
		$this->load->database('medicos');
		$this->load->model('Teste_model');
		echo "Conectado ao banco: " . $this->db->database;
	}
}