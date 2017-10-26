<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Table extends CI_Controller {

	public function Table(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Shetraining_model');
		$this->load->model('Reference_model');
    $this->load->model('Maintenance_model');
    $this->load->model('Finding_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Finding";

				$data['Site'] = $this->Reference_model->getSite();
			
				$data['dateInformationStart'] = "";
       	$data['dateInformationEnd'] = "";
        $data['siteInformation'] = "";


       			$start ="";
       			$end="";
       			$site="";
       	
       			$data['Finding'] = $this->Finding_model->ViewFinding($start,$end,$site);
		        $this->load->view('Finding/Table',$data);
    }else {
			redirect(base_url());
    }
	}

	public function View(){
    if ($this->session->userdata('Drilling')) {
    	$data['main'] = "Finding";
    	
     			  $data['Site'] = $this->Reference_model->getSite();
				    $data['dateInformationStart'] = $this->input->post('start');
       			$data['dateInformationEnd'] = $this->input->post('end');
       			$data['siteInformation'] = $this->input->post('siteTable');

      $startdate = $this->input->post('start');
      $finishdate = $this->input->post('end');
      $site = $this->input->post('siteTable');
     
      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];
      	
    
      $data['Finding'] = $this->Finding_model->ViewFinding($start,$end,$site);

      $this->load->view('Finding/Table',$data);
    }
    else {
      redirect(base_url());
    }
  }

  public function Delete_multiple_Finding()
	{
		if ($this->session->userdata('Drilling')) {
			
			$this->Finding_model->DeleteMultipleFinding();
				$data['main'] = "Finding";
    	
     			  $data['Site'] = $this->Reference_model->getSite();
				    $data['dateInformationStart'] = $this->input->post('dateMaintenanceStart');
       			$data['dateInformationEnd'] = $this->input->post('dateMaintenanceEnd');;
       			$data['siteInformation'] = $this->input->post('siteMaintenance');

      $startdate = $this->input->post('dateMaintenanceStart');
      $finishdate = $this->input->post('dateMaintenanceEnd');
      $site = $this->input->post('siteMaintenance');


      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];
 
    
      $data['Finding'] = $this->Finding_model->ViewFinding($start,$end,$site);
       $this->load->view('Finding/Table',$data);
		}else {
			redirect(base_url());
		}
	}

  public function pageUpdate($id){
    if ($this->session->userdata('Drilling')) {
        $data['main'] = "Finding";
        $data['Site'] = $this->Reference_model->getSite();
        $data['Table'] = $this->Finding_model->getFindingbyId($id);
        $data['id'] = $id;
            $this->load->view('Finding/Update',$data);
    }else {
      redirect(base_url());
    }
  }

public function Update($id){
  if ($this->session->userdata('Drilling')) {

        $data['main'] = "Finding";

        $Date = $this->input->post("date");
        $Site = $this->input->post("site");
        $FindingFrom = $this->input->post("findingfrom");
        $Observer = $this->input->post("observer");
        $Findingdetails = $this->input->post("findingdetails");
        $Procedurespreferences = $this->input->post("procedurepreferences");
        $Personinvolved = $this->input->post("personinvolved");
        $Accountability = $this->input->post("accountability");
        $Bywho = $this->input->post("bywho");
        $Bywhen = $this->input->post("bywhen");
        $Recommendationaction = $this->input->post("recommendationaction");
        $Completedate = $this->input->post("completedate");
        $Status = $this->input->post("status");
        $Location = $this->input->post("location");
        $Type = $this->input->post("type");
        $Class = $this->input->post("class");
        $Riskrank = $this->input->post("riskrank");


          $data['main'] = "Finding";
          $data['Site'] = $this->Reference_model->getSite();
          $data['Location'] = $this->Reference_model->getLocation();
          $data['Rig'] = $this->Reference_model->getRig();
    
        $Finding = array(
          'date' => $Date,
          'site' => $Site,
          'findingfrom' => $FindingFrom,
          'observer' => $Observer,
          'findingdetails' => $Findingdetails,
          'procedurespreferences' => $Procedurespreferences,
          'personinvolved' => $Personinvolved,
          'accountability' => $Accountability,
          'bywho' => $Bywho,
          'bywhen' => $Bywhen,
          'recommendationaction' => $Recommendationaction,
          'completedate' => $Completedate,
          'status' => $Status,
          'location' => $Location,
          'type' => $Type,
          'class' => $Class,
          'riskrank' => $Riskrank,
          'usrid' => $this->session->userdata('usernameDrilling'),
          );
      

        $this->Finding_model->UpdateFinding($Finding,$id);

        redirect('Finding/Table');

  }
  else{
    redirect(base_url());
  }
}


}
?>
