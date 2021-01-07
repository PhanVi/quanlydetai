<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class SinhVien extends CI_Controller 
 {

 	public function __construct()
 	{
 		parent:: __construct();
 		$this->load->Model("sinhvien_model");
 	}
 	public function index()
 	{
 		$this->load->helper('url');
 			$result = $this->sinhvien_model->list_sinhvien();
 			$data['result'] = $result;
 		$data['content'] = 'sinhvien';
 		$this->load->view('layout/index', $data);
     }
     
     public function edit($MaSV)
     {
         $this->load->helper('url');
         $data['sinhvien'] = $this->sinhvien_model->getByMaSV($MaSV);
         $this->load->view('layout/sinhvien/edit', $data);
     }
 
     public function update($MaSV)
     {
         $this->load->model("sinhvien_model");  
         $data = array(
             'TenSV'    => $this->input->post('TenSV'),
             'MaLop'    => $this->input->post('MaLop'),
             'NgaySinh' => $this->input->post('NgaySinh'),
             'SDT'      => $this->input->post('SDT'),
             'DiaChi'   => $this->input->post('DiaChi'),
             'Email'    => $this->input->post('Email')
         );
         $this->db->where('MaSV', $MaSV);
         $this->db->update('sinhvien', $data);
         redirect('sinhvien');
     }
 
     public function create()
     {
         $data['sinhvien'] = new stdClass;
         $data['sinhvien']->MaSV = "";
         $data['sinhvien']->TenSV = "";
         $data['sinhvien']->MaLop = "";
         $data['sinhvien']->NgaySinh = "";
         $data['sinhvien']->SDT = "";
         $data['sinhvien']->DiaChi = "";
         $data['sinhvien']->Email = "";
         $data['sinhvien']->MatKhau = "";
         $this->load->view('layout/sinhvien/create', $data);
 
     }
 
     public function form_validation()  
       {   
            $this->load->library('form_validation');  
            $this->form_validation->set_rules("MaSV", "Mã Sinh Viên", 'required');  
            $this->form_validation->set_rules("MatKhau", "Mật khẩu", 'required');
            $this->form_validation->set_message('required', '{field} không được rỗng.');
            $sinhvien = array(
                     'MaSV'     => $this->input->post('MaSV'),
                     'TenSV'    => $this->input->post('TenSV'),
                     'MaLop'    => $this->input->post('MaLop'),
                     'NgaySinh' => $this->input->post('NgaySinh'),
                     'SDT'      => $this->input->post('SDT'),
                     'DiaChi'   => $this->input->post('DiaChi'),
                     'Email'    => $this->input->post('Email'),
                     'MatKhau'  => $this->input->post('MatKhau')
                 ); 
            if($this->form_validation->run())  
            { 
             //true  
                 $this->load->model("sinhvien_model");  
                 
                 $this->sinhvien_model->insert_data($sinhvien);  
                 redirect("sinhvien");  
             }
             else
             {
                 $data['sinhvien'] = new stdClass;
                 $data['sinhvien']->MaSV        = $sinhvien['MaSV'];
                 $data['sinhvien']->TenSV       = $sinhvien['TenSV'];
                 $data['sinhvien']->MaLop       = $sinhvien['MaLop'];
                 $data['sinhvien']->NgaySinh    = $sinhvien['NgaySinh'];
                 $data['sinhvien']->SDT         = $sinhvien['SDT'];
                 $data['sinhvien']->DiaChi      = $sinhvien['DiaChi'];
                 $data['sinhvien']->Email       = $sinhvien['Email'];
                 $data['sinhvien']->MatKhau     = $sinhvien['MatKhau'];
                 echo validation_errors();
                $this->load->view("layout/sinhvien/create", $data);  
             }            
    }  
        
    public function delete($MaSV)
    {
        $this->sinhvien_model->delete_id($MaSV);
        redirect('sinhvien');
    }
}