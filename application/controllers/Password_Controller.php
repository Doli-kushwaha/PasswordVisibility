<?php 

class Password_Controller extends CI_Controller
{
	
	


public function index(){
	$this->load->view('pass/password_visible');
}


public function addpass(){
	$data['username'] = $this->input->post('usrnm');
	$data['email'] = $this->input->post('email');
	$data['password'] = password_hash($this->input->post('psw'),PASSWORD_BCRYPT);
  
   $res = $this->db->insert('admin_login',$data);

   if ($res) {
                // $_SESSION['success_message'] = "Admin Login successfully";
                $this->session->set_flashdata('success', 'Registration successfully');
                redirect('Password_Controller/index');
                // echo "success";
            } else {
              $this->session->set_flashdata('danger', 'Registration Failed');
                  // $_SESSION['error_message'] = "Error";
                redirect('index');
                // echo"failed";
            }

}














}











?>