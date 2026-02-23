<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ...../Medicos_model.php
class Teste_model extends MY_Model {	
	function __construct(){
		parent::__construct();
		$this->table = 'medicos';
	}
	
	/* Modelar as ações*/
}

?>
