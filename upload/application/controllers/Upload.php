<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url')); // carrega os helpers
    }

    public function index(){
        $this->load->view('upload_form', array('error' => ' '));
    }

    //regras de upload
    public function do_upload(){
        $config['upload_path'] = FCPATH . 'uploads/'; // defenir uma rota
        $config['allowed_types'] = 'pdf|png|jpg|odt';
        $config['max_size'] = 2048;
        $config['max_width'] = 1920;
        $config['max_height'] = 1080;

        $this->load->library('upload', $config);

		$this->upload->initialize($config); // não sei porquê foi assim que resolveu o erro de file path error. Encontrei no stack overflow


        if ( ! $this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);

        }else{
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }
}

?>