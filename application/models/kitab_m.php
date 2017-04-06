<?php defined('BASEPATH')OR exit('akses di tolak');
/**
 * 
 */
 class Kitab_m extends CI_model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function getAllKitab()
 	{
 		$this->db->order_by('id_kitab', 'desc');
 		$result = $this->db->get('tabel_kitab');
 		if ($result->num_rows()> 0) {
 			return $result->result();
 		}else{
 			return false;
 		}
 	}

 	public function insertKitab()
 	{
 		$data = array(
 			'nama_kitab'=>$this->input->post('txtNamaKitab'),
 			'pengarang_kitab'=>$this->input->post('txtPengarang'),
 			'harga_kitab'=>$this->input->post('txtHarga'),
 			'tanggal_beli'=>date('Y-m-d'),
 			'stok_kitab'=>$this->input->post('txtStok'));

 		$this->db->insert('tabel_kitab', $data);
 		if ($this->db->affected_rows()> 0) {
 			return true;
 		}else{
 			return false;
 		}
 	}

 	public function editKitab()
 	{
 		$id = $this->input->get('id');
 		$this->db->where('id_kitab', $id);
 		$data = $this->db->get('tabel_kitab');
 		if ($data->num_rows()>0) {
 			return $data->row();
 		}else{
 			return false;
 		}
 	}

 	public function updateKitab()
 	{
 		$id = $this->input->post('txtId');
 		$data = array(
 			'nama_kitab'=> $this->input->post('txtNamaKitab'),
 			'pengarang_kitab' => $this->input->post('txtPengarang'),
 			'harga_kitab'=> $this->input->post('txtHarga'),
 			'tanggal_beli'=>date('Y-m-d'),
 			'stok_kitab'=> $this->input->post('txtStok'));
 		$this->db->where('id_kitab', $id);
 		$this->db->update('tabel_kitab', $data);

 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}

 	public function hapusKitab()
 	{
 		$id = $this->input->get('id');
 		$this->db->where('id_kitab', $id);
 		$this->db->delete('tabel_kitab');
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}

 } ?>