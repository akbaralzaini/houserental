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
		$id_pemilik = $_SESSION['id_pemilik'];

		$data['jumlahr']= $this->Rumahmodel->getrumah($id_pemilik)->num_rows();

		$this->db->select("*");
		$this->db->from("notifikasi");
		$this->db->join("rumah"," rumah.id_pemilik=notifikasi.id_pemilik");
		$this->db->where("rumah.id_pemilik",$id_pemilik);
		$data['notif']= $this->db->get()->result();
		
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
		$data['pemilik'] = $this->Usermodel->getpemilik(array('pemilik_kontrakan.id_user'=>$_SESSION['id_userpemilik']))->result();
		$this->load->view('pemilik/profil',$data);
	}

	public function datarumah()
	{
		$data['title'] = "Data rumah";
		$id_pemilik = $_SESSION['id_pemilik'];
		$data['rumah'] = $this->Rumahmodel->getrumah($id_pemilik)->result();
		$this->load->view('pemilik/daftarrumah',$data);
	}

	public function tambahrumah()
	{
		$this->load->view('pemilik/formrumah');
	}

	public function updateranking()
	{
		$this->db->truncate("ranking");

		$datarumah = $this->db->get('rumah')->result_array();

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
	
				$Matrik[]=array(
					  $value['harga'],
					  $value['jumlah_kamar'],
					  $value['luas_bangunan'],
					  $value['air'],
					  $value['listrik'],
					  $value['lokasi'] );
			}
			
	
			$no=1;
			$pembagiNM=$this->pembagiNM($Matrik);
			foreach ($datarumah as $key => $value) { 
				//harga 
				if ($value['harga']>=5500000 && $value['harga']<=6799999) {
					$value['harga']=5;
				}
				else if ($value['harga']>=6800000 && $value['harga']<=7999999) {
					$value['harga']=4;
				}
				else if ($value['harga']>=8000000 && $value['harga']<=9199999) {
					$value['harga']=3;
				}
				else if ($value['harga']>=9200000 && $value['harga']<=10399999) {
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
					  $value['air']/$pembagiNM[3],
					  $value['listrik']/$pembagiNM[4],
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
			  
			foreach ($idealpositif as $key => $b) {
				echo "<br><br>";
				print_r($b);
			}
	
			$idealnegatif=array(
				max($NormalisasiBobotTrans[0]),
				min($NormalisasiBobotTrans[1]),
				min($NormalisasiBobotTrans[2]),
				min($NormalisasiBobotTrans[3]),
				min($NormalisasiBobotTrans[4]),
				min($NormalisasiBobotTrans[5])
			  );
			
			foreach ($idealnegatif as $key => $b) {
				echo "<br><br>";
				print_r($b);
			}
	
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

			$ranking = $hasil;
		}
		else{
			$ranking = "null";
		}
		
		$i = 1;
		foreach ($ranking as $datarumahk) {
			$datarumahs = array('id_rumah' => $datarumahk['id_rumah'],'no_ranking'=>$i );
			$this->db->insert('ranking',$datarumahs);
			$i++;
		}

	}

	public function addrumah()
	{
		
		if(isset($_POST['submit'])){
			$foto = array();
			$i = 0;
			foreach ($_FILES['file']['name'] as $filename) {

				$idfoto = rand();
				$namagambar=$_FILES['file']['tmp_name'][$i];

				$extension = explode("/", $_FILES['file']['type'][$i]);
				$name = "asset/img/rumah/".$_SESSION['id_pemilik'].$idfoto.".".$extension[1];

				move_uploaded_file($namagambar,$name);

				$fotoini = $name;

				 array_push($foto,$fotoini);
				$i++;
			}
		}
		$home = array('id_pemilik' => $_SESSION['id_pemilik'], 
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

		$this->updateranking();

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
		$id_u = $_GET['id_u'];
		if ($_FILES['file']['name'] != "") {
			if($filename = $_FILES['file']['name']) {
				$uploaddir= 'asset/img/profil/';
				$alamatfile=$uploaddir.$filename;
				move_uploaded_file($_FILES['file']['tmp_name'],$alamatfile);
			}
			$pemilik = array('nama' => $_POST['nama'],'alamat' => $_POST['alamat'],'email' => $_POST['email'],'tlp' => $_POST['telpon'],'foto'=> $alamatfile );
		}
		else{
			$pemilik = array('nama' => $_POST['nama'],'alamat' => $_POST['alamat'],'email' => $_POST['email'],'tlp' => $_POST['telpon'] );
		}
		$this->Usermodel->updatepemilik($pemilik,$id);

		$user = array('username' => $_POST['username'],'password'=> $_POST['password']);

		$this->Usermodel->updateuser($user,$id_u);

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
		$home = array('id_pemilik' => $_SESSION['id_pemilik'], 
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
		$this->updateranking();
		redirect(base_url().'pemilik/datarumah');	
	}
	
	public function deleterumah()
	{
		$this->db->where('id_rumah',$_GET['id_rumah']);
		$this->db->delete('rumah');
		$this->updateranking();

		redirect(base_url().'pemilik/datarumah');	
	}
}

