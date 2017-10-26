<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {

	public function Location(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Reference_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Reference";
				$data['Site'] = $this->Reference_model->getSite();
				$data['Table'] = $this->Reference_model->getLocation();
		        $this->load->view('Reference/Location',$data);
    }else {
			redirect(base_url());
    }
	}

public function InputLocation()
	{
    	if ($this->session->userdata('Drilling')) {
    		$Location = $this->input->post("location");
    		$Site = $this->input->post("site");  

    		$Location = array(
    			'Site' => $Site,
    			'Name' => $Location,
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);

    		$this->Reference_model->InputLocation($Location);

    		redirect('Reference/Location');
		}
		else {
			redirect(base_url());
		}

	}

public function Delete_multiple()
	{
		if ($this->session->userdata('Drilling')) {
			
			$this->Reference_model->DeleteMultipleLocation();

			redirect('Reference/Location');
		}else {
			redirect(base_url());
		}
	}
}
?>
