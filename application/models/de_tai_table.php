<?php  
 class de_tai_table extends CI_Model  {
	public function ds_de_tai(){
		$query=$this->db->query('SELECT * FROM detai WHERE SYSDATE() <= ThoiGianDK');
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		return false;
	}
 }
 ?>
