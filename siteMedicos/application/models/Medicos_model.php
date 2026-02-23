<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ...../Medicos_model.php
class Medicos_model extends MY_Model {	
	public function __construct(){
		parent::__construct();
		$this->table = 'medicos';
	}
	
	public function listar(){
		return $this->db->get('medicos')->result();
	}
	
}

?>
