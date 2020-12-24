<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Admin extends CI_Controller 
 {

 	public function __construct()
 	{
 		parent:: __construct();
 		$this->load->Model("admin_model");
 	}
 	public function index()
 	{

 		$this->load->helper('url');
 		$data['content'] = 'admin';
 		$this->load->view('layout/index', $data);
 	}

	public function add_giang_vien()
	{
		$this->load->view('giangvien');
	}

    function logout()  
    {  
         $this->session->unset_userdata('username');  
         redirect(base_url() . 'main/login');  
    } 
 }