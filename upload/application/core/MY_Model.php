<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {	
	var $table;
	function __construct(){
		parent::__construct();
	}
	
	function Insert($data){
		if(!isset($data))
			return false;
		return $this->db->insert($this->table, $data);
	}
	/*
		Recebe id(PK)
		Return array
	*/
	function GetById($id){
		if(is_null($id))
			return false;
		// SELECT nome FROM pessoa WHERE ID =12
		$this->db->where('id', $id); //WHERE ID =12
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0)
			return $query->row_array();
		else
			return null;
	}
	/*
		$sort -> ordena pelo campo
		$order-> tipo de ordenação : ASC Ou DESC
	*/
	function GetAll($sort = 'id', $order= 'asc'){
		// SELECT * FROM contatos ORDER BY nome ASC
		$this->db->order_by($sort,$order);
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0)
			return $query->result_array();
		else
			return null;
	}
	/*
		$int ID
		$data dados update
	*/
	function Update($id, $data){
		if(is_null($id) || !isset($data))
			return false;
		$this->db->where('id', $id);
		return $this->db->update($this->table, $data);
	}
	
	/* 
	$int ID
	*/
	function Delete($id){
		if(is_null($id))
			return false;
		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}
}


















