<?php
class admin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function validate()
	{
		$arr['username'] = $this->input->post('EmailAdmin');
		$arr['password'] = $this->input->post('MatKhau');
		return $this->db->get_where('admin', $arr)->row();
	}
}