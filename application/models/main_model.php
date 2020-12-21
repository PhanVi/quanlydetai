<?php  
 class Main_model extends CI_Model  
 {  
      public function __construct()
      {
        parent::__construct();
      }

      function can_login($username, $password)  
      {  
           $this->db->where('TenTK', $username);  
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
 }  