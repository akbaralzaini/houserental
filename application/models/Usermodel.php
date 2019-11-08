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
}

