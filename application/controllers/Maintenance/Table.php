<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Table extends CI_Controller {

	public function Table(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Shetraining_model');
		$this->load->model('Reference_model');
    $this->load->model('Maintenance_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Maintenance";

				$data['Site'] = $this->Reference_model->getSite();
        $data['Rig'] = $this->Reference_model->getRig();
			
				$data['dateInformationStart'] = "";
       	$data['dateInformationEnd'] = "";
        $data['siteInformation'] = "";
        $data['rigInformation'] = "";


       			$start ="";
       			$end="";
       			$site="";
            $rig = "";
       	
       			$data['Maintenance'] = $this->Maintenance_model->ViewMaintenance($start,$end,$site,$rig);
		        $this->load->view('Maintenance/Table',$data);
    }else {
			redirect(base_url());
    }
	}

	public function View(){
    if ($this->session->userdata('Drilling')) {
    	$data['main'] = "Maintenance";
    	
     			  $data['Site'] = $this->Reference_model->getSite();
				    $data['dateInformationStart'] = $this->input->post('start');
       			$data['dateInformationEnd'] = $this->input->post('end');
       			$data['siteInformation'] = $this->input->post('siteTable');
            $data['rigInformation'] = $this->input->post('rigTable');

      $startdate = $this->input->post('start');
      $finishdate = $this->input->post('end');
      $site = $this->input->post('siteTable');
      $rig = $this->input->post('siteRig');
     
      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];
      	
    
      $data['Maintenance'] = $this->Maintenance_model->ViewMaintenance($start,$end,$site,$rig);

      $this->load->view('Maintenance/Table',$data);
    }
    else {
      redirect(base_url());
    }
  }

  public function Delete_multiple_Maintenance()
	{
		if ($this->session->userdata('Drilling')) {
			
			$this->Maintenance_model->DeleteMultipleMaintenance();
				$data['main'] = "Maintenance";
    	
     			  $data['Site'] = $this->Reference_model->getSite();
				    $data['dateInformationStart'] = $this->input->post('dateMaintenanceStart');
       			$data['dateInformationEnd'] = $this->input->post('dateMaintenanceEnd');;
       			$data['siteInformation'] = $this->input->post('siteMaintenance');

      $startdate = $this->input->post('dateMaintenanceStart');
      $finishdate = $this->input->post('dateMaintenanceEnd');
      $site = $this->input->post('siteMaintenance');


      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];
 
    
      $data['Maintenance'] = $this->Maintenance_model->ViewMaintenance($start,$end,$site);
       $this->load->view('Maintenance/Table',$data);
		}else {
			redirect(base_url());
		}
	}


}
?>
