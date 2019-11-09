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

	public function loginadmin()
	{
		# code...
	}

	public function loginrumah()
	{
		# code...
	}

	public function actionlogin()
	{
		$email = $_GET['email'];
		$password = $_GET['password'];

		$users = array('email' => $email,'password'=>$password );
		$datacek = $this->Usermodel->getuser($users);

		if ($datacek->num_rows()>0) {
			$datauser = $datacek->result();
			switch ($datauser->tipeuser) {
				case 1:
					$_SESSION['nama'] = $datauser->nama;
					$_SESSION['idadmin'] = $datauser->id_user;
					redirect('admin/');
					break;
				case 2:
					$_SESSION['namo'] = $datauser->nama;
					$_SESSION['idrental'] = $datauser->id_user;
					redirect('rental/');
					break;
				case 3:
					$_SESSION['nama'] = $datauser->nama;
					$_SESSION['idpengguna'] = $datauser->id_user;
					redirect('page/');
					break;
				default:
					redirect('Login/loginuser');
					break;
			}
		}


	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}

