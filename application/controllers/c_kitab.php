<?php defined('BASEPATH')OR exit('tiada akses terhadap halaman ini'); 
/**
* 
*/
class C_kitab extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('kitab_m', 'ktb');
	}

	public function index()
	{
		$this->load->view('attribute/header');
		$this->load->view('admin/v_kitab');
		$this->load->view('attribute/footer');
	}

	public function insertKitab()
	{
		$result = $this->ktb->insertKitab();
		$pesan['success'] = false;
		$pesan['type'] ='add';
		if ($result) {
			$pesan['success'] = true;
		}
		echo json_encode($pesan);
	}

	public function getDataKitab()
	{
		$result = $this->ktb->getAllKitab();
		echo json_encode($result);
	}

	public function editKitab()
	{
		$data = $this->ktb->editKitab();
		echo json_encode($data);
	}

	public function updateKitab()
	{
		$data = $this->ktb->updateKitab();
		$pesan['success'] = false;
		$pesan['type'] = 'update';
		if ($data) {
			$pesan['success'] = true;
		}
		echo json_encode($pesan);
	}

	public function hapusDataKitab()
	{
		$result = $this->ktb->hapusKitab();
		$pesan['success']= false;
		if ($result) {
			$pesan['success'] =true;
		}
		echo json_encode($pesan);
	}
}?>