<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel');
		$this->load->model('Rumahmodel');
		
	} 
	
	public function index()
	{
		$this->db->select("*");
		$this->db->from("ranking");
		$this->db->join("rumah","rumah.id_rumah=ranking.id_rumah");
		$this->db->where("rumah.status",1);
		$this->db->limit(6);
		$data['rumah'] = $this->db->get()->result();
		$this->load->view('lendingpage',$data);
	}

	public function actioncari()
	{
		$this->db->select("*");
		$this->db->from("ranking");
		$this->db->join("rumah"," rumah.id_rumah=ranking.id_rumah");
		$this->db->where("rumah.status",1);
		
		if (isset($_POST['pilihan'])) {
			switch ($_POST['pilihan']) {
				case 1:
					$this->db->where("rumah.harga BETWEEN ".$_POST['harga']);
					$data['rank'] = $this->db->get()->result_array();
					break;
				case 2:
					$this->db->where("rumah.jumlah_kamar",$_POST['jumlah_kamar']);
					$data['rank'] = $this->db->get()->result_array();
				break;
				case 3:
					$this->db->where("rumah.luas_bangunan BETWEEN ".$_POST['luas']);
					$data['rank'] = $this->db->get()->result_array();
				break;
				case 4:
					$this->db->where("rumah.air",$_POST['sumber_air']);
					$data['rank'] = $this->db->get()->result_array();
				break;
				case 5:
					$this->db->where("rumah.listrik",$_POST['listrik']);
					$data['rank'] = $this->db->get()->result_array();
				break;
				default:
					$data['rank'] = $this->db->get()->result_array();
				break;
			}
		}
		else{
			$data['rank'] = $this->db->get()->result_array();
		}

		
		

		$this->load->view('hasilranking',$data);
	}

	public function homedetail()
	{
		$id_rumah = $_GET['id_rumah'];

		$data['rumah'] = $this->Rumahmodel->getrumahdetail($id_rumah)->result();


		$this->load->view('detailrumah',$data);
	}

	

}
