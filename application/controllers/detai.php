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
	 
	 public function edit($MaDeTai)
	 {
		 $this->load->helper('url');
		 $data['detai'] = $this->detai_model->getByMaDeTai($MaDeTai);
		 $this->load->view('layout/detai/edit', $data);
	 }

	 public function view($MaDeTai)
	 {
		$this->load->helper('url');
		$data['detai'] = $this->detai_model->getByMaDeTai($MaDeTai);
		$this->load->view('layout/detai/view', $data);
	}

	 public function update($MaDeTai)
	 {
		 $data = array(
			'TenDeTai'    		  => $this->input->post('TenDeTai'),
			'TenGV'       		  => $this->input->post('TenGV'),
			'ThoiGianDK'  		  => $this->input->post('ThoiGianDK'),
			'SoLuongDK'   		  => $this->input->post('SoLuongDK'),
			'GioiHanSoLuongDK'   => $this->input->post('GioiHanSoLuongDK')
			 
		 );
		 $this->db->where('MaDeTai', $MaDeTai);
		 $this->db->update('detai', $data);
		 redirect('detai');
	 }

	public function delete($MaDeTai)
	{
		$this->detai_model->delete_id($MaDeTai);
		 redirect('detai');
	}

	public function create()
	{
		$data['detai'] = new stdClass;
		$data['detai']->MaDeTai = "";
		$data['detai']->TenDeTai = "";
		$data['detai']->TenGV = "";
		$data['detai']->ThoiGianDK = "";
		$data['detai']->GioiHanSoLuongDK = "";
		$this->load->view('layout/detai/create', $data);

	}

	public function form_validation()  
    {    
		//$data['TenGV'] = $this->detai_model->getTenGV();
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("MaDeTai", "Mã Đề Tài", 'required');  ;
		$this->form_validation->set_message('required', '{field} Không được rỗng.');
		$detai = array(
				'MaDeTai'     		   => $this->input->post('MaDeTai'),
				'TenDeTai'    		   => $this->input->post('TenDeTai'),
				'TenGV' 			   => $this->input->post('TenGV'),
				'ThoiGianDK' 		   => $this->input->post('ThoiGianDK'),
				'GioiHanSoLuongDK'     => $this->input->post('GioiHanSoLuongDK')
				
			); 
		if($this->form_validation->run())  
		{ 
		//true  
			$this->load->model("detai_model");  
			
			$this->detai_model->insert_data($detai);  
			redirect("detai");  
		}
		else
		{
			$data['detai'] = new stdClass;
			$data['detai']->MaDeTai    		  = $detai['MaDeTai'];
			$data['detai']->TenDeTai   		  = $detai['TenDeTai'];
			$data['detai']->TenGV      		  = $detai['TenGV'];
			$data['detai']->ThoiGianDK 		  = $detai['ThoiGianDK'];
			$data['detai']->GioiHanSoLuongDK  = $detai['GioiHanSoLuongDK'];
			echo validation_errors();
			$this->load->view("layout/detai/create", $data);  
		}            

	}  
	
}