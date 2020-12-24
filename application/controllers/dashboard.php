<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Dashboard extends CI_Controller 
 {

 	public function __construct()
 	{
 		parent:: __construct();
 		$this->load->Model("dashboard_model");
    }

    public function index()
    {

        $this->load->helper('url');
        $data['content'] = 'dashboard';
        $this->load->view('layout/index', $data);
    }
}