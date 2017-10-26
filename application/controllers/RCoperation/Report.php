<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	public function Report(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Reference_model');
		$this->load->model('Diamonddrilling_model');
    $this->load->model('RCoperation_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "InputRCoperation";

				$data['dateInformationStart'] = "";
       			$data['dateInformationEnd'] = "";
       			$data['siteInformation'] = "";
       			$data['locationInformation'] = "";
       			$data['rigInformation'] = "";
       			$data['Site'] = $this->Reference_model->getSite();
				    $data['Location'] = $this->Reference_model->getLocationTes();
            $data['Rig'] = $this->Reference_model->getRigTes();
            $start = "";
            $end= "";
            $rig = "";
            $location ="";
            $site="";
            $status = "RC";
           	$data['Manpower'] = $this->Diamonddrilling_model->ViewManpower($start,$end,$site,$location,$rig,$status);
      		  $data['Consumable'] = $this->Diamonddrilling_model->ViewConsumable($start,$end,$site,$location,$rig,$status);

      		  $data['Activity'] = $this->Diamonddrilling_model->ViewActivity($start,$end,$site,$location,$rig,$status);

      		  $data['Downhole'] = $this->Diamonddrilling_model->ViewDownhole($start,$end,$site,$location,$rig,$status);
      		  $data['Survey'] = $this->Diamonddrilling_model->ViewSurvey($start,$end,$site,$location,$rig,$status);

            $data['Drilling'] = $this->Diamonddrilling_model->ViewDrilling($start,$end,$site,$location,$rig,$status);

		        $this->load->view('RCoperation/Report',$data);
    }else {
			redirect(base_url());
    }
	}

	
  public function ViewReport(){
    if ($this->session->userdata('Drilling')) {
    	$data['main'] = "InputRCoperation";
    	
     		$data['Site'] = $this->Reference_model->getSite();
				$data['Location'] = $this->Reference_model->getLocationTes();
        $data['Rig'] = $this->Reference_model->getRigTes();
				

            $data['dateInformationStart'] = $this->input->post('start');
       			$data['dateInformationEnd'] = $this->input->post('end');;
       			$data['siteInformation'] = $this->input->post('site');
       			$data['locationInformation'] = $this->input->post('location');
       			$data['rigInformation'] = $this->input->post('rig');

      $startdate = $this->input->post('start');
      $finishdate = $this->input->post('end');
      $site = $this->input->post('site');
      $location = $this->input->post('location');
      $rig = $this->input->post('rig');
      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];
      $status = "RC";
    
      $data['Manpower'] = $this->Diamonddrilling_model->ViewManpower($start,$end,$site,$location,$rig,$status);
      $data['Consumable'] = $this->Diamonddrilling_model->ViewConsumable($start,$end,$site,$location,$rig,$status);
      $data['Activity'] = $this->Diamonddrilling_model->ViewActivity($start,$end,$site,$location,$rig,$status);
      $data['Downhole'] = $this->Diamonddrilling_model->ViewDownhole($start,$end,$site,$location,$rig,$status);
      $data['Survey'] = $this->Diamonddrilling_model->ViewSurvey($start,$end,$site,$location,$rig,$status);
      $data['Drilling'] = $this->Diamonddrilling_model->ViewDrilling($start,$end,$site,$location,$rig,$status);
    
      
      $this->load->view('RCoperation/Report',$data);
    }
    else {
      redirect(base_url());
    }
  }

