<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel');
		$this->load->model('Rumahmodel');
		if ($_SESSION['level']!= 2) {
			redirect('Login/loginpemilik');
		}
	}

	
	public function index()
	{
		$this->load->view('pemilik/dasboard');
    }
    
    public function profil()
	{
		$this->load->view('pemilik/profil');
	}

	public function datarumah()
	{
		$data['title'] = "Data rumah";
		$data['rumah'] = $this->Rumahmodel->getallrumah()->result();
		$this->load->view('pemilik/daftarrumah',$data);
	}

	public function tambahrumah()
	{
		$this->load->view('pemilik/formrumah');
	}
}

