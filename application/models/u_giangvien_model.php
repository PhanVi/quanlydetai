<?php  
 class u_giangvien_model extends CI_Model  
 {  
    public function __construct()
    {
      parent::__construct();
    }

    public function getList_Detai($MaGV)
    {
      $this->db->from('detai');
      $this->db->where('MaGV', $MaGV);
      $query = $this->db->get();
      return $query->result_array();
    }

    public function getListSVDK($MaDeTai)
    {
      $this->db->from('svdk');
      $this->db->where('MaDeTai', $MaDeTai);
      $query = $this->db->get();
      return $query->result_array();
    }
}