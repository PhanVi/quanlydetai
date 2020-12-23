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
 }
?>
