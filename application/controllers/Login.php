<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel');
	}


	public function loginuser()
	{
		# code...
	}


	//Halamn LogIN admin
	public function loginadmin()
	{
		$this->load->view('admin/login');
	}

	public function actionloginadmin()
	{
		$username= $_POST['username'];
		$password = $_POST['password'];

		$users = array('username' => $username,'password'=>$password );
		$datacek = $this->Usermodel->getuser($users);

		if ($datacek->num_rows()>0) {
			$datauser = $datacek->result();
			$_SESSION['nama'] = $datauser->nama;
			$_SESSION['idadmin'] = $datauser->id_user;
			$_SESSION['level'] = 1;
			redirect('admin/');	
		}
		else{
			redirect('Login/loginadmin?msg=error');
		}
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
}

