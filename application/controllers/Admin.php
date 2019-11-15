<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel');
		$this->load->model('Rumahmodel');
		if (empty($_SESSION['level'])) {
			redirect('Login/loginadmin');
		}
		elseif($_SESSION['level'] != 1){
			redirect('Page');
		}
	}
	
	# <fungsi dasar >
	public function index()
	{
		$this->load->view('admin/home');
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
		$this->load->view('dataadmin',$data);
	}
	public function userpemilik()
	{
		$data['user'] = $this->Usermodel->getuser(array('level' => 2))->result();
		$this->load->view('datapemilik',$data);
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
		$this->load->view('datarumah',$data);
	}

	#</kelola rumah>----------------------------------------------------------------------------------------------------

	#<kelola kreteria>

	public function viewkreteria()
	{
		$data['kereteria'] = $this->Rumahmodel->getallkreteria()->result();
		$this->load->view('datakreteria',$data);
	}

	#</kelola kreteria>----------------------------------------------------------------------------------------------------
}

