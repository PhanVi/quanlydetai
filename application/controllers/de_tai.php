<?php
 class de_tai extends CI_Controller {
	 public function __construct(){
		parent::__construct();
		$this->load->model('de_tai_table');
	 }

	 public function danh_sach()
	 {
		$dsDeTai=$this->de_tai_table->ds_de_tai();
		$data['dsDeTai']=$dsDeTai;
		$data['path']=array('de_tai/v_doc_dsDeTai');
		$this->load->view('layoutDeTai', $data );

	 }
	 public function dangKyDeTai($MaDeTai)
	 {
		$checkSlDK=$this->de_tai_table->checkSlDK($MaDeTai);
		if($checkSlDK->result == "0"){
			$MaSinhVien=$this->session->userdata("username");
			$checkSVDK = $this->de_tai_table->checkSVDK($MaSinhVien);
			if($checkSVDK == 0){
				$this->de_tai_table->insertSvdk($MaDeTai, $MaSinhVien);
				$this->de_tai_table->updateSoLuongDK($MaDeTai);
				redirect('de_tai/danh_sach');
			}else{
				echo "<script language='javascript'>alert('bạn đã đăng ký đề tài nên không thể đăng ký thêm!'); document.location.href='https://localhost/quanlydetai/index.php/de_tai/danh_sach';</script>"; 
			}
		}else{
			echo "<script language='javascript'>alert('Đề tài đã đủ số lượng đăng ký!'); document.location.href='https://localhost/quanlydetai/index.php/de_tai/danh_sach';</script>"; 
		}
	}
 }
?>
