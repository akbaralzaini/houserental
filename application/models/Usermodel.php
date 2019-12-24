<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

	public function getalluser()
	{
		return $this->db->get('user');
	}

	public function getuser($user)
	{
		return $this->db->get_where('user',$user);
	}

	public function createuser($user)
	{
		return $this->db->insert('user',$user);
	}

	public function getpemilik($user)
	{
		return $this->db->get_where('pemilik_kontrakan',$user);
	}

	public function updatepemilik($pemilik,$id)
	{
		$this->db->where('id_pemilik',$id);
		$this->db->update('pemilik_kontrakan',$pemilik);
	}
}

