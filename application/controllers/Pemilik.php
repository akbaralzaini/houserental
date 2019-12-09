<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller {

	public function index()
	{
		$this->load->view('pemilik/dasboard');
    }
    
    public function profil()
	{
		$this->load->view('pemilik/profil');
	}
}

