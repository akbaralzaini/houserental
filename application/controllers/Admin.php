<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel');
		$this->load->model('Rumahmodel');
		if ($_SESSION['level']!= 1) {
			redirect('Login/loginadmin');
		}
		
	} 
	
	# <fungsi dasar >
	public function index()
	{
		$this->load->view('admin/dasboard');
	}

	public function logout()
	{
		session_destroy();
		session_unset();

		redirect('login/loginadmin');
	}

	#</fungsi dasar>----------------------------------------------------------------------------------------------------


	# <kelola user>

	public function useradmin()
	{
		$data['user'] = $this->Usermodel->getuser(array('level' => 1))->result();
		$this->load->view('admin/dataadmin',$data);
	}
	public function userpemilik()
	{
		$data['user'] = $this->Usermodel->getuser(array('level' => 2))->result();
		$this->load->view('admin/datapemilik',$data);
	}
	public function userpengguna()
	{
		$data['user'] = $this->Usermodel->getuser(array('level' => 3))->result();
		$this->load->view('datapengguna',$data);
	}

	# </kelola user>----------------------------------------------------------------------------------------------------

	# <kelola rumah>

	public function viewrumah()
	{
		$data['rumah'] = $this->Rumahmodel->getallrumah()->result();
		$this->load->view('admin/datarumah',$data);
	}

	public function rumah()
	{
		$this->load->view('admin/rumahdetail');
	}

	#</kelola rumah>----------------------------------------------------------------------------------------------------

	#<kelola kreteria>

	public function viewkreteria()
	{
		$data['kreteria'] = $this->Rumahmodel->getallkreteria()->result();
		$this->load->view('admin/datakreteria',$data);
	}

	public function tambahkreteria()
	{
		$this->load->view('admin/formkreteria');
	}

	#</kelola kreteria>----------------------------------------------------------------------------------------------------
}

