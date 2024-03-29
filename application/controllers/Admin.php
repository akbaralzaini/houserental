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
		$data['jumlahk']= $this->db->get('kreteria')->num_rows();
		$data['jumlahr']= $this->db->get('rumah')->num_rows();
		
		$this->load->view('admin/dasboard',$data);
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
		$id = $_GET['id_rumah'];
		$rumah =$id;

		$data['rumah'] = $this->Rumahmodel->getrumahdetail($rumah)->result();

		$this->load->view('admin/rumahdetail',$data);
	}

	public function verifikasirumah()
	{
		$id_rumah = $_GET['id_r'];

		$this->db->where('id_rumah',$id_rumah);
		$this->db->update('rumah',array('status' => 1 ));

		$this->db->select("id_pemilik");
		$this->db->from("rumah");
		$this->db->where('id_rumah',$id_rumah);
		$dats = $this->db->get()->result_array();

		foreach ($dats as $key => $value) {
			$this->db->insert('notifikasi',array("id_rumah"=>$id_rumah,"id_pemilik"=>$value['id_pemilik']));
		}
		

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
	public function detailkriteria()
	{
		$kd_kreteria = $_GET['kd_kreteria'];
		$data['kereteria'] = $this->db->get_where('kreteria',array('kd_kreteria'=> $kd_kreteria ))->result();
		$cek = $this->db->get_where('kreteria',array('kd_kreteria'=> $kd_kreteria ))->result();
		foreach ($cek as $key ) {
			switch ($key->tipe_pilihan) {
				case '1':
					$data['subkereteria'] = $this->db->get_where('kreteria_pilihan',array('kode_kreteria'=> $kd_kreteria ))->result();
					break;
				case '2':
					$data['subkereteria'] = $this->db->get_where('kreteria_range',array('kode_kreteria'=> $kd_kreteria ))->result();
				break;
				case '3':
					$data['subkereteria'] = $this->db->get_where('kreteria_pilihan',array('kode_kreteria'=> $kd_kreteria ))->result();
				break;
				default:
					# code...
					break;
			}
			
		}
		$this->load->view('admin/detailkriteria',$data);
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

		$this->db->where('kode_kreteria',$kd_kreteria);
		$this->db->delete('kreteria_range');

		$this->db->where('kode_kreteria',$kd_kreteria);
		$this->db->delete('kreteria_pilihan');

		redirect('admin/viewkreteria');
		
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
				$sub = array('kode_kreteria'=>$_POST['kode_kreteria'],'pilihan'=>$pil[$i],'bobot'=>$bobot[$i]);
				echo $bobot[$i];
				$this->db->insert('kreteria_pilihan',$sub);
			}
		}
		
		redirect("admin/viewkreteria");

	}

	public function formupdatekrteria()
	{
		$kd_kreteria = $_GET['kd'];

		$data['kereteria'] = $this->db->get_where('kreteria',array('kd_kreteria'=> $kd_kreteria ))->result();
		$cek = $this->db->get_where('kreteria',array('kd_kreteria'=> $kd_kreteria ))->result();
		foreach ($cek as $key ) {
			switch ($key->tipe_pilihan) {
				case '1':
					$data['subkereteria'] = $this->db->get_where('kreteria_pilihan',array('kode_kreteria'=> $kd_kreteria ))->result();
					break;
				case '2':
					$data['subkereteria'] = $this->db->get_where('kreteria_range',array('kode_kreteria'=> $kd_kreteria ))->result();
				break;
				case '3':
					$data['subkereteria'] = $this->db->get_where('kreteria_pilihan',array('kode_kreteria'=> $kd_kreteria ))->result();
				break;
				default:
					# code...
					break;
			}
			
		}
		$this->load->view('admin/formupdatekretria',$data);
	}

	public function actionupdatekreteria()
	{
		$kreteria = array('kd_kreteria' => $_POST['kode_kreteria'],
						'nama_kreteria' => $_POST['nama_kreteria'],
						'bobot' => $_POST['bobot_kreteria'],
						'tipe_pilihan' => $_POST['tipe_pilihan'] );

		$this->db->where('kd_kreteria',$_POST['kode_kreteria']);
		$this->db->update('kreteria',$kreteria);

		if ($_POST['tipe_pilihan']==1) {
			$this->db->where('kode_kreteria',$_POST['kode_kreteria']);
			$this->db->delete('kreteria_pilihan');


			$pil = $_POST['pilihan'];
			$bobot = $_POST['bobot'];
			for ($i=0; $i < sizeof($pil); $i++) { 
				$sub = array('kode_kreteria'=>$_POST['kode_kreteria'],'pilihan'=>$pil[$i],'bobot'=>$bobot[$i]);
				$this->db->insert('kreteria_pilihan',$sub);
			}
			
		} 
		else if ($_POST['tipe_pilihan']==2) {

			$this->db->where('kode_kreteria',$_POST['kode_kreteria']);
			$this->db->delete('kreteria_range');


			$pil = $_POST['pilihan_range'];
			$dari = $_POST['dari'];
			$sampai = $_POST['sampai'];
			$bobot = $_POST['bobot_range'];
			for ($i=0; $i < sizeof($pil); $i++) { 
				$sub = array('kode_kreteria'=>$_POST['kode_kreteria'],'pilihan'=>$pil[$i],'bobot'=>$bobot[$i],'awal'=>$dari[$i],'akhir'=>$sampai[$i]);
				$this->db->insert('kreteria_range',$sub);
			}
			
		} else {
			$this->db->where('kode_kreteria',$_POST['kode_kreteria']);
			$this->db->delete('kreteria_pilihan');

			$pil = $_POST['pilihan2'];
			$bobot = $_POST['bobot2'];
			for ($i=0; $i < sizeof($pil); $i++) { 
				$sub = array('kode_kreteria'=>$_POST['kode_kreteria'],'pilihan'=>$pil[$i],'bobot'=>$bobot[$i]);
				$this->db->insert('kreteria_pilihan',$sub);
			}
		}
		
		redirect("admin/viewkreteria");

	}

	#</kelola kreteria>----------------------------------------------------------------------------------------------------
}

