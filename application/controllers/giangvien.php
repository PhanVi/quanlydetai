<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class GiangVien extends CI_Controller 
 {

 	public function __construct()
 	{
 		parent:: __construct();
 		$this->load->Model("giangvien_model");
 	}
 	public function index()
 	{
 		$this->load->helper('url');
 			$result = $this->giangvien_model->list_giangvien();
 			$data['result'] = $result;
 		$data['content'] = 'giangvien';
 		$this->load->view('layout/index', $data);
 	}

	public function add()
	{
		$this->load->view('add');
	}

	public function edit($MaGV)
	{
		$this->load->helper('url');
		$data['giangvien'] = $this->giangvien_model->getByMaGV($MaGV);
		$this->load->view('layout/giangvien/edit', $data);
	}

	public function update($MaGV)
	{
		$this->load->model("giangvien_model");  
		//$MaGV = $this->input->post('MaGV');
		$data = array(
			'TenGV'    => $this->input->post('TenGV'),
			'MaKhoa'   => $this->input->post('MaKhoa'),
			'NgaySinh' => $this->input->post('NgaySinh'),
			'GioiTinh' => $this->input->post('GioiTinh'),
			'SDT'      => $this->input->post('SDT'),
			'DiaChi'   => $this->input->post('DiaChi'),
			'Email'    => $this->input->post('Email')
		);
		$this->db->where('MaGV', $MaGV);
		$this->db->update('giangvien', $data);
		redirect('giangvien');
	}

	public function delete($MaGV)
	{
		$this->giangvien_model->delete_id($MaGV);
		redirect('giangvien');
	}

	public function create()
	{
		$data['giangvien'] = new stdClass;
		$data['giangvien']->MaGV = "";
		$data['giangvien']->TenGV = "";
		$data['giangvien']->MaKhoa = "";
		$data['giangvien']->NgaySinh = "";
		$data['giangvien']->GioiTinh = "";
		$data['giangvien']->SDT = "";
		$data['giangvien']->DiaChi = "";
		$data['giangvien']->Email = "";
		$data['giangvien']->TenTK = "";
		$data['giangvien']->MatKhau = "";
		$this->load->view('layout/giangvien/create', $data);

	}

	public function form_validation()  
      {  
           //echo 'OK';  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules("MaGV", "Mã Giảng Viên", 'required');   
           $this->form_validation->set_rules("MatKhau", "Mật khẩu", 'required');
           $this->form_validation->set_message('required', '{field} không được rỗng.');
           $giangVien = array(
		            'MaGV'     => $this->input->post('MaGV'),
					'TenGV'    => $this->input->post('TenGV'),
					'MaKhoa'   => $this->input->post('MaKhoa'),
					'NgaySinh' => $this->input->post('NgaySinh'),
					'GioiTinh' => $this->input->post('GioiTinh'),
					'SDT'      => $this->input->post('SDT'),
					'DiaChi'   => $this->input->post('DiaChi'),
					'Email'    => $this->input->post('Email'),
					'MatKhau'  => $this->input->post('MatKhau')
				); 
           if($this->form_validation->run())  
           { 
            //true  
	            $this->load->model("giangvien_model");  
	            
				$this->giangvien_model->insert_data($giangVien);  
            	redirect("giangvien");  
        	}
        	else
        	{
        		$data['giangvien'] = new stdClass;
				$data['giangvien']->MaGV = $giangVien['MaGV'];
				$data['giangvien']->TenGV = $giangVien['TenGV'];
				$data['giangvien']->MaKhoa = $giangVien['MaKhoa'];
				$data['giangvien']->NgaySinh = $giangVien['NgaySinh'];
				$data['giangvien']->GioiTinh = $giangVien['GioiTinh'];
				$data['giangvien']->SDT = $giangVien['SDT'];
				$data['giangvien']->DiaChi = $giangVien['DiaChi'];
				$data['giangvien']->Email = $giangVien['Email'];
				$data['giangvien']->MatKhau = $giangVien['MatKhau'];
				echo validation_errors();
	           $this->load->view("layout/giangvien/create", $data);  
        	}            

      }  
 
 }