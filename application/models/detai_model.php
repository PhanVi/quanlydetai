<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class detai_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function list_detai()
	{
		$query=$this->db->get("detai");
		return $query->result_array();
	}

	public function getByMaDeTai($MaDeTai)
	{
		/*$query = $this->db->query("select * from detai where MaDeTai = '$MaDeTai'");
		return $query->result();*/

		$this->db->from('detai');
		$this->db->where('MaDeTai', $MaDeTai);
		$query = $this->db->get();
		return $query->row();
	}

	public function delete_id($MaDeTai)
	{
		$this->db->where('MaDeTai', $MaDeTai);
		$this->db->delete('detai');
	}

	public function insert_data($data)  
    {  
        $this->db->insert("detai", $data);  
	}
	
}