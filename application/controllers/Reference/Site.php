<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function Site(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		//$this->load->model('User_model');
		$this->load->model("Reference_model");
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Reference";
				$data['Table'] = $this->Reference_model->getSite();
		        $this->load->view('Reference/Site',$data);
    }else {
			redirect(base_url());
    }
	}


    public function InputSite()
	{
    	if ($this->session->userdata('Drilling')) {
    		$Name = $this->input->post("name");  

    		$Site = array(
    			'Name' => $Name,
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);

    		$this->Reference_model->InputSite($Site);

    		redirect('Reference/Site');
		}
		else {
			redirect(base_url());
		}

	}

	public function Delete_multiple()
	{
		if ($this->session->userdata('Drilling')) {
			
			$this->Reference_model->DeleteMultipleSite();

			redirect('Reference/Site');
		}else {
			redirect(base_url());
		}
	}
}
?>
