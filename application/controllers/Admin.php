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
		$id = $_GET['id'];
		$rumah = array('id_rumah' => $id );

		$data['rumah'] = $this->Rumahmodel->getrumah($rumah)->result();

		$this->load->view('admin/rumahdetail',$data);
	}

	public function verifikasirumah()
	{
		$id_rumah = $_GET['id_r'];

		$this->db->where('id_rumah',$id_rumah);
		$this->db->update('rumah',array('status' => 1 ));

		redirect('admin/viewrumah');
	}

	public function deleterumah()
	{
		$id_rumah = $_GET['id_r'];

		$this->db->where('id_rumah',$id_rumah);
		$this->db->delete('rumah');

		redirect('admin/viewrumah');
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
	public function deletekreteria()
	{
		$kd_kreteria = $_GET['kd_kreteria'];

		$this->db->where('kd_kreteria',$kd_kreteria);
		$this->db->delete('kreteria');

		redirect('admin/datakreteria');
		
	}
	public function actionkreteria()
	{
		$kreteria = array('kd_kreteria' => $_POST['kode_kreteria'],
						'nama_kreteria' => $_POST['nama_kreteria'],
						'bobot' => $_POST['bobot_kreteria'],
						'tipe_pilihan' => $_POST['tipe_pilihan'] );

		$this->db->insert('kreteria',$kreteria);

		if ($_POST['tipe_pilihan']==1) {
			$pil = $_POST['pilihan'];
			$bobot = $_POST['bobot'];
			for ($i=0; $i < sizeof($pil); $i++) { 
				$sub = array('kode_kreteria'=>$_POST['kode_kreteria'],'pilihan'=>$pil[$i],'bobot'=>$bobot[$i]);
				$this->db->insert('kreteria_pilihan',$sub);
			}
			
		} 
		else if ($_POST['tipe_pilihan']==2) {
			$pil = $_POST['pilihan_range'];
			$dari = $_POST['dari'];
			$sampai = $_POST['sampai'];
			$bobot = $_POST['bobot_range'];
			for ($i=0; $i < sizeof($pil); $i++) { 
				$sub = array('kode_kreteria'=>$_POST['kode_kreteria'],'pilihan'=>$pil[$i],'bobot'=>$bobot[$i],'awal'=>$dari[$i],'akhir'=>$sampai[$i]);
				$this->db->insert('kreteria_range',$sub);
			}
			
		} else {
			$pil = $_POST['pilihan2'];
			$bobot = $_POST['bobot2'];
			for ($i=0; $i < sizeof($pil); $i++) { 
				$sub = array('kode_kreteria'=>$_POST['kode_kreteria'],'pilihan'=>$pil[$i],'bobot'=>$bobot);
				$this->db->insert('kreteria_pilihan',$sub);
			}
		}
		
		redirect("admin/viewkreteria");

	}
	#</kelola kreteria>----------------------------------------------------------------------------------------------------
}

