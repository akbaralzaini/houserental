<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumahmodel extends CI_Model {

	public function getallrumah()
	{
		return $this->db->get('rumah');
	}

	public function getrumah($rumah)
	{
		return $this->db->get_where('rumah',$rumah);
    }
    
    public function getallkreteria()
	{
		return $this->db->get('kreteria');
	}
}

