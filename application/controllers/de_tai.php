<?php
 class de_tai extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('de_tai_model');
	}

	public function danhsach()
	{
		$dsDeTai=$this->de_tai_model->listDeTai();
		$data['dsDeTai']=$dsDeTai;
		$data['path']=array('de_tai/v_doc_dsDeTai');
		$this->load->view('layoutDeTai', $data );

	}
	public function dangKyDeTai($MaDeTai)
	{
		$checkSlDK=$this->de_tai_model->checkSlDK($MaDeTai);
		if($checkSlDK->result == "0"){
			$MaSV=$this->session->userdata("username");
			$checkSVDK = $this->de_tai_model->checkSVDK($MaSV);
			if($checkSVDK == 0){
				$this->de_tai_model->insertSvdk($MaDeTai, $MaSV);
				$this->de_tai_model->updateSoLuongDK($MaDeTai);
				redirect('de_tai/danhsach');
			}else{
				echo "<script language='javascript'>alert('Bạn đã đăng ký đề tài nên không thể đăng ký thêm!'); document.location.href='https://localhost/quanlydetai/index.php/de_tai/danhsach';</script>"; 
			}
		}else{
			echo "<script language='javascript'>alert('Đề tài đã đủ số lượng đăng ký!'); document.location.href='https://localhost/quanlydetai/index.php/de_tai/danhsach';</script>"; 
		}
	}

 }
?>
