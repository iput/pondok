<?php defined('BASEPATH')OR exit('aksess tidak ada');
/**
 * 
 */
 class Login extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('login');
 	}
 } ?>