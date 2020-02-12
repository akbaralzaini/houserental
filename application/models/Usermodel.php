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
		$this->db->select("*");
		$this->db->from('pemilik_kontrakan');
		$this->db->join('user','pemilik_kontrakan.id_user=user.id_user');
		$this->db->where($user);
		return $this->db->get();
	}

	public function updatepemilik($pemilik,$id)
	{
		$this->db->where('id_pemilik',$id);
		$this->db->update('pemilik_kontrakan',$pemilik);
	}
	public function updateuser($user,$id_user)
	{
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$user);
	}
}