public function Delete_multiple_Manpower()
	{
		if ($this->session->userdata('Drilling')) {
			
			$this->RCoperation_model->DeleteMultipleManpower();
				$data['main'] = "InputRCoperation";
			  $data['Location'] = $this->Reference_model->getLocationTes();
        $data['Rig'] = $this->Reference_model->getRigTes();


				    $data['dateInformationStart'] = $this->input->post('dateManpowerStart');
       			$data['dateInformationEnd'] = $this->input->post('dateManpowerEnd');;
       			$data['siteInformation'] = $this->input->post('siteManpower');
       			$data['locationInformation'] = $this->input->post('locationManpower');
       			$data['rigInformation'] = $this->input->post('rigManpower');

      $startdate = $this->input->post('dateManpowerStart');
      $finishdate = $this->input->post('dateManpowerEnd');
   
      $site = $this->input->post('siteManpower');
      $location = $this->input->post('locationManpower');
      $rig = $this->input->post('rigManpower');

      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];

   
    
      $status = "RC";
    
      $data['Manpower'] = $this->Diamonddrilling_model->ViewManpower($start,$end,$site,$location,$rig,$status);
      $data['Consumable'] = $this->Diamonddrilling_model->ViewConsumable($start,$end,$site,$location,$rig,$status);
      $data['Activity'] = $this->Diamonddrilling_model->ViewActivity($start,$end,$site,$location,$rig,$status);
      $data['Downhole'] = $this->Diamonddrilling_model->ViewDownhole($start,$end,$site,$location,$rig,$status);
      $data['Survey'] = $this->Diamonddrilling_model->ViewSurvey($start,$end,$site,$location,$rig,$status);
      $data['Drilling'] = $this->Diamonddrilling_model->ViewDrilling($start,$end,$site,$location,$rig,$status);


		$this->load->view('RCoperation/Report',$data);
		}else {
			redirect(base_url());
		}
	}

	public function Delete_multiple_Consumable()
	{
		if ($this->session->userdata('Drilling')) {
			
			$this->RCoperation_model->DeleteMultipleConsumable();
				$data['main'] = "InputRCoperation";
        $data['Site'] = $this->Reference_model->getSite();
        $data['Location'] = $this->Reference_model->getLocationTes();
        $data['Rig'] = $this->Reference_model->getRigTes();


            $data['dateInformationStart'] = $this->input->post('dateConsumableStart');
            $data['dateInformationEnd'] = $this->input->post('dateConsumableEnd');;
            $data['siteInformation'] = $this->input->post('siteConsumable');
            $data['locationInformation'] = $this->input->post('locationConsumable');
            $data['rigInformation'] = $this->input->post('rigConsumable');

      $startdate = $this->input->post('dateConsumableStart');
      $finishdate = $this->input->post('dateConsumableEnd');
   
      $site = $this->input->post('siteConsumable');
      $location = $this->input->post('locationConsumable');
      $rig = $this->input->post('rigConsumable');

      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];

   
    
      $status = "RC";
    
      $data['Manpower'] = $this->Diamonddrilling_model->ViewManpower($start,$end,$site,$location,$rig,$status);
      $data['Consumable'] = $this->Diamonddrilling_model->ViewConsumable($start,$end,$site,$location,$rig,$status);
      $data['Activity'] = $this->Diamonddrilling_model->ViewActivity($start,$end,$site,$location,$rig,$status);
      $data['Downhole'] = $this->Diamonddrilling_model->ViewDownhole($start,$end,$site,$location,$rig,$status);
      $data['Survey'] = $this->Diamonddrilling_model->ViewSurvey($start,$end,$site,$location,$rig,$status);
      $data['Drilling'] = $this->Diamonddrilling_model->ViewDrilling($start,$end,$site,$location,$rig,$status);
   

      

    $this->load->view('RCoperation/Report',$data);
		}else {
			redirect(base_url());
		}
	}

  public function Delete_multiple_Activity()
  {
    if ($this->session->userdata('Drilling')) {
      
      $this->RCoperation_model->DeleteMultipleActivity();
        $data['main'] = "InputRCoperation";
        $data['Site'] = $this->Reference_model->getSite();
        $data['Location'] = $this->Reference_model->getLocationTes();
        $data['Rig'] = $this->Reference_model->getRigTes();


            $data['dateInformationStart'] = $this->input->post('dateActivityStart');
            $data['dateInformationEnd'] = $this->input->post('dateActivityEnd');;
            $data['siteInformation'] = $this->input->post('siteActivity');
            $data['locationInformation'] = $this->input->post('locationActivity');
            $data['rigInformation'] = $this->input->post('rigActivity');

      $startdate = $this->input->post('dateActivityStart');
      $finishdate = $this->input->post('dateActivityEnd');
   
      $site = $this->input->post('siteActivity');
      $location = $this->input->post('locationActivity');
      $rig = $this->input->post('rigActivity');

      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];

      $status = "RC";
    
      $data['Manpower'] = $this->Diamonddrilling_model->ViewManpower($start,$end,$site,$location,$rig,$status);
      $data['Consumable'] = $this->Diamonddrilling_model->ViewConsumable($start,$end,$site,$location,$rig,$status);
      $data['Activity'] = $this->Diamonddrilling_model->ViewActivity($start,$end,$site,$location,$rig,$status);
      $data['Downhole'] = $this->Diamonddrilling_model->ViewDownhole($start,$end,$site,$location,$rig,$status);
      $data['Survey'] = $this->Diamonddrilling_model->ViewSurvey($start,$end,$site,$location,$rig,$status);
      $data['Drilling'] = $this->Diamonddrilling_model->ViewDrilling($start,$end,$site,$location,$rig,$status);
     

      

    $this->load->view('RCoperation/Report',$data);
    }else {
      redirect(base_url());
    }
  }

  public function Delete_multiple_Downhole()
  {
    if ($this->session->userdata('Drilling')) {
      
      $this->RCoperation_model->DeleteMultipleDownhole();
        $data['main'] = "InputRCoperation";
        $data['Site'] = $this->Reference_model->getSite();
        $data['Location'] = $this->Reference_model->getLocationTes();
        $data['Rig'] = $this->Reference_model->getRigTes();


            $data['dateInformationStart'] = $this->input->post('dateDownholeStart');
            $data['dateInformationEnd'] = $this->input->post('dateDownholeEnd');;
            $data['siteInformation'] = $this->input->post('siteDownhole');
            $data['locationInformation'] = $this->input->post('locationDownhole');
            $data['rigInformation'] = $this->input->post('rigDownhole');

      $startdate = $this->input->post('dateDownholeStart');
      $finishdate = $this->input->post('dateDownholeEnd');
   
      $site = $this->input->post('siteDownhole');
      $location = $this->input->post('locationDownhole');
      $rig = $this->input->post('rigDownhole');

      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];

   
     $status = "RC";
    
      $data['Manpower'] = $this->Diamonddrilling_model->ViewManpower($start,$end,$site,$location,$rig,$status);
      $data['Consumable'] = $this->Diamonddrilling_model->ViewConsumable($start,$end,$site,$location,$rig,$status);
      $data['Activity'] = $this->Diamonddrilling_model->ViewActivity($start,$end,$site,$location,$rig,$status);
      $data['Downhole'] = $this->Diamonddrilling_model->ViewDownhole($start,$end,$site,$location,$rig,$status);
      $data['Survey'] = $this->Diamonddrilling_model->ViewSurvey($start,$end,$site,$location,$rig,$status);
      $data['Drilling'] = $this->Diamonddrilling_model->ViewDrilling($start,$end,$site,$location,$rig,$status);


      

    $this->load->view('RCoperation/Report',$data);
    }else {
      redirect(base_url());
    }
  }

  public function Delete_multiple_Survey()
  {
    if ($this->session->userdata('Drilling')) {
      
       $this->RCoperation_model->DeleteMultipleSurvey();
        $data['main'] = "InputRCoperation";
        $data['Site'] = $this->Reference_model->getSite();
        $data['Location'] = $this->Reference_model->getLocationTes();
        $data['Rig'] = $this->Reference_model->getRigTes();


            $data['dateInformationStart'] = $this->input->post('dateSurveyStart');
            $data['dateInformationEnd'] = $this->input->post('dateSurveyEnd');;
            $data['siteInformation'] = $this->input->post('siteSurvey');
            $data['locationInformation'] = $this->input->post('locationSurvey');
            $data['rigInformation'] = $this->input->post('rigSurvey');

      $startdate = $this->input->post('dateSurveyStart');
      $finishdate = $this->input->post('dateSurveyEnd');
   
      $site = $this->input->post('siteSurvey');
      $location = $this->input->post('locationSurvey');
      $rig = $this->input->post('rigSurvey');

      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];

   
     $status = "RC";
    
      $data['Manpower'] = $this->Diamonddrilling_model->ViewManpower($start,$end,$site,$location,$rig,$status);
      $data['Consumable'] = $this->Diamonddrilling_model->ViewConsumable($start,$end,$site,$location,$rig,$status);
      $data['Activity'] = $this->Diamonddrilling_model->ViewActivity($start,$end,$site,$location,$rig,$status);
      $data['Downhole'] = $this->Diamonddrilling_model->ViewDownhole($start,$end,$site,$location,$rig,$status);
      $data['Survey'] = $this->Diamonddrilling_model->ViewSurvey($start,$end,$site,$location,$rig,$status);
      $data['Drilling'] = $this->Diamonddrilling_model->ViewDrilling($start,$end,$site,$location,$rig,$status);
    
     

    $this->load->view('RCoperation/Report',$data);
    }else {
      redirect(base_url());
    }
  }

   public function Delete_multiple_Details()
  {
    if ($this->session->userdata('Drilling')) {
      
      $this->RCoperation_model->DeleteMultipleDetails();
        $data['main'] = "InputRCoperation";
        $data['Site'] = $this->Reference_model->getSite();
        $data['Location'] = $this->Reference_model->getLocationTes();
        $data['Rig'] = $this->Reference_model->getRigTes();


            $data['dateInformationStart'] = $this->input->post('dateDetailsStart');
            $data['dateInformationEnd'] = $this->input->post('dateDetailsEnd');;
            $data['siteInformation'] = $this->input->post('siteDetails');
            $data['locationInformation'] = $this->input->post('locationDetails');
            $data['rigInformation'] = $this->input->post('rigDetails');

      $startdate = $this->input->post('dateDetailsStart');
      $finishdate = $this->input->post('dateDetailsEnd');

   
      $site = $this->input->post('siteDetails');
      $location = $this->input->post('locationDetails');
      $rig = $this->input->post('rigDetails');

      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];
  
    
       $status = "RC";
    
      $data['Manpower'] = $this->Diamonddrilling_model->ViewManpower($start,$end,$site,$location,$rig,$status);
      $data['Consumable'] = $this->Diamonddrilling_model->ViewConsumable($start,$end,$site,$location,$rig,$status);
      $data['Activity'] = $this->Diamonddrilling_model->ViewActivity($start,$end,$site,$location,$rig,$status);
      $data['Downhole'] = $this->Diamonddrilling_model->ViewDownhole($start,$end,$site,$location,$rig,$status);
      $data['Survey'] = $this->Diamonddrilling_model->ViewSurvey($start,$end,$site,$location,$rig,$status);
      $data['Drilling'] = $this->Diamonddrilling_model->ViewDrilling($start,$end,$site,$location,$rig,$status);
     

      

    $this->load->view('RCoperation/Report',$data);
    }else {
      redirect(base_url());
    }
  }
}
?>
