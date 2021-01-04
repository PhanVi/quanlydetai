<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class sinhvien_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function list_sinhvien()
	{
		$query=$this->db->get("sinhvien");
		return $query->result_array();
	}

	public function getByMaSV($MaSV)
	{

		$this->db->from('sinhvien');
		$this->db->where('MaSV', $MaSV);
		$query = $this->db->get();
		return $query->row();
	}

	public function delete_id($MaSV)
	{
		$this->db->where('MaSV', $MaSV);
		$this->db->delete('sinhvien');
	}

	public function insert_data($data)  
    {  
        $this->db->insert("sinhvien", $data);  
	}  

}