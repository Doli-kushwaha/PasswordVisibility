<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    private $per_page;

    public function __construct() {
      parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('User_Model');
        $this->load->library("pagination");
    }
    
    public function index1() {        
       $this->pageConfig1();
          $data['usersdata'] = $this->db->get('user')->result_array();
          $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

          $data["links"] = $this->pagination->create_links();
          $data['user'] = $this->User_Model->getUsers($this->per_page, $page);
          $this->load->view('pagegnation_view', $data);
    }
    
    
       public function pageConfig1(){     
        $config = array();
          $config["base_url"] = base_url() . "User/index/";
          // print_r($config["base_url"]); die;
          // controller name
          $config["total_rows"] = $this->User_Model->getCount();
          $config["per_page"] = 5;
         $config["uri_segment"] = 3;
         $config['full_tag_open'] = "<ul class='pagination'>";
         $config['full_tag_close'] = '</ul>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         $config['prev_tag_open'] = '<li>';
         $config['prev_tag_close'] = '</li>';
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';
         $config['last_tag_open'] = '<li>';
         $config['last_tag_close'] = '</li>';
         $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
         $config['prev_tag_open'] = '<li>';
         $config['prev_tag_close'] = '</li>';
         $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $this->per_page=$config["per_page"]; 
         $this->pagination->initialize($config);        
    }



public function index(){
  $data['admin_login'] = $this->db->get('admin_login')->result_array();
  $this->load->view('admin/password_visible',$data);
}




public function add(){
  $data['username'] = $this->input->post('usrnm');
  $data['email'] = $this->input->post('email');
  $data['password'] = password_hash($this->input->post('psw'),PASSWORD_BCRYPT);
  
  $res =  $this->db->insert('admin_login',$data);
  if ($res) {
                // $_SESSION['success_message'] = "Admin Login successfully";
                $this->session->set_flashdata('success', 'Registration successfully');
                redirect('user');
                // echo "success";
            } else {
              $this->session->set_flashdata('danger', 'Registration Failed');
                  // $_SESSION['error_message'] = "Error";
                redirect('user');
                // echo"failed";
            }
        }






































}