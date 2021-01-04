<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class U_GiangVien extends CI_Controller 
 {

 	public function __construct()
 	{
 		parent:: __construct();
 		$this->load->Model("u_giangvien_model");
    }

    public function loadListDeTai()
    {
        $this->load->helper('url');
        $MaGV = $this->session->userdata('username');
        $result = $this->u_giangvien_model->getList_Detai($MaGV);
        $data['result'] = $result;
        $data['content'] = 'list_detai_MaGV';
        $this->load->view('layout/index', $data);
    }  

	//get list sinh viên đã đăng ký đề tài đang xem
	public function listSVDK($MaDeTai)
	{
        $data['result'] = $this->u_giangvien_model->getListSVDK($MaDeTai);
        $this->load->view('layout/detai/view', $data);
        
	}
}