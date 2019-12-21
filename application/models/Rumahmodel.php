<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumahmodel extends CI_Model {

	public function getallrumah()
	{
		$this->db->select("*");
		$this->db->from("rumah");
		$this->db->join("pemilik_kontrakan","pemilik_kontrakan.id_pemilik=rumah.id_pemilik");
		return $this->db->get();
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

