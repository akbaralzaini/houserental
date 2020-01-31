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

		$data['jumlahr']= $this->db->get('rumah')->num_rows();
		
		$this->load->view('pemilik/dasboard',$data);
	}

	public function logout()
	{
		session_unset();
		session_destroy();

		redirect('login/loginpemilik');
	}

	
	
    
    public function profil()
	{
		$data['pemilik'] = $this->Usermodel->getpemilik(array('id_user'=>$_SESSION['iduserpemilik']))->result();
		$this->load->view('pemilik/profil',$data);
	}

	public function datarumah()
	{
		$data['title'] = "Data rumah";
		$id_pemilik = $_SESSION['idpemilik'];
		$data['rumah'] = $this->Rumahmodel->getrumah($id_pemilik)->result();
		$this->load->view('pemilik/daftarrumah',$data);
	}

	public function tambahrumah()
	{
		$this->load->view('pemilik/formrumah');
	}

	public function addrumah()
	{
		
		if(isset($_POST['submit'])){
			$foto = array();
			$i = 0;
			foreach ($_FILES['file']['name'] as $filename) {
				$uploaddir= 'asset/img/rumah/';
				$alamatfile=$uploaddir.$filename;
				array_push($foto,$alamatfile);
				move_uploaded_file($_FILES['file']['tmp_name'][$i],$alamatfile);
				$i++;
			}
		}
		$home = array('id_pemilik' => $_SESSION['idpemilik'], 
				'nama_rumah'=>$_POST['nama'],
				'alamat'=>$_POST['alamat'],
				'harga'=>$_POST['harga'], 
				'luas_bangunan'=>$_POST['luas'],
				'listrik'=>$_POST['listrik'],
				'jumlah_kamar'=>$_POST['kamar'],
				'air'=>$_POST['air'],
				'lokasi'=> serialize($_POST['lokasi']),
				'image' => serialize($foto),
				'longitude' => $_POST['lng'],
				'latitude' => $_POST['lat']);
				
		$this->Rumahmodel->createrumah($home);

		redirect(base_url().'pemilik/datarumah');
	}

	public function rumah()
	{
		$id = $_GET['id'];
		$rumah = $id;

		$data['rumah'] = $this->Rumahmodel->getrumahdetail($rumah)->result();

		$this->load->view('pemilik/rumahdetail',$data);
	}

	public function updaterumah()
	{
		$id_rumah = $_GET['id_rumah'];
		$this->db->where('id_rumah',$id_rumah);
		$data['rumah']=$this->db->get('rumah')->result();

		$this->load->view('pemilik/formupdaterumah',$data);
	}

	public function updatepemilik()
	{
		$id = $_GET['id_p'];

		$pemilik = array('nama' => $_POST['nama'],'alamat' => $_POST['alamat'],'email' => $_POST['email'],'tlp' => $_POST['telpon'] );

		$this->Usermodel->updatepemilik($pemilik,$id);

		redirect('pemilik/profil');
	}

	public function hapus_foto()
	{
		$this->db->where('id_rumah',$_GET['id_rumah']);
		$rumah = $this->db->get('rumah')->result();
		foreach ($rumah as $bb) { $key = $bb; }

		$id_f = $_GET['id_foto'];

		$foto = unserialize($key->image);
		array_splice($foto,$id_f,1);
		$newarray = serialize($foto);
		$fotobaru = array('image' => $newarray );
		
		print_r($foto);

		$this->db->where('id_rumah',$_GET['id_rumah']);
		$this->db->update('rumah',$fotobaru);
	}

	public function actupdaterumah()
	{
		if(isset($_POST['submit'])){
			$this->db->where('id_rumah',$_GET['id_rumah']);
			$rumah = $this->db->get('rumah')->result();
			foreach ($rumah as $bb) { $key = $bb; }

			$foto = unserialize($key->image);
			$i = 0;
			foreach ($_FILES['file']['name'] as $filename) {
				$uploaddir= 'asset/img/rumah/';
				$alamatfile=$uploaddir.$filename;
				array_push($foto,$alamatfile);
				move_uploaded_file($_FILES['file']['tmp_name'][$i],$alamatfile);
				$i++;
			}
		}
		$home = array('id_pemilik' => $_SESSION['idpemilik'], 
				'nama_rumah'=>$_POST['nama'],
				'alamat'=>$_POST['alamat'],
				'harga'=>$_POST['harga'], 
				'luas_bangunan'=>$_POST['luas'],
				'listrik'=>$_POST['listrik'],
				'jumlah_kamar'=>$_POST['kamar'],
				'air'=>$_POST['air'],
				'lokasi'=> serialize($_POST['lokasi']),
				'image' => serialize($foto),
				'longitude' => $_POST['lng'],
				'latitude' => $_POST['lat']);

		$this->db->where('id_rumah',$_GET['id_rumah']);
		$this->db->update('rumah',$home);
		redirect(base_url().'pemilik/datarumah');	
	}
	
	public function deleterumah()
	{
		$this->db->where('id_rumah',$_GET['id_rumah']);
		$this->db->delete('rumah');

		redirect(base_url().'pemilik/datarumah');	
	}
}

