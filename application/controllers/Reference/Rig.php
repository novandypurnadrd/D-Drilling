<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rig extends CI_Controller {

	public function Rig(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Reference_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Reference";
				$data['Site'] = $this->Reference_model->getSite();
				$data['Location'] = $this->Reference_model->getLocation();
				
				$data['Table'] = $this->Reference_model->getRig();
		        $this->load->view('Reference/Rig',$data);
    }else {
			redirect(base_url());
    }
	}

public function InputRig()
	{
    	if ($this->session->userdata('Drilling')) {
    		$Name = $this->input->post("name");
    		$Site = $this->input->post("site");
    		$Location = $this->input->post("location");  

    		$Rig = array(
    			'Site' => $Site,
    			'Location' =>$Location,
    			'Name' => $Name,
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);

    		$this->Reference_model->InputRig($Rig);

    		redirect('Reference/Rig');
		}
		else {
			redirect(base_url());
		}

	}

public function Delete_multiple()
	{
		if ($this->session->userdata('Drilling')) {
			
			$this->Reference_model->DeleteMultipleRig();

			redirect('Reference/Rig');
		}else {
			redirect(base_url());
		}
	}


public function pageUpdate($id){
    if ($this->session->userdata('Drilling')) {
				$data['main'] = "Reference";
				$data['Site'] = $this->Reference_model->getSite();
				$data['Location'] = $this->Reference_model->getLocation();
				$data['Tableall'] = $this->Reference_model->getRig();
				$data['Table'] = $this->Reference_model->getRigbyId($id);
				$data['id'] = $id;
		        $this->load->view('Reference/RigUpdate',$data);
    }else {
      redirect(base_url());
    }
	}

public function Update($id){
	if ($this->session->userdata('Drilling')) {
		$data['main'] = "Reference";

				$data['Site'] = $this->Reference_model->getSite();
				$data['Location'] = $this->Reference_model->getLocation();
				
				$data['Table'] = $this->Reference_model->getRig();

				$Site = $this->input->post('site');
				$Location =$this->input->post('location');
				$Rig = $this->input->post('name');

				$Data = array(
    			'Site' => $Site,
    			'Location' =>$Location,
    			'Name' => $Rig,
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);

    	$this->Reference_model->UpdateRig($Data,$id);
    	redirect('Reference/Rig');

	}
	else{
		redirect(base_url());
	}
}

}
?>
