<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Drilling extends CI_Controller {

	public function Drilling(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('User_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Dashboard";
		        $this->load->view('Dashboard', $data);
    }else {
			$data['message'] = '';
			$this->load->view('Index', $data);
    }
	}

	public function Profile(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Profile";
		        $this->load->view('Profile', $data);
    }else {
			$data['message'] = '';
			$this->load->view('Index', $data);
    }
	}


	public function UpdateProfile()
	{
		if ($this->session->userdata('Drilling')) {


			$Username = $this->input->post('username');
			$CurrentPassword = md5($this->input->post('current'));
			$NewPassword = md5($this->input->post('new'));

			$User = $this->User_model->GetUser($Username,$CurrentPassword);

			if($User){

				$data = array(

					'username'=> $this->session->userdata('usernameDrilling'),
					'password'=> $NewPassword,
					'role'=> $this->session->userdata('roleDrilling'),
					'name'=> $this->input->post('name'),

				);

				$this->User_model->updateProfile($data);

				 $this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Updated Password success !!</div></div>");
                redirect('Drilling/Profile'); 

			}else{

				 $this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">
				Updated Password Failed, Current Password Wrong !!</div></div>");
                redirect('Drilling/Profile'); 
			}

		}
		else {
			redirect(base_url());
		}
	}



	public function Logout()
	{
		$this->session->sess_destroy();
		$data['message'] = '';
		redirect(base_url());
	}

    public function Login()
    {
            $this->load->view('Dashboard');
    }
}
?>
