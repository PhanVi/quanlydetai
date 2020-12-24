<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Main extends CI_Controller {  
      //functions  

      public function __construct()
 	{
 		parent:: __construct();
 		$this->load->Model("main_model");
     }
      
     public function login_giangvien()
     {

      if (isset($_POST['login_giangvien']))
      {
        $this->load->library('form_validation');  
        $this->form_validation->set_rules('username', 'Tên tài khoản', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
        
        if ($this->form_validation->run() == true)
        {
          $this->load->helper('url');
 		$data['content'] = 'de_tai/danh_sach';
 		$this->load->view('layout/index', $data);
        }
      }else
      {
          $this->load->view("login_giangvien"); 
      }
       
     }

     public function login_sinhvien()
     {

      if (isset($_POST['login_sinhvien']))
      {
        $this->load->library('form_validation');  
        $this->form_validation->set_rules('username', 'Tên tài khoản', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
        
        if ($this->form_validation->run() == true)
        {
          $this->load->helper('url');
 		$data['content'] = 'de_tai/danh_sach';
 		$this->load->view('layout/index', $data);
        }
      }else
      {
          $this->load->view("login_sinhvien"); 
      }
       
     }

     public function login_admin()
     {
       if (isset($_POST['login_admin']))
       {
         $this->load->library('form_validation');  
         $this->form_validation->set_rules('username', 'Tên tài khoản', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
         if ($this->form_validation->run() == true)
         {
           $this->load->helper('url');
  		$data['content'] = 'admin';
  		$this->load->view('layout/index', $data);
         }
       }else
       {
           $this->load->view("login_admin"); 
       }
     
     }

    public function login_validation()  
    {  
         $this->load->library('form_validation');  
         $this->form_validation->set_rules('username', 'Tên tài khoản', 'required');  
         $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
         $this->form_validation->set_message('required', '{field} không được rỗng.');  
         if($this->form_validation->run())  
         {  
              //true  
              $username = $this->input->post('username');  
              $password = $this->input->post('password');  
              //model function  
              $this->load->model('main_model');  
              if($this->main_model->can_login_giangvien($username, $password))  
              {  
                   $session_data = array(  
                        'username'     =>     $username  
                   );  
                   $this->session->set_userdata($session_data);  
                   redirect(site_url('de_tai/danh_sach'));  
              }  

              elseif ($this->main_model->can_login_admin($username, $password))  
              {
                    $session_data = array(  
                         'username'     =>     $username  
                    );  
                    $this->session->set_userdata($session_data);  
                    redirect(site_url('admin/'));
              }

              elseif ($this->main_model->can_login_sinhvien($username, $password))  
              {
                    $session_data = array(  
                         'username'     =>     $username  
                    );  
                    $this->session->set_userdata($session_data);  
                    redirect(site_url('de_tai/danh_sach'));
              }
              
              else  
              {  
                   $this->session->set_flashdata('error', 'Invalid Username and Password'); 
                   log_message('error', 'Sai thông tin đăng nhập');
                   redirect(site_url('dashboard/'));  
              }
         }  
         else  
         {  
              //false  
              $this->login_giangvien();  
         }  
    }  
    public function enter(){  
         if($this->session->userdata('username') != '')  
         {  
              echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
              echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';  
         }  
         else  
         {  
              redirect(site_url('giangvien/'));  
         }  
    }  
 
 }  
