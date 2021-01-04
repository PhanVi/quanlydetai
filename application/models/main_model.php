<?php  
 class Main_model extends CI_Model  
 {  
     public function __construct()
     {
       parent::__construct();
     }

     function can_login_giangvien($username, $password)  
     {  
          $this->db->where('MaGV', $username);  
          $this->db->where('MatKhau', $password);  
          $query = $this->db->get('giangvien');  
          //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
          if($query->num_rows() > 0)  
          {  
               return true;  
          }  
          else  
          {  
               return false;       
          }  
     }

     function can_login_admin($username, $password)  
      {  
          $this->db->where('EmailAdmin', $username);  
          $this->db->where('MatKhau', $password);  
          $query = $this->db->get('admin');  
          //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
          if($query->num_rows() > 0)  
          {  
               return true;  
          }  
          else  
          {  
               return false;       
          }  
      } 
     function can_login_sinhvien($username, $password)  
     {  
          $this->db->where('MaSV', $username);  
          $this->db->where('MatKhau', $password);  
          $query = $this->db->get('sinhvien');  
          //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
          if($query->num_rows() > 0)  
          {  
               return true;  
          }  
          else  
          {  
               return false;       
          }  
     } 
}  