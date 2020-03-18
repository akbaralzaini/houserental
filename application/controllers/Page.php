<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel');
		$this->load->model('Rumahmodel');
		
	} 
	//Pembagi Normalisasi
	function pembagiNM($matrik){

		for($i=0;$i<6;$i++){
			$pangkatdua[$i] = 0;
			for($j=0;$j<sizeof($matrik);$j++){
				$pangkatdua[$i] = $pangkatdua[$i] + pow($matrik[$j][$i],2);
			}
			$pembagi[$i] = sqrt($pangkatdua[$i]);
		}
		return $pembagi;
	}
	
	//Normalisasi
	function Transpose($squareArray) {
	
		if ($squareArray == null) { return null; }
		$rotatedArray = array();
		$r = 0;
	
		foreach($squareArray as $row) {
			$c = 0;
			if (is_array($row)) {
				foreach($row as $cell) { 
					$rotatedArray[$c][$r] = $cell;
					++$c;
				}
			}
			else $rotatedArray[$c][$r] = $row;
			++$r;
		}
		return $rotatedArray;
	}
	
	function JarakIplus($aplus,$bob){
		for ($i=0;$i<sizeof($bob);$i++) {
			$dplus[$i] = 0;
			for($j=0;$j<sizeof($aplus);$j++){
				$dplus[$i] = $dplus[$i] + pow(($aplus[$j] - $bob[$i][$j]),2);
			}
			$dplus[$i] = round(sqrt($dplus[$i]),4);
		}
		return $dplus;
	}
	
	public function index()
	{
		$this->db->where("status",1);
		$this->db->limit(6);
		$data['rumah'] = $this->db->get('rumah')->result();
		$this->load->view('lendingpage',$data);
	}

	public function actioncari()
	{
		if (isset($_POST['pilihan'])) {
			switch ($_POST['pilihan']) {
				case 1:
					$this->db->where("harga BETWEEN ".$_POST['harga']);
					$datarumah = $this->db->get('rumah')->result_array();
					break;
				case 2:
					$this->db->where("jumlah_kamar",$_POST['jumlah_kamar']);
					$datarumah = $this->db->get('rumah')->result_array();
				break;
				case 3:
					$this->db->where("luas_bangunan BETWEEN ".$_POST['luas']);
					$datarumah = $this->db->get('rumah')->result_array();
				break;
				case 4:
					$this->db->where("air",$_POST['sumber_air']);
					$datarumah = $this->db->get('rumah')->result_array();
				break;
				case 5:
					$this->db->where("listrik",$_POST['listrik']);
					$datarumah = $this->db->get('rumah')->result_array();
				break;
				// case 6:
				// 	$this->db->where("jumlah_kamar".$_POST['jumlah kamar']);
				// 	$datarumah = $this->db->get('rumah')->result_array();
				// break;
				default:
					# code...
					break;
			}
		}
		else{
			$datarumah = $this->db->get('rumah')->result_array();
		}
		
		if (sizeof($datarumah)>0) {
			foreach ($datarumah as $key => $value) { 
				//harga 
				if ($value['harga']>=5500000 && $value['harga']<=6700000) {
					$value['harga']=5;
				}
				else if ($value['harga']>=6800000 && $value['harga']<=7900000) {
					$value['harga']=4;
				}
				else if ($value['harga']>=8000000 && $value['harga']<=9100000) {
					$value['harga']=3;
				}
				else if ($value['harga']>=9200000 && $value['harga']<=10300000) {
					$value['harga']=2;
				}
				else if ($value['harga']>=10400000 && $value['harga']<=11500000) {
					$value['harga']=1;
				}
	
				//kamar
				if ($value['jumlah_kamar']>=2 ) {
					$value['jumlah_kamar']=5;
				}else{
					$value['jumlah_kamar']=4;
				}
				
	
				//Luas
				if ($value['luas_bangunan']>=6 && $value['luas_bangunan']<=65) {
					$value['luas_bangunan']=1;
				}
				else if ($value['luas_bangunan']>=66 && $value['luas_bangunan']<=124) {
					$value['luas_bangunan']=2;
				}
				else if ($value['luas_bangunan']>=125 && $value['luas_bangunan']<=183) {
					$value['luas_bangunan']=3;
				}
				else if ($value['luas_bangunan']>=184 && $value['luas_bangunan']<=242) {
					$value['luas_bangunan']=4;
				}
				else if ($value['luas_bangunan']>=243 && $value['luas_bangunan']<=300) {
					$value['luas_bangunan']=5;
				}
	
				//sumber air
				if ($value['air']=="Pdam") {
					$value['air']=5;
				}
				else{
					$value['air']=4;
				}
				
				//listrik
				if ($value['listrik']=="Listrik Prabayar") {
					$value['listrik']=5;
				}
				else{
					$value['listrik']=4;
				}
	
				//lokasi
				$loc = unserialize($value['lokasi']);
				if($loc[0]=='Sekolah/Kampus'){
					$value['lokasi'] = 5;
				}
				else if($loc[0]=='Mall/Pasar'){
					$value['lokasi'] = 5;
				}
				else if($loc[0]=='Kantor'){
					$value['lokasi'] = 5;
				}
				else if($loc[0]=='Rumah Sakit'){
					$value['lokasi'] = 5;
				}
				else{
					$value['lokasi'] = 1;
				}
	
				$Matrik[]=array(
					  $value['harga'],
					  $value['jumlah_kamar'],
					  $value['luas_bangunan'],
					  $value['listrik'],
					  $value['air'],
					  $value['lokasi'] );
			}
	
			$no=1;
			$pembagiNM=$this->pembagiNM($Matrik);
			foreach ($datarumah as $key => $value) { 
				//harga 
				if ($value['harga']>=5500000 && $value['harga']<=6700000) {
					$value['harga']=5;
				}
				else if ($value['harga']>=6800000 && $value['harga']<=7900000) {
					$value['harga']=4;
				}
				else if ($value['harga']>=8000000 && $value['harga']<=9100000) {
					$value['harga']=3;
				}
				else if ($value['harga']>=9200000 && $value['harga']<=10300000) {
					$value['harga']=2;
				}
				else if ($value['harga']>=10400000 && $value['harga']<=11500000) {
					$value['harga']=1;
				}
	
	
				//kamar
				if ($value['jumlah_kamar']>=2 ) {
					$value['jumlah_kamar']=5;
				}
				else{
					$value['jumlah_kamar']=4;
				}
	
				//Luas
				if ($value['luas_bangunan']>=6 && $value['luas_bangunan']<=65) {
					$value['luas_bangunan']=1;
				}
				else if ($value['luas_bangunan']>=66 && $value['luas_bangunan']<=124) {
					$value['luas_bangunan']=2;
				}
				else if ($value['luas_bangunan']>=125 && $value['luas_bangunan']<=183) {
					$value['luas_bangunan']=3;
				}
				else if ($value['luas_bangunan']>=184 && $value['luas_bangunan']<=242) {
					$value['luas_bangunan']=4;
				}
				else if ($value['luas_bangunan']>=243 && $value['luas_bangunan']<=300) {
					$value['luas_bangunan']=5;
				}
	
				//sumber air
				if ($value['air']=="Pdam") {
					$value['air']=5;
				}
				else{
					$value['air']=4;
				}
			
				//listrik
				if ($value['listrik']=="Listrik Prabayar") {
					$value['listrik']=5;
				}
				else{
					$value['listrik']=4;
				}
				
	
				//lokasi
				$loc = unserialize($value['lokasi']);
				if($loc[0]=='Sekolah/Kampus'){
					$value['lokasi'] = 5;
				}
				else if($loc[0]=='Mall/Pasar'){
					$value['lokasi'] = 4;
				}
				else if($loc[0]=='Kantor'){
					$value['lokasi'] = 3;
				}
				else if($loc[0]=='Rumah Sakit'){
					$value['lokasi'] = 2;
				}
				else{
					$value['lokasi'] = 1;
				}
				
	
				$MatrikNormalisasi[$no-1]=array(
					$value['harga']/$pembagiNM[0],
					  $value['jumlah_kamar']/$pembagiNM[1],
					  $value['luas_bangunan']/$pembagiNM[2],
					  $value['listrik']/$pembagiNM[3],
					  $value['air']/$pembagiNM[4],
					  $value['lokasi']/$pembagiNM[5] );
				$no++;
			}
	
	
			$no=1;
			$pembagiNM=$this->pembagiNM($Matrik);
			foreach ($datarumah as $key => $value) { 
				$NormalisasiBobot[$no-1]=array(
					$MatrikNormalisasi[$no-1][0]*5,
					$MatrikNormalisasi[$no-1][1]*5,
					$MatrikNormalisasi[$no-1][2]*4,
					$MatrikNormalisasi[$no-1][3]*5,
					$MatrikNormalisasi[$no-1][4]*4,
					$MatrikNormalisasi[$no-1][5]*4
				  );
	
				  $no++;
			}
	
			$NormalisasiBobotTrans = $this->Transpose($NormalisasiBobot);
			$idealpositif=array(
				min($NormalisasiBobotTrans[0]),
				max($NormalisasiBobotTrans[1]),
				max($NormalisasiBobotTrans[2]),
				max($NormalisasiBobotTrans[3]),
				max($NormalisasiBobotTrans[4]),
				max($NormalisasiBobotTrans[5])
			  );
			  
	
			$idealnegatif=array(
				max($NormalisasiBobotTrans[0]),
				min($NormalisasiBobotTrans[1]),
				min($NormalisasiBobotTrans[2]),
				min($NormalisasiBobotTrans[3]),
				min($NormalisasiBobotTrans[4]),
				min($NormalisasiBobotTrans[5])
			  );
	
			$Dplus=$this->JarakIplus($idealpositif,$NormalisasiBobot);
			$Dmin=$this->JarakIplus($idealnegatif,$NormalisasiBobot);
			 
			 $no = 1;
			 $nilaiV = array();
			  foreach ($datarumah as $key => $value) { 
				array_push($nilaiV, $Dmin[$no-1]/($Dmin[$no-1]+$Dplus[$no-1]));
				$no++;
			}
	
			$s=0;
			$hasil = array();
			foreach ($datarumah as $key => $value) { 
	
				$value['nilai'] = $nilaiV[$s];
				array_push($hasil,$value);
				$s++;
			}
	
			$rank = array_column($hasil,'nilai');
			array_multisort($rank,SORT_DESC,$hasil);
			
			$data['rank'] = $hasil;
		}
		else{
			$data['rank'] = "null";
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
