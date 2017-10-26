<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input extends CI_Controller {

	public function Input(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Maintenance_model');
		$this->load->model('Reference_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Maintenance";
				$data['Site'] = $this->Reference_model->getSite();
				$data['Rig'] = $this->Reference_model->getRig();
		        $this->load->view('Maintenance/Input',$data);
    }else {
			redirect(base_url());
    }
	}

	public function Insert(){
		if ($this->session->userdata('Drilling')){

				$data['Site'] = $this->Reference_model->getSite();
				$data['Location'] = $this->Reference_model->getLocation();
				$data['Rig'] = $this->Reference_model->getRig();

				$data['main'] = "Maintenance";
			
			$Site = $this->input->post('site');
			$Plantitem = $this->input->post('plantitem');
			$Location = $this->input->post('location');
			$Compcodes = $this->input->post('compcodes');
			$Workorder = $this->input->post('workorder');
			$Action = $this->input->post('action');
			$Hmustart = $this->input->post('hmsustart');
			$Hmsuend = $this->input->post('hmsuend');
			$Description = $this->input->post('description');


			$DateBreakdown = $this->input->post('datebreakdown');
			$Downtimestart = $this->input->post('downtimestart');
			$Downtimeend = $this->input->post('downtimeend');
			$Totaldowntime = $this->input->post('totaldowntime');
			$Workcodes = $this->input->post('workcodes');
			$Delaycodes = $this->input->post('delaycodes');
			$Delayhours = $this->input->post('delayhours');
			$Remarks = $this->input->post('remarks');

			$Finishbreakdown = $this->input->post('datefinishbreakdown');
			$Onprogress = $this->input->post('onprogress');
			$Waitingparts = $this->input->post('waitingparts');
			$Manpower = $this->input->post('manpower');
			$Outsiterepair = $this->input->post('outsiterepair');
			$Waitingtools = $this->input->post('waitingtools');
			$Waitingdecision = $this->input->post('waitingdecision');

			

			$Maintenance = array(
    			'site' => $Site,
    			'plantitem' => $Plantitem,
    			'location' => $Location,
    			'compcodes' => $Compcodes,
    			'workorder' => $Workorder,
    			'action' => $Action,
    			'hmsustart' => $Hmustart,
    			'hmsuend' => $Hmsuend,
    			'description' => $Description,
    			'datebreakdown' => $DateBreakdown,
    			'downtimestart' => $Downtimestart,
    			'downtimeend' => $Downtimeend,
    			'totaldowntime' => $Totaldowntime,
    			'workcodes' => $Workcodes,
    			'delaycodes' => $Delaycodes,
    			'delayhours' =>$Delayhours,
    			'remarks' => $Remarks,
    			'finishbreakdown' => $Finishbreakdown,
    			'onprogress' => $Onprogress,
    			'waitingparts' => $Waitingparts,
    			'manpower' => $Manpower,
    			'outsiterepair' => $Outsiterepair,
    			'waitingtools' => $Waitingtools,
    			'waitingdecision' => $Waitingdecision,
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);

			$this->Maintenance_model->InsertMaintenance($Maintenance);


			$this->load->view('Maintenance/Input',$data);
		}else{
			$data['message'] = '';
			$this->load->view('Index', $data);
		}
	}


}
?>
