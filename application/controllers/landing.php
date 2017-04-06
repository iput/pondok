<?php defined('BASEPATH')OR exit('akses di tolak');

/**
 * 
 */
 class Landing extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('landing');
 	}
 } ?>