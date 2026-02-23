<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicos extends CI_Controller {
	
	public function medicos(){
		$this->load->view('comuns/footer');
		$this->load->database('medicos');
		$this->load->model('Medicos_model'); // carregar o model
		
		$dados['medicos'] = $this->Medicos_model->listar();
		
		$this->load->view('medicos', $dados);
		
		//$this->load->model('Medicos_model');
		
		//$data['medicos'] = $this->Medicos_model->get_medicos();
		
		//$this->load->view('medicos', $data);
		
		$medicos = $this->Medicos_model->GetAll('nome');
		print_r($medicos);
	}
	
	public function Index(){
		$this->load->model('Medicos_model');
		
		$medicos = $this->Medicos_model->GetAll('nome');
		print_r($medicos);
		$data['medicos'] = $this->contactos_model->Modelar($medicos);
		Modelar($contactos);
		$this->	load->view('medicos_editar', $data);	
	}
	
	public function Save(){
		$medicos = $this->Medicos_model->GetAll('nome');
		$data = [medicos] = $medicos;
		// validação = self::Validation('insert');
		$validacao = self::Validation();
		if($validacao){
			// POST[]
			$medico = $this->input->post();
			$status = $this->Medicos_model->Insert($medico);
			if(!$status){
				$this->session->set_flashdata('error', 'Não foi possível remover o medico.');
			}else{
				$this->session->set_flashdata('error', 'Não foi possível remover o medico.');
			}else{
				$this->session->set_flashdata('sucess', 'Medico removido com sucesso.');
				redirect('base', 'refresh');
			}else{
				$this->session->set_flashdata('error', validation_errors('<p>', '</p>'));
			}
			$this->load->view('contactos_editar');
		}
		
		public function Edit(){
			/*
			para capturar o id devo capturar o 2º segmento
			*/
			$id = $this->uri->segment(2);
			// redirect -> serve para direcionar uma rota
			if(is_null($id))
				redirect('base', 'refresh');
			$this->load->model('Medicos_model');
			
			$medico = $this->Medicos_model->GetById($id);
			//print_r($medico);
			$data['medico'] = $medico;
			$this->load->view('editar', $data);
		}
		
		public function Update(){
			//validação de dados
			$validacao = self::Validation('update');
			if($validacao){
				echo "assad";
				// input->post -> captura os campos do form no metodo POST
				$medico = $this->input->post();
				// Atualiza os dados na BD
				$status = $this->Medicos_model->Update($medico['id'],$medico);
				if(!$status){
					$this->session->set_flashdata('error', 'Não foi possível atualizar o medico.');
				}else{
					$this->session->set_flashdata('success', 'Contato atualizado com sucess.');
					//redirect();
					redirect('base', 'refresh');
				}
			}else{
				$dados['medico'] = $this->input->post();
				$this->session->set_flashdata('error', validation_errors());
			}
			//Carrega a view para edição
			$this->load->view('editar', $dados);
		}
		
		public function Delete(){
			$id = $this->uri->segment(2);
			if(is_null($id))
				redirect('base','refresh');
			$status = $this->Medicos_model->Delete($id);
				if(!$status){
					$this->session->set_flashdata('error', 'Não foi possível remover o medico.');
				}else{
					$this->session->set_flashdata(
					'success', 'Medico foi removido com sucesso.');
				}
				redirect('base', 'refresh');
		}
		
		private function Validation($operacao = 'insert'){
			switch($operacao){
				case 'insert':
					$rules['nome'] = array('trim', 'required', 'min_length[3]');
					$rules['email'] = array('trim', 'required', 'valid_email', 'is_unique[contatos.email]');
				break;
			case 'update':
				$rules['nome'] = array('trim', 'required', 'min_length[3]');
				$rules['email'] = array('trim', 'required', 'valid_email');
				break;
			default:
				$rules['nome'] = array('trim', 'required', 'min_length[3]');
				$rules['email'] = array('trim', 'required', 'valid_email', 'is_unique[contatos.email]');
				break;
			}
			$this->form_validation->set_rules('nome', 'Nome', $rules['nome']);
		$this->form_validation->set_rules('email', 'Email', $rules['email']);
		return $this->form_validation->run();
		}
	}
}