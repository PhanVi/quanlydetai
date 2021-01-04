<?php  
 class de_tai_model extends CI_Model  {
	public function listDeTai(){
		$query=$this->db->query('SELECT * FROM detai WHERE SYSDATE() <= ThoiGianDK');
		return $query->result_array();
	}

	public function insertSvdk($MaDeTai, $MaSinhVien){
		$query=$this->db->query('INSERT INTO svdk(`MaSV`, `MaDeTai`) VALUES (?,?)', array($MaSinhVien, $MaDeTai));
		return $query;
	}

	public function updateSoLuongDK($MaDeTai){
		$query=$this->db->query('UPDATE detai SET SoLuongDK = SoLuongDK+1 WHERE MaDeTai = ?', array($MaDeTai));
		return $query;
	}

	public function checkSlDK($MaDeTai){
		$query=$this->db->query('SELECT CASE WHEN GioiHanSoLuongDK <= SoLuongDK THEN "1" ELSE "0" END as result FROM detai WHERE MaDeTai = ?', array($MaDeTai));
		return $query->row();
	}

	public function checkSVDK($MaSinhVien){
		$query=$this->db->query('SELECT * FROM svdk WHERE MaSV = ?', array($MaSinhVien));
		return $query->num_rows();
	}


 }
 ?>
