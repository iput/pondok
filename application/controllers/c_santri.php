<?php 
defined('BASEPATH')OR exit('Tidak ada akses skrip diizinkan untuk link ini');
/**
 * 
 */
 class C_santri extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('santri_m', 'str');
 	}

 	public function index()
 	{
 		$data['santri'] = $this->str->getAllSantri();
 		$this->load->view('attribute/header');
 		$this->load->view('admin/v_santri',$data);
 		$this->load->view('attribute/footer');
 	}

 	public function tambah_data()
 	{
 		$this->load->view('attribute/header_form');
 		$this->load->view('admin/content_santri');
 		$this->load->view('attribute/footer_form');
 	}

	 public function daftarSantriBaru(){
		 $result = $this->str->daftarSantribaru();
		 $pesan['success'] = false;
		 if ($result) {
		 	$pesan['success'] = true;
		 }
		 echo json_encode($pesan);
	 }

	 public function addAlumni()
	 {
 		$data = array(
 			'nama_santri'=>$this->input->post('txtNamaLengkapAlumni'),
 			'nama_panggilan' => $this->input->post('txtNamaPanggilanAlumni'),
 			'jenis_kelamin'=>$this->input->post('jenisKelaminAlumni'),
 			'tempat_lahir'=>$this->input->post('txtKelahiranAlumni'),
 			'tanggal_lahir'=>$this->input->post('tglLahirAlumni'),
 			'alamat_santri'=>$this->input->post('txtAlamatAlumni'),
 			'noTelpon_santri'=>$this->input->post('txtTeleponAlumni'),
 			'email_santri'=>$this->input->post('txtEmailAlumni'),
 			'facebook_santri'=>$this->input->post('txtFacebookAlumni'),
 			'tahun_masuk'=>$this->input->post('txtTahunMasukPondok'),
 			'tahun_boyong'=>$this->input->post('txtTahunBoyong'),
 			'password'=>$this->input->post('password'),
 			'isactive'=>'0');

 		$result = $this->str->addAlumniBaru($data);
 		$pesan['success']= false;
 		if ($result) {
 			$pesan['success'] = true;
 		}
 		echo json_encode($pesan);
	 }

	 
 } ?>