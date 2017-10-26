<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Area extends CI_Controller {

	public function Area(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Reference_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Reference";
				$data['Table'] = $this->Reference_model->getArea();
		        $this->load->view('Reference/Area',$data);
    }else {
			redirect(base_url());
    }
	}

public function InputArea()
	{
    	if ($this->session->userdata('Drilling')) {
    		$Name = $this->input->post("name");

    		$Area = array(
    			'Name' => $Name,
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);

    		$this->Reference_model->InputArea($Area);

    		redirect('Reference/Area');
		}
		else {
			redirect(base_url());
		}

	}

public function Delete_multiple()
	{
		if ($this->session->userdata('Drilling')) {
			
			$this->Reference_model->DeleteMultipleArea();

			redirect('Reference/Area');
		}else {
			redirect(base_url());
		}
	}
}
?>
