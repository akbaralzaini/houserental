<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel');
	}

	public function actionlogin()
	{
		$username= $_POST['username'];
		$password = $_POST['password'];

		$users = array('username' => $username,'password'=>$password );
		$datacek = $this->Usermodel->getuser($users);

		if ($datacek->num_rows()>0) {
			$datauser = $datacek->result();
			foreach ($datauser as $key) {
				if($key->level == 1){
					$_SESSION['nama'] = $key->nama;
					$_SESSION['idadmin'] = $key->id_user;
					$_SESSION['level'] = 1;
					redirect('admin/');	
				}
				else{
					$_SESSION['nama'] = $key->nama;
					$_SESSION['idpemilik'] = $key->id_user;
					$_SESSION['level'] = 2;
					redirect('pemilik/');	
				}
			}
			
		}
		else{
			redirect('Login/loginadmin?msg=error');
		}
	}

	
	public function loginpemilik()
	{
		$this->load->view('pemilik/login');
	}

	public function registerpemilik()
	{
		$this->load->view('pemilik/register');
	}

	//Halamn LogIN admin
	public function loginadmin()
	{
		$this->load->view('admin/login');
	}

	
	public function index()
	{
		redirect(base_url()."login/loginadmin");
	}

	public function logout()
	{
		session_unset();
		session_destroy();
		redirect("page/");
	}
}

