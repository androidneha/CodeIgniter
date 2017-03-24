<?php
class Login extends MY_Controller
{
    public function index()
    {
        if($this->session->userdata('id'))
        {
            return redirect('admin/dashboard');  
        }
        $this->load->helper('form');
        $this->load->view('public/admin_login');      
    }
    
    public function admin_login()
    {
        $this->load->library('form_validation');
        //$this->form_validation->set_rules('username','User Name','required|alpha|trim');
        //$this->form_validation->set_rules('password','Password','required');
        
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if($this->form_validation->run('admin_login'))// if validation success
        {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->load->model('loginModel');
            if($this->loginModel->valid_login($username,$password))
            {
                //If Successful then store id of user into session
                $login_id=$this->loginModel->valid_login($username,$password);
                $this->session->set_userdata('id',$login_id);
                return redirect('admin/dashboard');
            }
            else
            {
                $this->session->set_flashdata('login_failed',"Invalid Username Or Password.");
                return redirect('login');
            }
        }
        else
        {
            $this->load->view('public/admin_login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        return redirect('login');
    }
}

