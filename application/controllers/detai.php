<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class DeTai extends CI_Controller 
 {

 	public function __construct()
 	{
 		parent:: __construct();
 		$this->load->Model("detai_model");
 	}

 	public function index()
 	{

 		$this->load->helper('url');
 			$result = $this->detai_model->list_detai();
 			$data['result'] = $result;
 		$data['content'] = 'detai';
 		$this->load->view('layout/index', $data);
 	}


 }