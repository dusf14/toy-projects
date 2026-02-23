<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frutas_model extends CI_Model {

    public function get_frutas(){
        $query = $this->db->get('frutas'); // traz todas as frutas
        return $query->result(); // retorna todas como um array de objetos
    }
}

?>