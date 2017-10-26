<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Drilling extends CI_Controller {

	public function Drilling(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		//$this->load->model('User_model');
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
