<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class giangvien_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function list_giangvien()
	{
		$query=$this->db->get("giangvien");
		return $query->result_array();
	}

	public function getByMaGV($MaGV)
	{

		$this->db->from('giangvien');
		$this->db->where('MaGV', $MaGV);
		$query = $this->db->get();
		return $query->row();
	}

	public function delete_id($MaGV)
	{
		$this->db->where('MaGV', $MaGV);
		$this->db->delete('giangvien');
	}

	public function insert_data($data)  
    {  
        $this->db->insert("giangvien", $data);  
	}  

}