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

}