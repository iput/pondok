<?php defined('BASEPATH')OR exit('akses di tolak');
/**
 * 
 */
 class Santri_m extends CI_model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function daftarSantriBaru()
 	{
 		$data = array(
 			'nama_santri'=>$this->input->post('txtNamaSantri'),
 			'jenis_kelamin'=>$this->input->post('gender'),
 			'tempat_lahir'=>$this->input->post('txtTLahir'),
 			'tanggal_lahir'=>$this->input->post('tanggalLahir'),
 			'alamat_santri'=>$this->input->post('txtAlamat'),
 			'noTelpon_santri'=>$this->input->post('txtNoTelp'),
 			'email_santri'=>$this->input->post('txtEmail'),
 			'facebook_santri'=>$this->input->post('txtFacebook'),
 			'tahun_masuk'=>date('Y-m-d'),
 			'jenjang_pendidikan'=>$this->input->post('txtPendidikan'));

 		$this->db->insert('santri_baru', $data);
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}

 	public function addAlumniBaru($data)
 	{
 		$this->db->insert('santri_baru', $data);
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}

 	public function getAllSantri()
 	{
 		$result = $this->db->get('santri_baru');
 		return $result->result_array();
 	}
 } ?>